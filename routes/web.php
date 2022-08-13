<?php

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

$user = "Alex";

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () use ($user) {
   return <<<php
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
    <h1>Hello, $user</h1>
</body>
</html>
php;
});

Route::get('/info', function () {
    return <<<php
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project info</title>
</head>
<body>
    <h1>Project Info</h1>
</body>
</html>
php;
});

Route::get('/news', function () {
    return <<<php
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>
    <h1>News</h1>
</body>
</html>
php;
});
