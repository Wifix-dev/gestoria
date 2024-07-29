<?php

use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
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

Route::get('/search',[WebController::class, 'WebSearch'])->name('web.view.search');
Route::post('/search/denouncement',[WebController::class, 'SearchCase'])->name('web.view.search.find');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/denouncements/create',[ManagerController::class, 'Create'])->middleware('role:manager')->name('manager.create.denouncement');
    Route::post('/denouncements/create/save',[ManagerController::class, 'SaveDenouncement'])->middleware('role:manager')->name('manager.save.denouncement');
    Route::get('/denouncement/create', [UserController::class, 'UserDenunciation'])->middleware('role:user')->name('denouncement');
    Route::get('/denouncement/create/{id}', [UserController::class, 'GetDenouncement'])->middleware('role:user')->name('denouncement.info');
    Route::post('/denouncement/save',  [UserController::class, 'SaveDenouncement'])->middleware('role:user')->name('denouncement.save');
    Route::post('/denouncement/close', [UserController::class, 'FinalComments'])->middleware('role:user')->name('user.close.case');
    Route::get('/denouncement', [UserController::class, 'Denouncement'])->middleware('role:user')->name('user.denouncement.list');
    Route::post('/denouncements/close', [ManagerController::class, 'FinalCommentsWeb'])->middleware('role:manager')->name('manager.close.case');


    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->middleware('role:admin')->name('admin.dashboard');
    Route::post('/denouncements/response', [ManagerController::class, 'ResponseRequest'])->middleware('role:manager')->name('manager.set.response');
    Route::post('/denouncements/web/response', [ManagerController::class, 'ResponseRequestWeb'])->middleware('role:manager')->name('manager.set.web.response');

    Route::post('/denouncements/update', [ManagerController::class, 'FinalEvidence'])->middleware('role:manager')->name('manager.setEvidence');
    Route::post('/denouncements/update/web', [ManagerController::class, 'FinalEvidenceWeb'])->middleware('role:manager')->name('manager.setEvidence.web');

    Route::get('/denouncements/user', [ManagerController::class, 'ManagerDenunciation'])->middleware('role:manager')->name('manager.denouncements.list');

    Route::get('/denouncements/web', [ManagerController::class, 'ManagerDenunciationWeb'])->middleware('role:manager')->name('manager.denouncementsWeb.list');
    Route::get('/denouncements/web/{id}', [ManagerController::class, 'GetDenouncementWeb'])->middleware('role:manager')->name('manager.denuncement.record.detail');

    Route::get('/denouncements/{id}', [ManagerController::class, 'GetDenouncement'])->middleware('role:manager')->name('manager.denuncement.detail');
    Route::post('/denouncements/search/cp', [ManagerController::class, 'SearchCP'])->middleware('role:manager')->name('manager.search.cp');
    Route::post('/denouncement/search/cp', [UserController::class, 'SearchCP'])->middleware('role:user')->name('user.search.cp');

});

require __DIR__.'/auth.php';


