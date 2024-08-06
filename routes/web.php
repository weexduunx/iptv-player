<?php

use App\Http\Controllers\ProxyController;
use App\Livewire\IptvPlayer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StreamController;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('accueil');
});
Route::get('/iptv', IptvPlayer::class);
Route::get('/stream/{filename}', [StreamController::class, 'stream'])->name('stream');
Route::get('/proxy', [ProxyController::class, 'stream']);