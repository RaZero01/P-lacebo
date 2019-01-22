<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use Traits\SlugRouteTrait;

    protected $fillable = ['title', 'name', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function items()
    {
        return $this->hasMany(CollectionItem::class);
    }

    public function getUrlAttribute()
    {
        return route('categories.collections.show', [$this->category, $this]);
    }
}
