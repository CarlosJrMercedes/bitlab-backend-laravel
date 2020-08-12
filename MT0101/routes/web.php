<?php

    use Illuminate\Support\Facades\Route;

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

   
    Route::get('/','QueryController@home');

    // Route::get('blade-form-1',function(){ return view('ejercicio1.form');})->name('uno');
    // Route::get('blade-form-2',function(){ return view('ejercicio2.form');})->name('dos');
    // Route::get('blade-form-3',function(){ return view('ejercicio3.form');})->name('tres');
    // Route::get('blade-form-4','Ejercicio4Controller@result')->name('cuatro');
    // Route::get('blade-form-5',function(){ return view('ejercicio5.form');})->name('cinco');
    // Route::get('blade-form-6',function(){ return view('ejercicio6.form');})->name('seis');
    // Route::get('blade-form-7',function(){ return view('ejercicio7.form');})->name('siete');
    // Route::get('blade-form-8',function(){ return view('ejercicio8.form');})->name('ocho');

    // Route::post('blade-result-1','Ejercicio1Controller@result');
    // Route::post('blade-result-2','Ejercicio2Controller@result');
    // Route::post('blade-result-3','Ejercicio3Controller@result');
    // Route::post('blade-result-5','Ejercicio5Controller@result');
    // Route::post('blade-result-6','Ejercicio6Controller@result');
    // Route::post('blade-result-7','Ejercicio7Controller@result');
    // Route::post('blade-result-8','Ejercicio8Controller@result');


?>