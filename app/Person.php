<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use Traits\SlugRouteTrait;

    protected $fillable = ['title', 'name', 'position', 'image', 'about', 'url', 'instagram', 'facebook', 'email', 'phone', 'external_url'];

    public function getUrlAttribute()
    {
        $route = $this->attributes['url'] == 'people.show'?  route($this->attributes['url'], $this) : route($this->attributes['url']);
        return $route;
    }

    public function getAboutHtmlAttribute()
    {
        return \Parsedown::instance()->text($this->about);
    }
}
