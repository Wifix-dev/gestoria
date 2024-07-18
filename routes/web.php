<?php

use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
})->name('home');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/denouncement', [UserController::class, 'UserDenunciation'])->middleware('role:user')->name('denouncement');
    Route::get('/denouncement/{id}', [UserController::class, 'GetDenouncement'])->middleware('role:user')->name('denouncement.info');
    Route::post('/denouncement/save',  [UserController::class, 'SaveDenouncement'])->middleware('role:user')->name('denouncement.save');
    Route::post('/denouncement/close', [UserController::class, 'FinalComments'])->middleware('role:user')->name('user.closecase');
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->middleware('role:admin')->name('admin.dashboard');
    Route::post('/denouncements/response', [ManagerController::class, 'ResponseRequest'])->middleware('role:manager')->name('manager.setesponse');
    Route::post('/denouncements/update', [ManagerController::class, 'FinalEvidence'])->middleware('role:manager')->name('manager.setEvidence');
    Route::get('/denouncements', [ManagerController::class, 'ManagerDenunciation'])->middleware('role:manager')->name('manager.denouncements.list');
    Route::get('/denouncements/{id}', [ManagerController::class, 'GetDenouncement'])->middleware('role:manager')->name('manager.denuncement.detail');

});

require __DIR__.'/auth.php';


