<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\User;


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

    use HasFactory;


}
