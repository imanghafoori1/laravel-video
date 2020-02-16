<?php

namespace Iman\Streamer;

class VideoStreamer
{
    private $path = '';

    private $stream = '';

    private $buffer = 102400;

    private $start = -1;

    private $end = -1;

    private $size = 0;

    private $mime = '';

    public function __construct($filePath = '', $stream)
    {
        $this->path = $filePath;
        $this->stream = $stream;
        $this->mime = mime_content_type($filePath);
    }

    /**
     * Set proper header to serve the video content.
     */
    private function setHeader()
    {
        ob_get_clean();
        header('Content-Type: '.$this->mime);
        header('Cache-Control: max-age=2592000, public');
        header('Expires: '.gmdate('D, d M Y H:i:s', time() + 2592000).' GMT');
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', @filemtime($this->path)).' GMT');
        $this->start = 0;
        $this->size = filesize($this->path);
        $this->end = $this->size - 1;
        header('Accept-Ranges: 0-'.$this->end);

        if (! isset($_SERVER['HTTP_RANGE'])) {
            header('Content-Length: '.$this->size);

            return;
        }

        $c_end = $this->end;
        [
            ,
            $range,
        ] = explode('=', $_SERVER['HTTP_RANGE'], 2);


        if (strpos($range, ',') !== false) {
            header('HTTP/1.1 416 Requested Range Not Satisfiable');
            header("Content-Range: bytes $this->start-$this->end/$this->size");
            exit;
        }

        if ($range == '-') {
            $c_start = $this->size - substr($range, 1);
        } else {
            $range = explode('-', $range);
            $c_start = $range[0];

            if (  isset($range[1]) && is_numeric($range[1]) ) {
                \Log::info('$range:'. $range[1]. gettype($range[1]));
            } else {
                \Log::info('default: '. $c_end);
            }

            $c_end = (isset($range[1]) && is_numeric($range[1])) ? $range[1] : $c_end;
        }
        $c_end = ($c_end > $this->end) ? $this->end : $c_end;
        if ($c_start > $c_end || $c_start > $this->size - 1 || $c_end >= $this->size) {
            header('HTTP/1.1 416 Requested Range Not Satisfiable');
            header("Content-Range: bytes $this->start-$this->end/$this->size");
            exit;
        }
        $this->start = $c_start;
        $this->end = $c_end;
        $length = $this->end - $this->start + 1;
        fseek($this->stream, $this->start);
        header('HTTP/1.1 206 Partial Content');
        header('Content-Length: '.$length);
        header("Content-Range: bytes $this->start-$this->end/".$this->size);
    }

    /**
     * perform the streaming of calculated range.
     */
    private function stream()
    {
        $i = $this->start;
        set_time_limit(0);
        $readBytes = 0;
        while (! feof($this->stream) && $i <= $this->end && $readBytes < $this->buffer * 3) {
            $bytesToRead = $this->buffer;
            if (($i + $bytesToRead) > $this->end) {
                $bytesToRead = $this->end - $i + 1;
            }
            $data = fread($this->stream, $bytesToRead);
            echo $data;
            flush();
            $i += $bytesToRead;
            $readBytes += $bytesToRead;
        }
    }

    /**
     * Start streaming video content.
     */
    public function start()
    {
        $this->setHeader();
        $this->stream();

        /**
         * close curretly opened stream.
         */
        fclose($this->stream);
        exit;
    }

    public static function streamFile($path)
    {
        $stream = fopen($path, 'rb');
        if (! $stream) {
            throw new \Exception('File not found in: '. $path, 6542);
        }

        (new static($path, $stream))->start();
    }
}
