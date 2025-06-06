<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use  App\Http\Controllers\homeController;
use  App\Http\Controllers\profileController;
use  App\Http\Controllers\informationsController;

Route::get('/', [homeController::class, 'index'])->name('homepage');
Route::get('/profiles', [profileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/{profile}', [profileController::class, 'show'])
->name('profiles.show');
Route::get('/profiles/create', [profileController::class, 'create'])->name('profiles.create');
Route::post('/profiles/store', [profileController::class, 'store'])->name('profiles.store');

Route::get('/settings', [informationsController::class, 'index'])->name('settings.index');

// Route::get('/salam/{nom}/{prenom}', function (Request $request) {
//     // dd($request->nom,$request->prenom);
//     return view('salam', [
//         'nom' => $request->nom,
//         'prenom' => $request->prenom,
//         // 'cours' => ['html', 'css', 'js', 'react', 'php', 'laravel'],
//         'cours' => []
//     ]);
// });
