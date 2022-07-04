<?php

use Illuminate\Support\Facades\Route;
use Sty\Hutton\Controllers\InspirationController;
use Sty\Hutton\Controllers\JoinerController;

// Route::get('inspire', function (Sty\Hutton\Inspire $inspire) {
//     return $inspire->alert();
// });

// Route::get('greeting', [
//     Muazan\Dell\Controllers\InspirationController::class,
//     'greeting',
// ]);

Route::get('create-joiner', [InspirationController::class, 'google']);

Route::post('store-joiner', [JoinerController::class, 'CreateJoiner'])->name(
    'create.joiner'
);
// Route::get('inspire', [InspirationController::class, 'yahooo']);
