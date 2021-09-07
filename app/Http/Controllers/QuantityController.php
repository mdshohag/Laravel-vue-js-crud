<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quantityprice;
use App\Models\Product;
use DB;
class QuantityController extends Controller
{
    
    public function index()
    {

        $quantityprices = DB::table('quantityprices')
        ->join('products', 'quantityprices.product_id', '=' ,'products.id')
        ->select('quantityprices.*', 'products.name')->get()->toArray();

        return array_reverse($quantityprices);
      //  return response()->json(['quantityprices' => $quantityprices]);

        
        //  $quantityprices = Quantityprice::all()->toArray();
        // return array_reverse($quantityprices); 

        // $quantitypricess   = DB::table('quantityprices')
        // ->join('products', 'quantityprices.product_id', '=', 'products.id')
        // ->select('quantityprices.*', 'products.name')
        // ->get();
        // return ['quantityprices'=>$quantitypricess];
       //  return array_reverse($quantityprices); 
         
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

    
    // public function show(Quantity $quantity)
    // {
    //     //
    // }
    public function show($id)
    {
        // $Quantityprice      =Quantityprice::all();

        // $quantitys = DB::table('quantityprices')
        // ->join('products', 'quantityprices.product_id', '=' ,'products.id')
        // ->select('quantityprices.*', 'products.name')
        // ->where('quantityprices.id', $id)->get();
         $quantity = Quantityprice::find($id);
       // return $quantity;
        return response()->json($quantity);
      
    }

   
    public function update($id, Request $request)
    {
        $quantity = Quantityprice::find($id);
        $quantity->update($request->all());

        return response()->json('Quantity Price updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quantity = Quantityprice::find($id);
        $quantity->delete();

        return response()->json('Quantity price deleted!');
    }

    // public function productId(){
        
    //     $data = Product::get();
        
    //     return response()->json($data);
    // }
}
