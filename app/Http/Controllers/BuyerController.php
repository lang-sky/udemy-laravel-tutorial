<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BuyerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyers = Buyer::has('transactions')->get();

        // return response()->json(['data' => $buyers], 200); // when using Controller
        return $this->showAll($buyers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buyer = Buyer::has('transactions')->findOrFail($id);

        // return response()->json(['data' => $buyer], 200); // when using Controller
        return $this->showOne($buyer);
    }
}
