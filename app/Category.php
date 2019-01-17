<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'image'];

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($category) {
            Storage::disk('public')->delete($category->image);
        });
    }

    public function getRouteAttribute()
    {
        return route('categories.show', $this->id);
    }

    public function getTitleAttribute()
    {
        return $this->name;
    }
}
