<?php

use App\Http\Livewire\Administered\ChangeStatusLicence;
use App\Http\Livewire\Administered\CreateAdministered;
use App\Http\Livewire\Administered\SendLicence;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/administrados/entregar-licencia/{administered}', SendLicence::class)->name('administered.sendLicence');
    Route::get('/administrados/actualizar-estado-licencia/{administered}', ChangeStatusLicence::class)->name('administered.changeStatusLicence');
    Route::get('/administrados/agregar-administrado', CreateAdministered::class)->name('administered.create');
});


