<?php

use App\Livewire\IptvPlayer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/iptv', IptvPlayer::class);