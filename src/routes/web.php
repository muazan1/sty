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

Route::get('inspire', [InspirationController::class, 'google']);

Route::get('create-joiner/{name}/{email}/{phone}', [
    JoinerController::class,
    'CreateJoiner',
]);
// Route::get('inspire', [InspirationController::class, 'yahooo']);
