<?php

namespace SystemDirectory\Http\Controllers;

use Illuminate\Http\Request;
use SystemDirectory\Entities\departamento;
use SystemDirectory\Entities\directorio;
use SystemDirectory\Entities\estructuragerencia;
use SystemDirectory\Entities\rolguardia;
use SystemDirectory\Entities\guardia_programa;
use SystemDirectory\Entities\tipoguardia;
use SystemDirectory\Http\Requests;
use Carbon\Carbon;

class guardiasController extends Controller
{
    public function index()
    {
//        $directorios  = directorio::with('guardia_programa')->get();

//        $fechaguardia = guardia_programa
//            ::orderBy('programaGuardia', 'DESC')
//            ->groupBy('programaGuardia')
//            ->get();
//            ->toArray();

//        $personals = guardia_programa
//                                 ::where('programaGuardia', '=', '2016-12-03')
////                                ::has('directorio')
////                                ->groupBy('programaGuardia')
////                                ->where('programaGuardia', '=', $fechaguardia)
//                                ->orderBy('programaGuardia', 'DESC')
////                                ->orderBy('rolguardia_id', 'ASC')
//                                ->get();

        $personals = rolguardia
//                                  ::where('programaGuardia', '=', '2016-12-03')
                                  ::get();

//        dd($personals);
        $personasG = guardia_programa::select('guardia_programas.*', 'directorios.*', 'rolguardias.*', 'tipoguardias.*', 'departamentos.*', 'estructuragerencias.*' )
                                ->join('directorios', 'guardia_programas.directorio_id', '=', 'directorios.id')
                                ->join('rolguardias', 'guardia_programas.rolguardia_id', '=', 'rolguardias.id')
                                ->join('tipoguardias', 'guardia_programas.tipoguardia_id', '=', 'tipoguardias.id')
                                ->join('departamentos', 'directorios.departamento_id', '=', 'departamentos.id')
                                ->join('estructuragerencias', 'departamentos.estructuragerencia_id', '=', 'estructuragerencias.id')
                                ->groupBy('programaGuardia')
                                ->groupBy('estructuragerencias.id')
                                ->groupBy('directorios.Ficha')
                                ->groupBy('tipoguardias.id')
                                ->orderBy('programaGuardia', 'DESC')
                                ->orderBy('rolguardia_id', 'ASC')
                                ->orderBy('tipoguardia_id', 'ASC')
                                ->where('programaGuardia', '=', '2016-11-13')
                                ->get();
//        dd($personals);


      $gerencias = estructuragerencia
                         ::get();

        //        $guardias = guardia_programa::has('directorio')->get();
//dd($personals);
//        $guardias = guardia_programa::all()->toArray();
        return view('guardias.index', compact( 'personals', 'personasG'));
//        return view('guardias.index', compact('fechaguardia', 'gerencias', 'personals'));
    }



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
