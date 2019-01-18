<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = ['title', 'name', 'image'];

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($collection) {
            Storage::disk('public')->delete($collection->image);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getUrlAttribute()
    {
        return route('categories.collections.show', [$this->category, $this]);
    }
}
