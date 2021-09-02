<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quantityprice;
use App\Models\Product;

class QuantityController extends Controller
{
    
    public function index()
    {
        $quantityprices = Quantityprice::all()->toArray();
        return array_reverse($quantityprices); 
    }

     
    public function store(Request $request)
    {
        $quantityprice = new Quantityprice([
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
            'amount' => $request->input('amount'),
            'detail' => $request->input('detail')
        ]);

       
        $quantityprice->save();

        return response()->json('Quantity price Input ok!');
    }

    
    public function show(Quantity $quantity)
    {
        //
    }

    public function edit(Quantity $quantity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quantity $quantity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quantity $quantity)
    {
        //
    }

    public function productId(){
        
        $data = Product::get();
        
        return response()->json($data);
    }
}
