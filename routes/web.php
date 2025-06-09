<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use  App\Http\Controllers\homeController;
use  App\Http\Controllers\profileController;
use  App\Http\Controllers\informationsController;
use App\Http\Controllers\loginController;

Route::get('/', [homeController::class, 'index'])->name('homepage');
Route::get('/profiles', [profileController::class, 'index'])->name('profiles.index');
//login routes:
Route::get('/login', [loginController::class, 'show'])->name('login.show');
Route::post('/login', [loginController::class, 'login'])->name('login');

//logout route:
Route::get('/logout', [loginController::class, 'logout'])->name('login.logout');


Route::get('/profiles/create', [profileController::class, 'create'])->name('profiles.create');
Route::get('/profiles/{profile}', [profileController::class, 'show'])
    ->name('profiles.show');
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
