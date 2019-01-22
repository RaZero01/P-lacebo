<?php

namespace App\Observers;

use App\CollectionItem;

class CollectionItemObserver
{
    /**
     * Handle the collection item "deleted" event.
     *
     * @param  \App\CollectionItem  $item
     * @return void
     */
    public function deleted(CollectionItem $item)
    {
        foreach ($item->images as $image) {
            $image->delete();
        }
    }
}
