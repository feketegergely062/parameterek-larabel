<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/para/{id}",function( $id ){
    
    echo "<h3>Az id: </h3>" . $id;
});

Route::get("/parameter/{id}",[ParaController::class, "index"]);
Route::get("/param/{id}/{name}",[ParaController::class, "dupla"]);
Route::get("/par/{id}/{name?}", [ParaController::class, "opcio"]);
Route::get("/pa/{id}/{name}", [ParaController::class, "check"]);