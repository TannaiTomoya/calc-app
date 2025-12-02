<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

// URLの num1/operator/num2 は calc コンポーネントの state（例: public int $num1;）へ自動的に注入される
Volt::route('/calcs/{num1}/{operator}/{num2}', 'calc')
    ->name('calcs.show');
