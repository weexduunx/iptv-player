<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Raju\Streamer\Helpers\VideoStream;
class StreamController extends Controller
{
    public function stream($filename)
    {
        $videosDir = config('streamer.basepath');
        if (file_exists($filePath = $videosDir . "/" . $filename)) {
            $stream = new VideoStream($filePath);
            return response()->stream(function() use ($stream) {
                $stream->start();
            });
        }
        return response("File doesn't exist", 404);
    }
}