<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use Traits\SlugRouteTrait;

    protected $fillable = ['title', 'name', 'position', 'image', 'about', 'route', 'instagram', 'facebook', 'email', 'phone'];
}
