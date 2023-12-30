<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'seo_description',
        'seo_keywords'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function trips(): HasMany
    {
        return $this->hasMany(Trip::class, 'category_id');
    }

    public function getSeoKeywords(): array {
        return explode(',', $this->seo_keywords);
    }
}
