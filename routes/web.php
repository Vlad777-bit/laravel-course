<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OfferController;

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;

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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', AdminIndexController::class)
        ->name('index');
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});
