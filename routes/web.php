<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function (): void {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/register', 'auth.register')->name('register');
});

Route::middleware('auth')->group(function (): void {
    Route::get('/dashboard', function () {
        $databaseStatus = 'Connected';
        $databaseError = null;

        try {
            DB::select('select 1');
        } catch (\Throwable $exception) {
            $databaseStatus = 'Failed';
            $databaseError = $exception->getMessage();
        }

        return view('dashboard', [
            'user' => Auth::user(),
            'databaseStatus' => $databaseStatus,
            'databaseError' => $databaseError,
        ]);
    })->name('dashboard');
});

require __DIR__.'/auth.php';
