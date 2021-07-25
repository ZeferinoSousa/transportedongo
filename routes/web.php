<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SiteController@index')->name('index');
Route::get('historia', 'SiteController@historia')->name('historia');
Route::get('frota', 'SiteController@frota')->name('frota');
Route::get('caminhada', 'SiteController@caminhada')->name('caminhada');
Route::get('transfer', 'SiteController@transfer')->name('transfer');
Route::get('ilha', 'SiteController@ilha')->name('ilha');
Route::get('parque', 'SiteController@parque')->name('parque');
Route::get('galeria', 'SiteController@galeria')->name('galeria');
Route::get('contato', 'SiteController@contato')->name('contato');
Route::get('reserva', 'SiteController@reserva')->name('reserva');

Route::post('contato', 'SiteController@sendmail')->name('contato');
Route::post('reserva', 'SiteController@reservamail')->name('reserva');

Route::get('reserva', 'SiteController@reserva')->name('reserva');

Route::post('transfer', 'SiteController@transfermail')->name('transfer');


Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {

        Route::get('/','AdminController@index')->name('admin');

        Route::get('historia/index','HistoriaController@index')->name('historia-index');
        Route::get('historia/create','HistoriaController@create')->name('historia-create');
        Route::post('historia/store','HistoriaController@store')->name('historia-store');
        Route::get('historia/edit/{id}','HistoriaController@edit')->name('historia-edit');
        Route::put('historia/update/{id}','HistoriaController@update')->name('historia-update');
        Route::get('historia/show/{id}','HistoriaController@show')->name('historia-show');
        Route::delete('historia/delete/{id}','HistoriaController@destroy')->name('historia-delete');

        Route::get('frota/index','FrotaController@index')->name('frota-index');
        Route::get('frota/create','FrotaController@create')->name('frota-create');
        Route::post('frota/store','FrotaController@store')->name('frota-store');
        Route::get('frota/edit/{id}','FrotaController@edit')->name('frota-edit');
        Route::put('frota/update/{id}','FrotaController@update')->name('frota-update');
        Route::get('frota/show/{id}','FrotaController@show')->name('frota-show');
        Route::delete('frota/delete/{id}','FrotaController@destroy')->name('frota-delete');

        Route::get('caminhada/index','CaminhadaController@index')->name('caminhada-index');
        Route::get('caminhada/create','CaminhadaController@create')->name('caminhada-create');
        Route::post('caminhada/store','CaminhadaController@store')->name('caminhada-store');
        Route::get('caminhada/edit/{id}','CaminhadaController@edit')->name('caminhada-edit');
        Route::put('caminhada/update/{id}','CaminhadaController@update')->name('caminhada-update');
        Route::get('caminhada/show/{id}','CaminhadaController@show')->name('caminhada-show');
        Route::delete('caminhada/delete/{id}','CaminhadaController@destroy')->name('caminhada-delete');

        Route::get('ilha/index','IlhaController@index')->name('ilha-index');
        Route::get('ilha/create','IlhaController@create')->name('ilha-create');
        Route::post('ilha/store','IlhaController@store')->name('ilha-store');
        Route::get('ilha/edit/{id}','IlhaController@edit')->name('ilha-edit');
        Route::put('ilha/update/{id}','IlhaController@update')->name('ilha-update');
        Route::get('ilha/show/{id}','IlhaController@show')->name('ilha-show');
        Route::delete('ilha/delete/{id}','IlhaController@destroy')->name('ilha-delete');

        Route::get('team/index','TeamController@index')->name('team-index');
        Route::get('team/create','TeamController@create')->name('team-create');
        Route::post('team/store','TeamController@store')->name('team-store');
        Route::get('team/edit/{id}','TeamController@edit')->name('team-edit');
        Route::put('team/update/{id}','TeamController@update')->name('team-update');
        Route::get('team/show/{id}','TeamController@show')->name('team-show');
        Route::delete('team/delete/{id}','TeamController@destroy')->name('team-delete');

        Route::get('parque/index','ParqueController@index')->name('parque-index');
        Route::get('parque/create','ParqueController@create')->name('parque-create');
        Route::post('parque/store','ParqueController@store')->name('parque-store');
        Route::get('parque/edit/{id}','ParqueController@edit')->name('parque-edit');
        Route::put('parque/update/{id}','ParqueController@update')->name('parque-update');
        Route::get('parque/show/{id}','ParqueController@show')->name('parque-show');
        Route::delete('parque/delete/{id}','ParqueController@destroy')->name('parque-delete');

        Route::get('galeria/index','GaleriaController@index')->name('galeria-index');
        Route::get('galeria/create','GaleriaController@create')->name('galeria-create');
        Route::post('galeria/store','GaleriaController@store')->name('galeria-store');
        Route::get('galeria/edit/{id}','GaleriaController@edit')->name('galeria-edit');
        Route::put('galeria/update/{id}','GaleriaController@update')->name('galeria-update');
        Route::get('galeria/show/{id}','GaleriaController@show')->name('galeria-show');
        Route::delete('galeria/delete/{id}','GaleriaController@destroy')->name('galeria-delete');

        Route::get('slide/index','SlideController@index')->name('slide-index');
        Route::get('slide/create','SlideController@create')->name('slide-create');
        Route::post('slide/store','SlideController@store')->name('slide-store');
        Route::get('slide/edit/{id}','SlideController@edit')->name('slide-edit');
        Route::put('slide/update/{id}','SlideController@update')->name('slide-update');
        Route::get('slide/show/{id}','SlideController@show')->name('slide-show');
        Route::delete('slide/delete/{id}','SlideController@destroy')->name('slide-delete');

        Route::get('info/index','InfoController@index')->name('info-index');
        Route::get('info/create','InfoController@create')->name('info-create');
        Route::post('info/store','InfoController@store')->name('info-store');
        Route::get('info/edit/{id}','InfoController@edit')->name('info-edit');
        Route::put('info/update/{id}','InfoController@update')->name('info-update');
        Route::get('info/show/{id}','InfoController@show')->name('info-show');
        Route::delete('info/delete/{id}','InfoController@destroy')->name('info-delete');

        Route::get('user/index','UserController@index')->name('user-index');
        Route::get('user/create','UserController@create')->name('user-create');
        Route::post('user/store','UserController@store')->name('user-store');
        Route::get('user/edit/{id}','UserController@edit')->name('user-edit');
        Route::put('user/update/{id}','UserController@update')->name('user-update');
        Route::get('user/show/{id}','UserController@show')->name('user-show');
        Route::delete('user/delete/{id}','UserController@destroy')->name('user-delete');

        
    });

Auth::routes(['register' => false, 'logout' => false]);

Route::get('logout', 'AdminController@logout')->name('logout');


