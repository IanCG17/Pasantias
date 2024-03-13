<?php

use App\Http\Controllers\Api\ClienteContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ClienteContoller::class)->group(function(){
    Route::get('/clientes','index');
    Route::post('/cliente','store');
    Route::get('/cliente/{id}','show');
    Route::put('/cliente/{id}','update');
    Route::delete('/cliente/{id}','destroy');

}


);

Route::get('/csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});

