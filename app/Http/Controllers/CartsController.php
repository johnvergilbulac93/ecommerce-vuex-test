<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function index(){
        return Cart::with('product')
        ->orderBy('created_at', 'desc')
        ->get();
    }
    public function store(Request $request){

        $item = Cart::where('product_id', $request->get('product_id'));

        if($item->count()){
            $item->increment('quantity');
            $item = $item->first();
        }else{
            $item = Cart::forceCreate([
                'product_id' =>$request->get('product_id'),
                'quantity'  => 1,
            ]);
        }

        return response()->json([
            'quantity' => $item->quantity,
            'product' => $item->product
        ]);
    }
    public function destroy($productID){
        $item = Cart::where('product_id', $productID)->delete();

        return response(null, 200);
    }

    public function destroyAll(){
        Cart::truncate();
    }
}
