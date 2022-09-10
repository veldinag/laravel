<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Account\IndexController as AccountController;
use App\Http\Controllers\Admin\SourceController as AdminSourceController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\SocialProvidersController;
use App\Http\Controllers\Admin\ParserController as AdminParserController;

Route::middleware('auth')->group(function () {
    Route::get('/account', AccountController::class)->name('account');
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function() {
        Route::get('/', AdminController::class)
            ->name('index');
        Route::resource('parser', AdminParserController::class);
        Route::resource('categories', AdminCategoryController::class);
        Route::resource('news', AdminNewsController::class);
        Route::resource('sources', AdminSourceController::class);
        Route::resource('users', AdminUserController::class);
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', [GreetingController::class, 'index'])
    ->name('greeting.index');

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

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

Route::get('/sessions', function() {
    $name = 'example';
    if(session()->has($name)) {
        dd(session()->all());
        session()->remove($name);
    }
    //session()->get($name);
    session()->put($name, 'Test example session');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'guest'], function() {
    Route::get('/auth/redirect/{driver}', [SocialProvidersController::class, 'redirect'])
        ->where('driver', '\w+')
        ->name('social.auth.redirect');
    Route::get('/auth/callback/{driver}', [SocialProvidersController::class, 'callback'])
        ->where('driver', '\w+');
});
