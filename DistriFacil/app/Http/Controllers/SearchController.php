<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SaveProductRequest;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

      $products = Product::nombre($request->get('nombre'))->orderBy('id', 'desc')->paginate(5);


      return view('store.index', compact('products'));
    }
    public function show(Product $product)
    {
        return $product;
    }




}
