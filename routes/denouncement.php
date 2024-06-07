<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware(['auth', 'verified', 'role:user'])->group(function() {
    Route::post('/user/denouncement/save', [UserController::class,'SaveDenouncement']);
});
