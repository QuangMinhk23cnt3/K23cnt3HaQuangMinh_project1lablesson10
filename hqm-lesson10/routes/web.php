<?php
use App\Http\Controllers\HqmNhaCCController;
use App\Http\Controllers\HqmVattuController;
use Illuminate\Support\Facades\Route;
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

Route::get('/hqm-nhaccs',[HqmNhaCCController::class,'list']);

Route::get('/hqm-vattus',[HqmVattuController::class,'list']);