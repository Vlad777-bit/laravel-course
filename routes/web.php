<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

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
    -> name('welcome');

Route::get('/categories', [CategoryController::class, "index"])
    ->name('categories');

Route::get('/news/{category}', [NewsController::class, "index"])
    ->name('news')
    ->where(['category' => '[А-ЯЁа-яё]+']);

Route::get('/news/{category}/{id}', [NewsController::class, "show"])
    ->name('news.show')
    ->where([
        'id' => '\d+',
        'category' => '[А-ЯЁа-яё]+',
    ]);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('category', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});
