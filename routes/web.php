<?php


use App\Http\Controllers\Page1;
use App\Http\Controllers\Page4;
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
    return view('welcome');
});

Route::get('/p4' , [Page4::class , "page4"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth' , 'BackNotAllowed'])->name('dashboard');


require __DIR__.'/auth.php';
