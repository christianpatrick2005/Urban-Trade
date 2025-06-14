<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\ApiController;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class transaksiController extends ApiController
{

    public function index() {
        // $metode = $this->tripay->initChannelPembayaran()->getData()[0]->payment;

        // return view('donasi')-> with('metode', $metode);

            $metode = Cache::remember('tripay_metode', 60, function () {
                return $this->tripay->initChannelPembayaran()->getData()[0]->payment;
            });
        
            return view('donasi')->with('metode', $metode);
    }

    public function proccess(Request $request) {
        $nama = $request->nama;
        $email = $request->email;
        $nominal = $request->nominal;
        $nohp = $request->nohp;
        $metode = $request->metode;

        $transaksi = new Transaksi;
        $transaksi->user_id = Auth::id();
        $transaksi->nama = $nama;
        $transaksi->email = $email;
        $transaksi->nominal = $nominal;
        $transaksi->nohp = $nohp;
        $transaksi->invoice = "depo_" . rand(20, 200);
        $transaksi->save();

        $merchantRef = $transaksi->invoice;//your merchant reference
        $init = $this->tripay->initTransaction($merchantRef);

        $init->setAmount($transaksi->nominal); // for close payment

        $signature = $init->createSignature();
        $transaction = $init->closeTransaction(); // define your transaction type, for close transaction use `closeTransaction()`
        $transaction->setPayload([
            'method'            => $metode, // IMPORTANT, dont fill by `getMethod()`!, for more code method you can check here https://tripay.co.id/developer
            'merchant_ref'      => $merchantRef,
            'amount'            => $init->getAmount(),
            'customer_name'     => $transaksi->nama,
            'customer_email'    => $transaksi->email,
            'customer_phone'    => $transaksi->nohp,
            'order_items'       => [
                [
                    'sku'       => 'DONASISOSIAL',
                    'name'      => 'Donasi Sosial',
                    'price'     => $init->getAmount(),
                    'quantity'  => 1
                ]
            ],
            'callback_url'      => 'https://domainanda.com/callback',
            'return_url'        => 'https://domainanda.com/redirect',
            'expired_time'      => (time()+(24*60*60)), // 24 jam
            'signature'         => $init->createSignature()
        ]);
        $getPayload = $transaction->getPayload();
        $get_data_from_server = $transaction->getJson();

        // return response() -> json($transaction->getData());
        // return response() -> json($get_data_from_server);

        return redirect($get_data_from_server->data->checkout_url);
        
    }

    // public function callback(Request $request) {
    //     $init = $this->tripay->initCallback(); // return callback
    //     $result = $init->getJson(); // get all callback

    //     if($request->header("X-Callback-Event") != "payment_status") {
    //         die("Akses dilarang");
    //     }

    //     $transaksi = Transaksi::where('invoice', $result->merchant_ref)-> first();

    //     if($transaksi) {
    //         if($result->status == "PAID") {
    //             $transaksi->status = "PAID";
    //         }  
            
    //         $transaksi->status = $result->status;
    //         $transaksi->update();

    //         return response() -> json($transaksi);
    //     }

    //     return response() -> json(['message' => "transaksi tidak ada"]);
    // }

    public function callback(Request $request) {
    $init = $this->tripay->initCallback();
    $result = $init->getJson();

    if ($request->header("X-Callback-Event") != "payment_status") {
        die("Akses dilarang");
    }

    $transaksi = Transaksi::where('invoice', $result->merchant_ref)->first();

    if ($transaksi) {
        if ($result->status === "PAID") {
            // Update status
            $transaksi->status = "PAID";
            $transaksi->update();

            // Tambahkan saldo user
            $user = $transaksi->user; // Asumsikan relasi sudah dibuat
            if ($user) {
                $user->saldo += $transaksi->nominal;
                $user->save();
            }

            //simpan status dan session
            session()->flash('status', $result->status);
            session()->flash('invoice', $transaksi->invoice);
            session()->flash('nama', $transaksi->nama);
            session()->flash('nominal', $transaksi->nominal);

            return redirect()->route('callback.page');

            return response()->json([
                'message' => 'Saldo berhasil ditambahkan',
                'transaksi' => $transaksi,
                'saldo_terbaru' => $user->saldo ?? null
            ]);
        }

        // Status lain (misal EXPIRED)
        $transaksi->status = $result->status;
        $transaksi->update();

        return response()->json($transaksi);
    }

    return response()->json(['message' => "Transaksi tidak ditemukan"]);
    }
}
