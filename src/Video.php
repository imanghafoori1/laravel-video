<?php

namespace Iman\Streamer;

class Video
{
    /**
     * Video path.
     *
     * @var string
     */
    private $path;

    /**
     * Video MIME type.
     *
     * @var string
     */
    private $mime;

    /**
     * Video size.
     *
     * @var int
     */
    private $size;

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getMime(): string
    {
        return $this->mime;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param  string  $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * @param  string  $mime
     */
    public function setMime(string $mime): void
    {
        $this->mime = $mime;
    }

    /**
     * @param  int  $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }
}
