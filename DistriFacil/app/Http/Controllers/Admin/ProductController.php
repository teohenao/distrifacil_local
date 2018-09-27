<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SaveProductRequest;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

      $products = Product::nombre($request->get('nombre'))->orderBy('id', 'desc')->paginate(7);

        //dd($products);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        //dd($categories);
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
     public function store(SaveProductRequest $request)
    {
        $data = [
            'nombre'        => $request->get('nombre'),
            'tipo'          => $request->get('tipo'),
            'cantidad'       => $request->get('cantidad'),
            'direccion'     => str_slug($request->get('nombre')),
            'descripcion'   => $request->get('descripcion'),
            'sabor'         => $request->get('sabor'),
            'precio'       => $request->get('precio'),
            'sabor'         => $request->get('sabor'),
            'imagen'         => $request->get('imagen'),
            'visible'       => $request->has('visible') ? 1 : 0
        ];

        $product = Product::create($data);

        $message = $product ? 'Producto agregado correctamente!' : 'El producto NO pudo agregarse!';

        return redirect()->route('admin.product.index')->with('message', $message);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Product $product)
    {


        return view('admin.product.edit', compact( 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(SaveProductRequest $request, Product $product)
    {
        $product->fill($request->all());
        $product->direccion= str_slug($request->get('nombre'));
        $product->visible = $request->has('visible') ? 1 : 0;

        $updated = $product->save();

        $message = $updated ? 'Producto actualizado correctamente!' : 'El Producto NO pudo actualizarse!';

        return redirect()->route('admin.product.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Product $product)
    {
        $deleted = $product->delete();

        $message = $deleted ? 'Producto eliminado correctamente!' : 'El producto NO pudo eliminarse!';

        return redirect()->route('admin.product.index')->with('message', $message);
    }

}
