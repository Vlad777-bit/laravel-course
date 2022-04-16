<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\Account\IndexController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

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

Route::get('/', [WelcomeController::class, 'index'])
    ->name('welcome');

Route::get('/categories', [CategoryController::class, "index"])
    ->name('categories');

Route::get('/news/{category}', [NewsController::class, "index"])
    ->name('news')
    ->where(['category' => '\d+']);

Route::get('/news/{id}/{category}', [NewsController::class, "show"])
    ->name('news.show')
    ->where([
        'category' => '\d+',
        'id' => '\d+',
    ]);

Route::resource('offer', OfferController::class);

Route::get('/about', [AboutController::class, "index"])
    ->name('about');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'account', 'as' => 'account.'], function() {

        Route::get('/', IndexController::class)
            ->name('index');

        Route::get('/logout', function() {
            Auth::logout();
            return redirect()->route('login');
        })->name('logout');
    });

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin.check'], function () {
        Route::get('/', AdminIndexController::class)
            ->name('index');

        Route::get('parser', ParserController::class)
            ->name('parser');

        Route::resource('categories', AdminCategoryController::class);
        Route::resource('news', AdminNewsController::class);
        Route::resource('users', AdminUserController::class);
    });
});

Auth::routes();

Route::group(['middleware' => 'guest'], function() {
    Route::get('auth/{social}/redirect', [SocialController::class, 'index'])
        ->where('social', '\w+')
        ->name('auth.redirect');

    Route::get('auth/{social}/callback', [SocialController::class, 'callback'])
        ->where('social', '\w+')
        ->name('auth.callback');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
