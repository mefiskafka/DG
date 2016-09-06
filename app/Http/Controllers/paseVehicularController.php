<?php

namespace App\Http\Controllers;

use App\directorio;
use App\estacionamiento;
use App\paseVehicular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

class paseVehicularController extends Controller

{
    public function index(){

        $paseVehicular = paseVehicular::all();
//        dd($paseVehicular);

        return view('paseVehicular.index')
            ->with('paseVehicular',$paseVehicular);

    }

    public function create(){

        $estacionamiento = estacionamiento::lists('nombre', 'id')->toArray();
        $directorio = directorio::lists('nombre','id')->toArray();

        return view('paseVehicular.create',['estacionamiento' => $estacionamiento, 'directorio' => $directorio] );
    }

    public function store(Request $request){

        $paseVehicular = new paseVehicular($request->all());
        $paseVehicular->save();
        flash( 'Has agregado a <strong>' . $paseVehicular->directorio->nombre .' '. $paseVehicular->directorio->apeidoPaterno . ' '. $paseVehicular->directorio->apeidoMaterno . '</strong> con <strong> Ficha '. $paseVehicular->directorio->Ficha . '</strong> exitosamente al directorio');
        Session::flash('Message', 'success');

        return redirect()->route('paseVehicular.index');

    }

    public function destroy($id){

        $paseVehicular = paseVehicular::find($id);
        $paseVehicular->delete();
        flash( 'Has eliminado el pase número <strong>' . $paseVehicular->numPase . '</strong> exitosamente.');
        Session::flash('Message', 'warning');

        return redirect()->route('dg.Libreta.index');



    }




    public function edit($id){

        $paseVehicular = paseVehicular::find($id);
        $directorio = directorio::lists('nombre','id')->toArray();
        $estacionamiento = estacionamiento::lists('nombre', 'id')->toArray();

//        dd($directorio);
        return  view('paseVehicular.edit', compact('paseVehicular', 'directorio','estacionamiento'));


    }

    public function update(Request $request, $id)
    {
        $paseVehicular = paseVehicular::find($id);
        $paseVehicular->update($request->all());
        flash( 'Has Actualizado el número de pase <strong>' . $paseVehicular->numPase . ' exitosamente');
        Session::flash('Message', 'success');

        return redirect()->route('paseVehicular.index');


    }


}
