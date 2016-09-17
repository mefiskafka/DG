<?php


use Illuminate\Foundation\Http\Middleware\Authorize;

Route::group(['prefix' => 'dg'], function(){

//    Route::get('Libreta/ajax',array('as'=>'dg.Libreta.myform','uses'=>'DirectorController@myform'));
    Route::get('Libreta/create/ajax/{id}',array('as'=>'dg.Libreta.myform','uses'=>'DirectorController@myformAjax'));

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