<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ShowController;

use app\Services\Localization\LocalizationService;
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

Route::localizedGroup(function () {
    Route::get('/search', [ShowController::class, 'search'])->name('search');

    Route::get('/', function () {
        return view('posts.main');
    })->name('main');

    Route::get('/{room}', [ShowController::class, 'post']);

    /*Route::get('/bedroom', function () {
        return view('posts.bedroom');
    })->name('bedroom');*/

    Route::get('/{post}/{f}/comments', [ShowController::class, 'comment'])->name('comment');

    Route::get('/{post}/{f}/info_block', [ShowController::class, 'infoBlock'])->name('info_block');


    Route::get('/push/{f}', [ShowController::class, 'push'])->name('push');
});





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
