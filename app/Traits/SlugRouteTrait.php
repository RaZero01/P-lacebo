<?php

namespace App\Traits;

trait SlugRouteTrait
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
