<?php
    Route::group(['prefix' => 'dg'], function(){
//        Route::get('Libreta/create/ajax/{id}',
//            array('as'=>'dg.Libreta.myform',
//            'uses'=>'DirectorController@myformAjax')
//        );
        Route::get('Libreta/{Libreta}/edit/ajax/{id}',
            array('as'=>'dg.Libreta.myform',
                'uses'=>'DirectorController@myformAjax')
        );

        Route::resource('Libreta','DirectorController');
        Route::get('Libreta/{id}/destroy',
            [
                'uses' => 'DirectorController@destroy',
                'as' => 'dg.Libreta.destroy'
            ]);
    });

//paseVehicularController
Route::group(['' => ''], function(){
    Route::resource('paseVehicular','paseVehicularController');
    Route::get('paseVehicular/{id}/destroy',
        [
            'uses' => 'paseVehicularController@destroy',
            'as' => 'paseVehicular.destroy'
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

    Route::get('/home', 'DirectorController@home');
    // Route::get('/home', 'HomeController@index');








