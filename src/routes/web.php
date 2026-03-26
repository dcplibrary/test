<?php

use Illuminate\Support\Facades\Route;
use Dcplibrary\Test\App\Http\Controllers\TestController;

Route::group(['prefix' => 'test', 'middleware' => ['web']], function () {
    Route::get('/', [TestController::class, 'index'])->name('test.index');
});
