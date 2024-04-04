<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Article extends Model
{   

    protected $fillable = [

        "name",
        "category_id",
        "user_id",
        "description",
        "price",


    ];


    public function category(): BelongsTo {

        return $this->belongsTo(Category::class);

    }

    public function user(): BelongsTo {

        return $this->belongsTo(User::class);

    }

    public function images() :HasMany {

        return $this->hasMany(Image::class);

    }

    use HasFactory;


}
