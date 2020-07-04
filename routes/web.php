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

use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cache', function () {
    $ca = Cache::remember('key', 15, function () {
        
        for($i = 0; $i < 10000000; $i++ ){
            $soma = 4 + 4;
            $mult = 4 * 4;
            $mult = $soma * $mult / ($i + 1);

            if($i == 9999999){
                return $i;
            }

        }
    });

    return $ca;
});
