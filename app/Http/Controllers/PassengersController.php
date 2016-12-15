<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passenger;
use Laracasts\Flash\Flash;

class PassengersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $passengers= Passenger::orderBy('id','ASC')->paginate(10);
        return view('admin.passenger.index')->with('passengers', $passengers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.passenger.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $passenger= new Passenger($request->all());

      if ($passenger->save()) {
        Flash::success("Se ha registrado ".$passenger->pas_name."De forma Exitosa");
        return view('admin.passenger.create');
      }else {
        dd('Usuarion Denegado');
      }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id$passe
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
        $passenger=Passenger::find($id);
        return view('admin.passenger.edit')->with('passenger', $passenger);
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
       $passenger=Passenger::find($id);
       $passenger->delete();
       Flash::error('El usuario '.$passenger->pas_name.'Se Elimino');
       return redirect()->route('passengers.index');
    }
}
