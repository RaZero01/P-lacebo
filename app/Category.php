<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Traits\SlugRouteTrait;

    protected $fillable = ['title', 'image'];

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }

    public function getUrlAttribute()
    {
        return route('categories.show', $this);
    }
}
