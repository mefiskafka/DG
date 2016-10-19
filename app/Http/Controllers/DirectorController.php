<?php

namespace SystemDirectory\Http\Controllers;
use SystemDirectory\Entities\ compania;
use SystemDirectory\Entities\departamento;
use SystemDirectory\Entities\directorio;
use SystemDirectory\Entities\estructuragerencia;
use SystemDirectory\Entities\puesto;
use Illuminate\Http\Request;
use SystemDirectory\Http\Requests;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Laracasts\Flash\Flash;

class DirectorController extends Controller
{

    public function home()    {
        $directorios = directorio::all();
        return view('home')
            ->with('directorios',$directorios);
    }

    public function index()    {
       $directorios = directorio::all();
         return view('dg.Libreta.index')
         ->with('directorios',$directorios);
    }

    public function create() {
        $estructuragerencia = estructuragerencia::lists('gerencia', 'id')->toArray();
        $compania = compania::lists('compania','id')->toArray();
        $puesto = puesto::lists('puesto','id')->toArray();
        return view('dg.Libreta.create',['estructuragerencia' => $estructuragerencia,  'compania' => $compania, 'puesto' => $puesto] );
    }

//   public function myformAjax($id)    {
//        $departamento = departamento::
//            where("estructuragerencia_id",$id)
//            ->lists("departamento","id")->toArray();
//        return json_encode($departamento);
//    }

    public function myformAjax($Libreta, $id)    {
        $departamento = departamento::
        where("estructuragerencia_id", $id)
                     ->lists("departamento","id")->toArray();
//        dd($departamento);
        return json_encode($departamento);
    }


   public function store(Request $request){
          $directorio = new directorio($request->all());
          $directorio->save();
          flash( 'Has agregado a <strong>' . $directorio->nombre .' '. $directorio->apeidoPaterno . ' '. $directorio->apeidoMaterno . '</strong> con <strong> Ficha '. $directorio->Ficha . '</strong> exitosamente al directorio');
          Session::flash('Message', 'success');
          return redirect()->route('dg.Libreta.index');
    }

   public function destroy($id){
        $directorio = directorio::find($id);
        $directorio->delete();
        flash( 'Has eliminado a <strong>' . $directorio->nombre .' '. $directorio->apeidoPaterno . ' '. $directorio->apeidoMaterno . '</strong> con <strong> Ficha '. $directorio->Ficha . '</strong> exitosamente del directorio');
        Session::flash('Message', 'warning');
        return redirect()->route('dg.Libreta.index');
    }

   public function edit($id){
        $directorio = directorio::find($id);
        $estructuragerencia = estructuragerencia::lists('gerencia', 'id')->toArray();
        $departamento = departamento::where('estructuragerencia_id', $directorio->estructuragerencia->id)
                                    ->lists('departamento', 'id')
                                    ->toArray();
        $compania = compania::lists('compania','id')->toArray();
        $puesto = puesto::lists('puesto','id')->toArray();
        return  view('dg.Libreta.edit', compact('directorio', 'estructuragerencia', 'departamento','compania', 'puesto'));
    }

   public function update(Request $request, $id) {
        $directorio = directorio::find($id);
        $directorio->update($request->all());
        flash( 'Has Actualizado a <strong>' . $directorio->nombre .' '. $directorio->apeidoPaterno . ' '. $directorio->apeidoMaterno . '</strong> con <strong> Ficha '. $directorio->Ficha . '</strong> exitosamente al directorio');
        Session::flash('Message', 'success');
        return redirect()->route('dg.Libreta.index');
    }




//#####################################################################################################################
//################## Otra forma de hacer un CRUD


//
//    public function show($id){
//        $directorio = diretorio::find($id);
//        $data = [
//            'id' => $directorio->id,
//            'Ficha' => $directorio->Ficha,
//            'nombre' =>  $directorio->nombre,
//            'apeidoPaterno' => $directorio->apeidoPaterno,
//            'apeidoMaterno' => $directorio->apeidoMaterno,
//            'nivel' => $directorio->nivel,
//            'numExt' => $directorio->numExt,
//            'numCelular' => $directorio->numCelular,
//            'numCasa' => $directorio->numCasa,
//            'emailTrabajo' => $directorio->emailTrabajo,
//            'emailPersonal' => $directorio->emailPersonal,
//            'cumpleaños' => Carbon::parse($directorio->cumpleaños)->format('d-m-Y'),
//
//            'claveCentroTrabajo' => $directorio->estructuragerencia->claveCentroTrabajo,
//            'gerencia' => $directorio->estructuragerencia->gerencia,
//            'claveDepartamento' => $directorio->estructuragerencia->departamento->claveDepartamento,
//            'departamento' => $directorio->estructuragerencia->departamento->departamento,
//            'compania' => $directorio->compania->compania,
//            'puesto' => $directorio->puesto->puesto
//
////            'gerencia' => $directorio->estructuragerencia->gerencia,
////            'puesto' => $directorio->puesto->puesto
//
//        ];
//
//        return view('Libreta/show', $data);
//    }
//
//
//
//    public function update(Request $request, $id){
//
//                    //        $validator = Validator::make( $request->all(),
//                    //            [
//                    //                'nombre' => 'required|min:3'
//                    //            ]);
//                    //
//                    //        if( $validator->fails()){
//                    //            return redirect("client/$id")
//                    //                ->withErrors($validator)
//                    //                ->withInput();
//                    //        }
//                    //        return redirect('/');
//        $directorio = diretorio::find($id);
//        diretorio::where('id' , $id)
//            ->update([
//
//
//                'Ficha' => Input::get('Ficha'),
//                'nombre' => Input::get('nombre'),
//                'apeidoPaterno' => Input::get('apeidoPaterno'),
//                'apeidoMaterno' => Input::get('apeidoMaterno'),
//                'nivel' => Input::get('nivel'),
//                'numExt' => Input::get('numExt'),
//                'numCelular' => Input::get('numCelular'),
//                'numCasa' => Input::get('numCasa'),
//                'emailTrabajo' => Input::get('emailTrabajo'),
//                'emailPersonal' => Input::get('emailPersonal'),
//                'cumpleaños' => Input::get(Carbon::parse()->format('Y-m-d')),
//
//                //                'claveCentroTrabajo' => Input::get('claveCentroTrabajo'),
//                //                'gerencia' => Input::get('gerencia'),
//                //                'claveDepartamento' => Input::get('claveDepartamento'),
//                //                'departamento' => Input::get('$directorio->estructuragerencia->departamento->departamento'),
//                //                'compania' => Input::get('$directorio->compania->compania'),
//                //                'puesto' => Input::get('$directorio->puesto->puesto')
//                //
//
//            ]);
//        return redirect('/');
//
//
//
//
//
//
//    }
//






}
