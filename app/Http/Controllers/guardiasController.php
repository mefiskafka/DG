<?php

namespace SystemDirectory\Http\Controllers;

use Illuminate\Http\Request;
use SystemDirectory\Http\Requests;
use SystemDirectory\Entities\guardia_programa;
use SystemDirectory\Entities\directorio;
use Carbon\Carbon;

class guardiasController extends Controller
{
    public function index()
    {
        $directorios  = directorio::has('guardia_programa')->get();
//        $guardias = guardia_programa::has('directorio')->get();
//      dd($guardias);
//        $guardias = guardia_programa::all()->toArray();
        return view('guardias.index', compact('directorios'));
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
