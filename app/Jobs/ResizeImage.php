<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Enums\CropPosition;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


class ResizeImage implements ShouldQueue
{
    use Dispatchable, Queueable;

    private $w, $h, $fileName, $path;
    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        if (!file_exists($srcPath)) {
            throw new \Exception("File non trovato: $srcPath");
        }
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$this->w}x{$this->h}_" . $this->fileName;

        Image::load($srcPath)
            ->crop($this->w, $this->h, CropPosition::Center)
            ->save($destPath);

        
    }
}
