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

Route::group(['middleware' =>['web']], function(){

    Route::group(['prefix' => 'dg'], function(){

//    Route::get('Libreta/ajax',array('as'=>'dg.Libreta.myform','uses'=>'DirectorController@myform'));
        Route::get('Libreta/create/ajax/{id}',array('as'=>'dg.Libreta.myform','uses'=>'DirectorController@myformAjax'));

        Route::resource('Libreta','DirectorController');
        Route::get('Libreta/{id}/destroy', [

            'uses' => 'DirectorController@destroy',
            'as' => 'dg.Libreta.destroy'
        ]);

    });

    // Authentication Routes...
    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::post('login', 'Auth\AuthController@login');
    Route::get('logout', 'Auth\AuthController@logout');

    //Registration Routes...
    Route::get('register', 'Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Auth\AuthController@register');

    //Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');



    Route->get('/', function (){
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index');



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





