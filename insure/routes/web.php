<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout.home');
});

Route::get('/about', function () {
    return view('layout.about');
});


// Route::get('/login', function () {
//     return view('layout.login');
// });

// Route::get('/registration', function () {
//     return view('layout.registration');
// });

Route::name('user.')->group(function(){
    Route::view('/private', 'private')->middleware('auth')->name('private');

    Route::get('/login', function(){
        if(Auth::check())
        {
            return redirect(route('user.private'));
        }

        return view('layout.login');
    })->name('login');

    //Route::post('/login', []);

    //Route::get('/logout', [])->name('logout')

    Route::get('/registration', function(){
        if(Auth::check())
        {
            return redirect(route('user.private'));
        }

        return view('layout.registration'); 
    })->name('registration');

    Route::post('/registration', [RegisterController::class, 'save']);
});