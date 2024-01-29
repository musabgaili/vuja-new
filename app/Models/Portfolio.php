<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Portfolio extends Model
{
    use HasTranslations;

    protected $guarded = ['id'];

    protected $translatable = [
        // 'thumbnail',
        "category",
        "client",
        "team",
        "title",
        "content",
    ];

    function getRouteKeyName() {
        return 'slug';
    }
}
