<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tripay\Main;

class ApiController extends Controller
{
    protected $tripay;

    public function __construct()
    {
        $this -> tripay = new Main(
            'DEV-ZO4jcRw6hQXHNzyRIE5OPcZp0ql5lLbpQ4pOSwYB', //api key
            'WNPoH-k09Py-Yq4Y9-yspEs-SUP0H',
            'T38738',
            'sandbox' // fill for sandbox mode, leave blank if in production mode
        );
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
