<?php

namespace SystemDirectory\Http\Controllers;

use SystemDirectory\Entities\estacionamiento;
use Illuminate\Http\Request;

use SystemDirectory\Http\Requests;
use Illuminate\Support\Facades\Session;

class estacionamientoController extends Controller
{
    public function index(){
        $estacionamiento = estacionamiento::all();
//        dd($estacionamiento);
        return view('estacionamiento.index')
            ->with('estacionamientos',$estacionamiento);

    }

    public function create(){
        $estacionamiento = estacionamiento::lists('nombre', 'id')->toArray();
//        dd($estacionamiento);
        return view('estacionamiento.create',['estacionamiento' => $estacionamiento]);
    }

    public function store(Request $request){

        $estacionamiento = new estacionamiento($request->all());
        $estacionamiento->save();
        flash( 'Has agregado a <strong>' . $estacionamiento->nombre . ' Exitosamente');
        Session::flash('Message', 'success');

        return redirect()->route('estacionamiento.index');

    }

    public function destroy($id){

        $estacionamiento = estacionamiento::find($id);
        $estacionamiento->delete();
        flash( 'Has eliminado a <strong>' . $estacionamiento->nombre .' exitosamente del directorio');
        Session::flash('Message', 'warning');

        return redirect()->route('estacionamiento.index');

    }




    public function edit($id){

        $estacionamiento = estacionamiento::find($id);

        return  view('estacionamiento.edit', compact('estacionamiento'));
//                ->with('directorios',$directorio);

    }

    public function update(Request $request, $id)
    {
        $estacionamiento = estacionamiento::find($id);
        $estacionamiento->update($request->all());
        flash( 'Has Actualizado a <strong>' . $estacionamiento->nombre . 'exitosamente');
        Session::flash('Message', 'success');

        return redirect()->route('estacionamiento.index');
//            ->with('success','Item updated successfully');

    }


}
