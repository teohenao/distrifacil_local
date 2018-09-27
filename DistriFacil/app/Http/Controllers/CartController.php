<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class CartController extends Controller
{
  public function __construct()
	{
		if(!\Session::has('carrito')) \Session::put('carrito', array());
	}
    //metodo para mostrar Carrito
    public function show()
    {
      $carrito =\Session::get('carrito');

      $total = $this->total();
    	return View('store.cart',compact('carrito','total'));
    }
    // agregar a carrito
    public function add(Product $product)
    {
    	$carrito = \Session::get('carrito');
    	$product -> quantity = 1;
    	$carrito[$product->direccion] = $product;
    	\Session::put('carrito', $carrito);
    	return redirect()->route('carrito-show');
    }
    //elimiar de Carrito
    public function delete(Product $product)
    {
    	$carrito = \Session::get('carrito');
    	unset($carrito[$product->direccion]);
    	\Session::put('carrito', $carrito);

    	return redirect()->route('carrito-show');
    }
    //vaciar carrito
    public function trash()
    {
    	\Session::forget('carrito');
    	return redirect()->route('carrito-show');
    }
    //actualizar carrito
      public function update(Product $product, $quantity)
      {
      	$carrito = \Session::get('carrito');
      	$carrito[$product->direccion]->quantity = $quantity;
      	\Session::put('carrito', $carrito);

      	return redirect()->route('carrito-show');
      }

      // Total carrito
    private function total()
    {
    	$carrito = \Session::get('carrito');
    	$total = 0;
    	foreach($carrito as $item){
    		$total += $item->precio * $item->quantity;
    	}

    	return $total;
    }

    // Detalle del pedido
    public function orderDetail()
    {
        if(count(\Session::get('carrito')) <= 0) return redirect()->route('home');
        $carrito = \Session::get('carrito');
        $total = $this->total();


        return view('store.order-detail', compact('carrito', 'total','order'));
    }







}
