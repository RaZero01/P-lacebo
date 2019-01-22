<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectionItemImage extends Model
{
    public function collection()
    {
        return $this->belognsTo(CollectionItem::class);
    }
}
