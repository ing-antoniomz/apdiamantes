<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GruposController;
use App\Http\Controllers\Admin\NivelesController;
use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;

Route::prefix('/admin')->middleware('auth')->name('admin.')->group(function () {

    // administracion de usuarios
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
    // administracion de grupos
    Route::prefix('/grupos')->name('grupos.')->group(function () {

        Route::get('/', [GruposController::class, 'index'])
            ->middleware(['can:admin_grupos_list'])
            ->name('index');
    });
    // administracion de niveles
    Route::prefix('/niveles')->name('niveles.')->group(function () {

        Route::get('/', [NivelesController::class, 'index'])
            ->middleware(['can:admin_niveles_list'])
            ->name('index');
    });

    // Logs pages
    Route::prefix('/log')->name('log.')->group(function () {
        Route::get('sistema', [SystemLogsController::class,'index'])->middleware(['can:admin_logs_system_list'])->name('sistema.index');
        Route::get('auditoria', [AuditLogsController::class,'index'])->middleware(['can:admin_logs_audit_list'])->name('auditoria.index');
    });
});

