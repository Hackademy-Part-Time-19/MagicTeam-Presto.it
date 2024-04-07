<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{   

    protected $fillable = ["path"];

    public function article() : BelongsTo {

        return $this->belongsTo(Article::class);

    }

    public static function getUrlByFilePath($filePath, $w = null , $h = null){

        if (!$w && !$h) {
            return Storage::url($filePath);
        }

        $path = dirname($filePath);
        $fileName = basename($filePath);
        $file = "{$path}/fit_{$w}x{$h}_{$fileName}";
        
        return Storage::url($file);
    }

    public function getUrl($w = null , $h = null){
        return Image::getUrlByFilePath($this->path , $w , $h);
    }


    

    use HasFactory;
}
