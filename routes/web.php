<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use  App\Http\Controllers\homeController;
use  App\Http\Controllers\profileController;
use  App\Http\Controllers\informationsController;

Route::get('/', [homeController::class, 'index']);
Route::get('/profile', [profileController::class, 'index']);
Route::get('/settings', [informationsController::class, 'index']);

// Route::get('/salam/{nom}/{prenom}', function (Request $request) {
//     // dd($request->nom,$request->prenom);
//     return view('salam', [
//         'nom' => $request->nom,
//         'prenom' => $request->prenom,
//         // 'cours' => ['html', 'css', 'js', 'react', 'php', 'laravel'],
//         'cours' => []
//     ]);
// });
