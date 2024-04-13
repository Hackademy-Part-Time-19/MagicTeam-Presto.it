<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Enums\Fit;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class watermarkImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $fileName;
    private $path;
    private $watermarkImage;

    public function __construct($filePath)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->watermarkImage = public_path('img\watermark.png');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/original_" . $this->fileName;
        
        //save the original
        copy($srcPath,$destPath);

        $croppedImage = Image::make($srcPath)
                        ->insert($this->watermarkImage , 'bottom-left', 5, 5)
                        ->save($srcPath);
     }
}
