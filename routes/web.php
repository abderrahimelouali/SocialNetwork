<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\homeController;
use  App\Http\Controllers\profileController;
use  App\Http\Controllers\informationsController;
use App\Http\Controllers\loginController;

// Route::name('profiles.')->prefix('profiles')->group(function () {
//     Route::controller(profileController::class)->group(function () {
//         Route::get('/', 'index')->name('index');

//         //create profile routes:
//         Route::get('/create', 'create')->name('create');
//         Route::post('/', 'store')->name('store');

//         //edit profile route:
//         Route::get('/{profile}/modify', 'modify')->name('modify');
//         Route::put('/{profile}', 'update')->name('update');

//         //delete profile route:
//         Route::delete('/{profile}',  'destroy')->name('destroy');

//         Route::get('/{profile}', 'show')->name('show');
//     });
// });
Route::resource('profiles', profileController::class); 



Route::get('/', [homeController::class, 'index'])->name('homepage');
//login routes:
Route::get('/login', [loginController::class, 'show'])->name('login.show');
Route::post('/login', [loginController::class, 'login'])->name('login');

//logout route:
Route::get('/logout', [loginController::class, 'logout'])->name('login.logout');


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
