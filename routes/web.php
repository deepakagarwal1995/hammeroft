<?php

use App\Http\Controllers\VisitorsController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [VisitorsController::class, 'index'])->name('index');
Route::post('/place-order', [OrdersController::class, 'order'])->name('orderNow');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
