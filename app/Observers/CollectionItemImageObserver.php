<?php

namespace App\Observers;

use App\CollectionItemImage;

class CollectionItemImageObserver
{
    /**
     * Handle the collection item image "deleted" event.
     *
     * @param  \App\CollectionItemImage  $image
     * @return void
     */
    public function deleted(CollectionItemImage $image)
    {
        \Storage::disk('public')->delete($image->image);
    }
}
