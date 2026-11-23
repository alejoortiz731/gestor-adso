<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AprendizController;

Route::redirect('/', '/aprendices');

Route::middleware(['auth'])->group(function () {
    Route::resource('aprendices', AprendizController::class)
        ->parameters(['aprendices' => 'aprendiz'])
        ->except(['show']);
});

require __DIR__.'/auth.php';