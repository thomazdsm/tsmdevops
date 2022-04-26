<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::get('/',[\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index');
});

Route::get('/teste', [\App\Http\Controllers\TesteController::class, 'index'])->name('teste');

Auth::routes();
