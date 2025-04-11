<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Http\Controllers\Api\ApiController;
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

        $transaksi = new transaksi;
        $transaksi->nama = $nama;
        $transaksi->email = $email;
        $transaksi->nominal = $nominal;
        $transaksi->nohp = $nohp;
        $transaksi->invoice = "donasi_" . rand(20, 200);
        $transaksi->save();

        $merchantRef = $transaksi->invoice;//your merchant reference
        $init = $this->tripay->initTransaction($merchantRef);

        $init->setAmount($transaksi->nominal); // for close payment
        // $init->setMethod('BNIVA'); // for open payment

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
        ]); // set your payload, with more examples https://tripay.co.id/developer

        $getPayload = $transaction->getPayload();
        $get_data_from_server = $transaction->getJson();

        // return response() -> json($transaction->getData());
        // return response() -> json($get_data_from_server);

        return redirect($get_data_from_server->data->checkout_url);
        
    }

    public function callback(Request $request) {
        $init = $this->tripay->initCallback(); // return callback
        $result = $init->getJson(); // get all callback

        if($request->header("X-Callback-Event") != "payment_status") {
            die("Akses dilarang");
        }

        $transaksi = transaksi::where('invoice', $result->merchant_ref)-> first();

        if($transaksi) {
            if($result->status == "PAID") {
                $transaksi->status = "PAID";
            }  
            
            $transaksi->status = $result->status;
            $transaksi->update();

            return response() -> json($transaksi);
        }

        return response() -> json(['message' => "transaksi tidak ada"]);
    }
}
