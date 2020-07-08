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
     * Video progress.
     *
     * @var int
     */
    private $progress;

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

        $this->setMime(mime_content_type($path));

        $this->setSize(filesize($path));
    }

    /**
     * @param  string  $mime
     */
    private function setMime(string $mime): void
    {
        $this->mime = $mime;
    }

    /**
     * @param  int  $size
     */
    private function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getProgress(): int
    {
        return $this->progress;
    }

    /**
     * @param  int  $progress
     */
    public function setProgress(int $progress): void
    {
        $this->progress = $progress;
    }
}
