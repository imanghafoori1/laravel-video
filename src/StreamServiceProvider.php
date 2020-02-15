<?php

namespace Iman\Streamer;

use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;

class StreamServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Response::macro('streamVideoFile', function ($filePath) {
            return response()->stream(function () use ($filePath) {
                $stream = new VideoStreamer($filePath);
                return $stream->start();
            });
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
