<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use Traits\SlugRouteTrait;

    protected $fillable = ['title', 'name', 'position', 'image', 'about', 'url', 'instagram', 'facebook', 'email', 'phone', 'external_url'];

    public function getUrlAttribute()
    {
        return route($this->attributes['url'], $this);
    }

    
    public function getAboutHtmlAttribute()
    {
        return \Parsedown::instance()->text($this->about);
    }
}
