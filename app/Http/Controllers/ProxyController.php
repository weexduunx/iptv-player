<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProxyController extends Controller
{
    
    // public function stream(Request $request)
    // {
    //     $url = $request->query('url');

    //     if (!$url) {
    //         return response()->json(['error' => 'URL is required'], 400);
    //     }

    //     \Log::info('Proxy request for URL: ' . $url);

    //     // Ajouter des en-têtes HTTP pour la requête
    //     $response = Http::withHeaders([
    //         'User-Agent' => 'Mozilla/5.0',
    //         'Accept' => 'application/vnd.apple.mpegurl',
    //         'Connection' => 'keep-alive'
    //     ])->get($url);

    //     if ($response->successful()) {
    //         \Log::info('Proxy successful response from: ' . $url);
    //         $content = $response->body();

    //         // Réécrire les URLs des segments pour passer par le proxy
    //         $proxyBaseUrl = $request->getSchemeAndHttpHost() . '/proxy?url=';
    //         $content = preg_replace_callback('/(https?:\/\/[^\s]+)/', function ($matches) use ($proxyBaseUrl) {
    //             return $proxyBaseUrl . urlencode($matches[0]);
    //         }, $content);

    //         return response($content, 200)
    //             ->header('Content-Type', 'application/vnd.apple.mpegurl');
    //     } else {
    //         \Log::error('Failed to fetch the stream from URL: ' . $url . ' with status: ' . $response->status());
    //         return response()->json(['error' => 'Failed to fetch the stream'], $response->status());
    //     }
    // }
}