<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [MainController::class,'index']);
Route::get('/products/{product}', [MainController::class, 'show']);


Route::get('/admin', [AdminController::class,'create_page']);
Route::post('/admin', [AdminController::class, 'create_post']);