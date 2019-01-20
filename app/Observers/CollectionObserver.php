<?php

namespace App\Observers;

use App\Collection;

class CollectionObserver
{
    /**
     * Handle the collection "creating" event.
     *
     * @param  \App\Collection  $collection
     * @return void
     */
    public function creating(Collection $collection)
    {
        if ($collection->name == '') {
            $collection->slug = str_slug($collection->title);
        } else {
            $collection->slug = str_slug($collection->name);
        }
    }

    /**
     * Handle the collection "deleted" event.
     *
     * @param  \App\Collection  $collection
     * @return void
     */
    public function deleted(Collection $collection)
    {
        \Storage::disk('public')->delete($collection->image);
    }
}
