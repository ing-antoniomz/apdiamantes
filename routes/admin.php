<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

    //administacion de usuarios
    Route::resource('users', UsuariosController::class)->only(['index', 'store', 'update']);
    Route::post('/users/{username}/activate', [UsuariosController::class, 'activate'])->name('users.activate');

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('sistema', SystemLogsController::class)->only(['index']);
        Route::resource('auditoria', AuditLogsController::class)->only(['index']);
    });
});