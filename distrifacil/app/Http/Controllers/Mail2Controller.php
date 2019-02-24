<?php

namespace sisVentas\Http\Controllers;



use Illuminate\Http\Request;
use sisVentas\Http\Requests;
use sisVentas\Http\Controllers\Controller;
use sisVentas\Persona;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\PersonaFormRequest;
use DB;
use Mail;
use Session;

class Mail2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

 public function index(){
        return view('contacto2');
 }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function store(PersonaFormRequest $request)
    {
       $personas = sisVentas\persona::all();
       foreach ($personas as $per) {
       Mail::send('emails.contact2',['per'=> $per],$request->all(),function($msj) use($per){
       $message->from('distrifacilarmenia@gmil.com','La Despensa de la Gaseosa');
       $message->to($per->email,$per->nombre)->subject('tenemos una promocion que te puede interesar ' .$per->nombre);
    });
    }
        Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('/');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
