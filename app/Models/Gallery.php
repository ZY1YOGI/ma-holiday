<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Gallery extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'seo_keywords'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSeoKeywords(): array {
        return explode(',', $this->seo_keywords);
    }
}
