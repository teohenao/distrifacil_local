<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

use App\Order;
use App\OrderItem;
class StoreController extends Controller
{
    public function index()
    {

    $products = Product::paginate(12);
    	//dd($products);
    	return view('store.index', compact('products'));
    }

    public function show($direccion)
    {
    	$product = Product::where('direccion', $direccion)->first();
    	//dd($product);

    	return view('store.show', compact('product'));
    }

public function getOrder(){
  $this->saveOrder(\Session::get('carrito'));
			\Session::forget('carrito');

			return \Redirect::route('home')
				->with('message', 'Compra realizada de forma correcta');
}

    private function saveOrder($carrito)
    	{
    	    $subtotal = 0;
    	    foreach($carrito as $item){
    	        $subtotal += $item->precio * $item->quantity;


    	    }

    	    $order = Order::create([
    	        'subtotal' => $subtotal,

    	        'user_id' => \Auth::user()->id
    	    ]);

    	    foreach($carrito as $item){
    	        $this->saveOrderItem($item, $order->id);
    	    }
    	}

    	private function saveOrderItem($item, $order_id)
    	{
    		OrderItem::create([
    			'quantity' => $item->quantity,
    			'precio' => $item->precio,
    			'product_id' => $item->id,
    			'order_id' => $order_id
    		]);
    	}



}
