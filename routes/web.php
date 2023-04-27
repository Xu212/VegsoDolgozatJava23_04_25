<?php

use App\Http\Controllers\Ingatlan;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/ingatlanok',[Ingatlan::class,'index']);
Route::get('/ingatlanokKategoriaval',[Ingatlan::class,'ingatlanKategoriaval']);
Route::get('/ingatlanok/{id}',[Ingatlan::class,'show']);
Route::post('/ingatlanok',[Ingatlan::class,'store']);
Route::delete('/ingatlanok',[Ingatlan::class,'destroy']);

require __DIR__.'/auth.php';
