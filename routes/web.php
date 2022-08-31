<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Admin\SourceController as AdminSourceController;
use App\Http\Controllers\UnloadingOrderController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', AdminController::class)
        ->name('index');
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
    Route::resource('sources', AdminSourceController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', [GreetingController::class, 'index'])
    ->name('greeting.index');

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::resource('/feedback', FeedbackController::class);

Route::resource('/unloadingorder', UnloadingOrderController::class);

Route::get('/newslist/{cat_id}', [NewsController::class, 'index'])
    ->where('cat_id', '\d+')
    ->name('newslist.index');

Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Route::get('/collections', function() {
    $names = ['Anna', 'John', 'Kim', 'Mike', 'Drake', 'Lili'];
    $collection = collect($names);
    dd($collection);
});
