<?php

namespace App\Observers;

use App\Collection;

class CollectionObserver
{
    /**
     * Handle the collection "created" event.
     *
     * @param  \App\Collection  $collection
     * @return void
     */
    public function created(Collection $collection)
    {
    }

    /**
     * Handle the collection "updated" event.
     *
     * @param  \App\Collection  $collection
     * @return void
     */
    public function updated(Collection $collection)
    {
        //
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

    /**
     * Handle the collection "restored" event.
     *
     * @param  \App\Collection  $collection
     * @return void
     */
    public function restored(Collection $collection)
    {
        //
    }

    /**
     * Handle the collection "force deleted" event.
     *
     * @param  \App\Collection  $collection
     * @return void
     */
    public function forceDeleted(Collection $collection)
    {
        //
    }
}
