<?php
use Illuminate\Foundation\Http\Middleware\Authorize;





//estacionamientoController
Route::group(['' => ''], function(){

    Route::resource('estacionamiento','estacionamientoController');
    Route::get('estacionamiento/{id}/destroy', [

        'uses' => 'estacionamientoController@destroy',
        'as' => 'estacionamiento.destroy'
    ]);

});