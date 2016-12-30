<?php

namespace SystemDirectory\Http\Controllers;

use Illuminate\Http\Request;
use SystemDirectory\Entities\departamento;
use SystemDirectory\Entities\directorio;
use SystemDirectory\Entities\estructuragerencia;
use SystemDirectory\Entities\guardiabyear;
use SystemDirectory\Entities\rolguardia;
use SystemDirectory\Entities\guardia_programa;
use SystemDirectory\Entities\tipoguardia;
use SystemDirectory\Http\Requests;
use Carbon\Carbon;

class guardiasController extends Controller
{
    public function index()
    {
          $personals = estructuragerencia::with('departamento')
                       ->get();
          return view('guardias.index', compact( 'personals'));
    }

    public function roles()
    {
        $roles = rolguardia::
                 get();
        return view('guardias.roles', compact('roles'));
    }

    public function tarjetas()
    {
        $personal = directorio::find(34);

//
        $tarjetas = $personal->dTipoGuardia()->whereHas('Guardia', function($tipo){
            $tipog = guardiabyear::find(2)->id;
//            dd($tipog);
            $tipo->where('guardiabyear_id', '=', $tipog);
        })->get();
       dd($tarjetas);

//        $personal = directorio::lists('id')->toArray();
////        dd($personal);
//        $tarjetas = $personal->guardiabyear->whereHas('TipoGuardia', function($tipo){
//            $tipo->where('tipoguardia_id', '=', 5);
//        })->get();



//        $tarjetas = guardiabyear::with('PersonalGuardia')
//                    ->orderBy('programaGuardia', 'DESC')
//                    ->get();

        return view('guardias.tarjetas', compact('tarjetas'));
    }



//    function TipodelaGuardia(){
//        $personal = PersonalGuardia::find(34);
//
//        return view('guardias.tarjetas', compact('personal'));

//        return $this->TipoGuardia->where('id', 'PersonalGuardia.pivot.tipoguardia_id');
//    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
