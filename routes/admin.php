<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;

Route::prefix('/admin')->middleware('auth')->name('admin.')->group(function () {

    // Logs pages
    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/', [UsuariosController::class, 'index'])
            ->middleware(['can:admin_users_list'])
            ->name('index');
        Route::post('/', [UsuariosController::class, 'store'])
            ->middleware(['can:admin_users_create'])
            ->name('store');
        Route::put('/{user}', [UsuariosController::class, 'update'])
            ->middleware(['can:admin_users_update'])
            ->name('update');
        Route::post('/{username}/activate', [UsuariosController::class, 'activate'])
            ->middleware(['can:admin_users_activate'])
            ->name('activate');
    });

    // Logs pages
    Route::prefix('/log')->name('log.')->group(function () {
        Route::resource('sistema', SystemLogsController::class)->only(['index']);
        Route::resource('auditoria', AuditLogsController::class)->only(['index']);
    });
});

