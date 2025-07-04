<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Grupo\InvitarController;
use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;
use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\Documentation\ReferencesController;
use App\Http\Controllers\Documentation\LayoutBuilderController;

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

require __DIR__ . '/auth.php';

$menu = theme()->getMenu();
array_walk($menu, function ($val) {
    if (isset($val['path'])) {
        $route = Route::get($val['path'], [PagesController::class, 'index']);

        // Exclude documentation from auth middleware
        if (!Str::contains($val['path'], 'documentation')) {
            $route->middleware('auth');
        }

        // Custom page demo for 500 server error
        if (Str::contains($val['path'], 'error-500')) {
            Route::get($val['path'], function () {
                abort(500, 'Something went wrong! Please try again later.');
            });
        }
    }
});

Route::middleware('auth')->group(function () {

    // Account pages
    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('system', SystemLogsController::class)->only(['index']);
        Route::resource('audit', AuditLogsController::class)->only(['index', 'destroy']);
    });

    // Admin pages
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UsuariosController::class)->only(['index', 'store', 'update']);
        Route::post('/users/{username}/activate', [UsuariosController::class, 'activationEmail'])->name('users.activate');
    });
    Route::resource('nosotros', AboutController::class)->name('index', 'nosotros')->only(['index']);
    Route::resource('contacto', ContactController::class)->name('index', 'contacto')->only(['index']);

    // grupo pages
    Route::prefix('grupo')->name('grupo.')->group(function () {
        Route::resource('invitar', InvitarController::class)->only(['index','store']);
    });
});

// Lang files for datatables
Route::get('lang/datatables/{locale}.json', function ($locale) {
    $path = resource_path("lang/$locale/datatables.php");
    if (!File::exists($path)) {
        abort(404);
    }
    $translations = require $path;
    return Response::json($translations);
})->middleware('auth');

// aviso de privacidad
Route::get('/descargar-aviso', function () {
    $path = public_path('apdiamantes/media/aviso_de_privacidad.pdf');

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->download($path, 'aviso_privacidad.pdf');
})->middleware('auth')->name('descargar.aviso');


// Documentations pages
Route::prefix('documentation')->group(function () {
    Route::get('getting-started/references', [ReferencesController::class, 'index']);
    Route::get('getting-started/changelog', [PagesController::class, 'index']);
    Route::resource('layout-builder', LayoutBuilderController::class)->only(['store']);
});

