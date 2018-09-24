<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SaveUserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
      if(auth()->user()->tipo == 'administrador'){
        $users = User::nombre($request->get('nombre'))->orderBy('tipo')->paginate(15);
      
        return view('admin.user.index', compact('users'));
    } 
    else {

        return redirect()->route('home');
      # code...
    } }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(SaveUserRequest $request)
    {
        $data = [
             'tipod'        => $request->get('tipod'),
             'identificacion' => $request->get('identificacion'),
             'telefonor' => $request->get('telefonor'),
             'direccionr' => $request->get('direccionr'),
            'nombre_negocio' => $request->get('nombre_negocio'),

            'nombre'        => $request->get('nombre'),
            'email'         => $request->get('email'),
            'user'          => $request->get('user'),
            'password'    => \Hash::make($request->get('password')),
            'tipo'          => $request->get('tipo'),
            'active'        => $request->has('active') ? 1 : 0,

        ];

        $user = User::create($data);

        $message = $user ? 'administrador agregado correctamente!' : 'El administrador NO pudo agregarse!';

        return redirect()->route('admin.user.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'nombre'        => 'required|max:100',
            'telefonor'     => 'required|max:100',
            'email'         => 'required|email',
            'user'          => 'required|min:4|max:20',

        ]);
        $user->identificacion = $request->get('identificacion');
        $user->nombre = $request->get('nombre');
        $user->telefonor = $request->get('telefonor');
        $user->nombre_negocio = $request->get('nombre_negocio');
        $user->direccionr = $request->get('direccionr');
        $user->email = $request->get('email');
        $user->user = $request->get('user');
        if($request->get('password') !="") $user->password = \Hash::make($request->get('password'));
        $updated = $user->save();
        $message = $updated ? 'Usuario actualizado correctamente!' : 'El Usuario NO pudo actualizarse!';
        return redirect()->route('home')->with('message', $message);
    }



    public function destroy(User $user)
    {
        if(auth()->user()->tipo == 'administrador'){
            $deleted = $user->delete();
        $message = $deleted ? 'Usuario eliminado correctamente!' : 'El Usuario NO pudo eliminarse!';
        return redirect()->route('admin.user.index')->with('message', $message);
    } 
    else {

        $deleted = $user->delete();
        $message = $deleted ? 'Usuario eliminado correctamente!' : 'El Usuario NO pudo eliminarse!';
        return redirect()->route('home')->with('message', $message);
    }
        
    }
}