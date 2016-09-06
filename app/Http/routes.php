<?php



//========================= Ruteador Principal=======================
//===================================================================

//========================= Route Trabajando=======================
//===================================================================
//Route::get('Compania', 'companiaController@index');
//Route::get('/', 'DirectorController@index');
//Route::get('Libreta/{id}', 'DirectorController@show');
//Route::post('Libreta/{id}', 'DirectorController@update');
//Route::get('Create', 'DirectorController@create');


//Route::get('Guardia', 'DirectorController@index');
//Route::get('Guardia/{id}', 'DirectorController@show');


//===================================================================
//===================================================================

//Route::get('/', 'datostrabajadorController@index');
//Route::get('Libreta/{id}', 'datostrabajadorController@show');
//Route::post('Libreta/{id}', 'datostrabajadorController@update');


//===================================================================
//===================================================================


Route::group(['prefix' => 'dg'], function(){

    Route::get('Libreta/ajax',array('as'=>'dg.Libreta.myform','uses'=>'DirectorController@myform'));
    Route::get('Libreta/ajax/{id}',array('as'=>'dg.Libreta.myform.ajax','uses'=>'DirectorController@myformAjax'));

    Route::resource('Libreta','DirectorController');
    Route::get('Libreta/{id}/destroy', [

        'uses' => 'DirectorController@destroy',
        'as' => 'dg.Libreta.destroy'
    ]);

});

//estacionamientoController
Route::group(['' => ''], function(){

    Route::resource('estacionamiento','estacionamientoController');
    Route::get('estacionamiento/{id}/destroy', [

        'uses' => 'estacionamientoController@destroy',
        'as' => 'estacionamiento.destroy'
    ]);

});


//paseVehicularController
Route::group(['' => ''], function(){

    Route::resource('paseVehicular','paseVehicularController');
    Route::get('paseVehicular/{id}/destroy', [

        'uses' => 'paseVehicularController@destroy',
        'as' => 'paseVehicular.destroy'
    ]);

});

