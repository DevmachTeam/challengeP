<?php
use \TncBzkrt\Config\Route;

Route::get('/','Api@index');
Route::prefix('/google')->group(function () {
    Route::get('/category/:id','Api@Products');
    Route::get('/product/:id','Api@Products');
});

Route::prefix('/cimri')->group(function () {
    Route::get('/category/:id','Api@Products');
    Route::get('/product/:id','Api@Products');
});

Route::prefix('/n11')->group(function () {
    Route::get('/category/:id','Api@Products');
    Route::get('/product/:id','Api@Products');
});

Route::prefix('/akakce')->group(function () {
    Route::get('/category/:id','Api@Products');
    Route::get('/product/:id','Api@Products');
});

Route::prefix('/trendyol')->group(function () {
    Route::get('/category/:id','Api@Products');
    Route::get('/product/:id','Api@Products');
});

Route::prefix('/hepsiburada')->group(function () {
    Route::get('/category/:id','Api@Products');
    Route::get('/product/:id','Api@Products');
});

Route::prefix('/gittigidiyor')->group(function () {
    Route::get('/category/:id','Api@Products');
    Route::get('/product/:id','Api@Products');
});