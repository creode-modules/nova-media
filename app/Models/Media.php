<?php

namespace Modules\NovaMedia\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\NovaMedia\Database\factories\MediaFactory;

class Media extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    /**
     * Defines a factory for model.
     *
     * @return MediaFactory
     */
    protected static function newFactory(): MediaFactory
    {
        return MediaFactory::new();
    }

    /**
     * Get path to media.
     *
     * @return Attribute
     */
    public function path(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => Storage::disk(config('media.disk'))
                ->path($attributes['location']),
        );
    }

    /**
     * Generate url to media.
     *
     * @return Attribute
     */
    public function url(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => Storage::disk(config('media.disk'))
                ->url($attributes['location']),
        );
    }
}
