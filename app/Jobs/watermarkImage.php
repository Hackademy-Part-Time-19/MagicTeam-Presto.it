<?php

namespace App\Jobs;

/* use App\Models\Image; */
use Spatie\Image\Image;
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
        $this->watermarkImage = public_path('img/watermark.png');
    }

    
     

  public function handle(): void{
    
    
    $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
    $destPath = storage_path() . '/app/public/' . $this->path . "/original" . $this->fileName;

    $water = $this->watermarkImage;

        //save the original
         

        $croppedImage = Image::load($srcPath)
                        ->watermark($water)
                        ->watermarkPadding(7, 7, Manipulations::UNIT_PERCENT)
                        ->watermarkOpacity(50)
                        
                        ->save($srcPath);
     }
}