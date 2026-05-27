<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\DiagnosaController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/gejala', GejalaController::class);

    Route::resource('/penyakit', PenyakitController::class);

    Route::get('/diagnosa', [DiagnosaController::class, 'index']);

    Route::post('/diagnosa', [DiagnosaController::class, 'hasil']);

    Route::get('/basis-pengetahuan', function () {

    $aturan = \App\Models\Aturan::all();

    return view(
        'basis-pengetahuan',
        compact('aturan')
    );
});

    Route::get('/riwayat', function () {

    $riwayat = \App\Models\Hasil::latest()->get();

    return view('riwayat', compact('riwayat'));
});

Route::delete('/riwayat/{id}', function ($id) {

    \App\Models\Hasil::destroy($id);

    return redirect('/riwayat');

});

});

require __DIR__.'/auth.php';