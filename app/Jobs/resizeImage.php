<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class resizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $fileName;
    private $path;

    public function __construct($filePath , private $w , private $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/" . $this->fileName;
        
        /* "/crop_{$w}x{$h}_" */

        $croppedImage = Image::load($srcPath)
                        ->crop(Manipulations::CROP_CENTER , $w , $h,)
                        ->save($destPath);
     }
}
