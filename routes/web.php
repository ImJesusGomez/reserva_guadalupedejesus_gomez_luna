<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveController;
use App\Models\Reservation;

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

Route::get('/index', [ReserveController::class, 'index'])->name('reserve.index');
Route::get('/create', [ReserveController::class, 'create'])->name('reserve.create');
Route::post('/index', [ReserveController::class, 'store'])->name('reserve.store');
Route::get('/show/{reservation}', [ReserveController::class, 'show'])->name('reserve.show');
Route::get('/edit/{reservation}', [ReserveController::class, 'edit'])->name('reserve.edit');
Route::patch('/index/{reservation}', [ReserveController::class, 'update'])->name('reserve.update');
Route::delete('/delete/{reservation}', [ReserveController::class, 'destroy'])->name('reserve.destroy');
Route::get('/report-reservations', [ReserveController::class, 'getReportAll'])->name('reserve.reportReservations');
Route::get('/report-reservation/{product}', [ReserveController::class, 'getReportReservation'])->name('reserve.reportReserve');
