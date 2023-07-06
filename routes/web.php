<?php

use App\Actions\SwitchLanguageAction;
use App\Providers\AppServiceProvider;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    app(SwitchLanguageAction::class)('nl');

    return view('home');
});

Route::get('/en', function () {
    app(SwitchLanguageAction::class)('en');

    return view('home');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('/switch-lang/{lang}', 'App\Http\Controllers\LangController@switchLang')->name('switchLang');


