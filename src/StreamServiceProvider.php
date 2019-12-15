<?php

namespace Imanghafoori\Streamer;

use Illuminate\Http\Response;
use Iman\Streamer\VideoStreamer;
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
            $this->stream(function () use ($filePath) {
                $stream = new VideoStreamer($filePath);
                $stream->start();
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
