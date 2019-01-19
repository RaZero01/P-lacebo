<?php

namespace App\Observers;

use App\Category;

class CategoryObserver
{
    /**
     * Handle the category "created" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function created(Category $category)
    {
    }

    /**
     * Handle the category "updated" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        //
    }

    /**
     * Handle the category "deleted" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        foreach ($category->collections as $collection) {
            $collection->delete();
        }
        \Storage::disk('public')->delete($category->image);
    }

    /**
     * Handle the category "restored" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the category "force deleted" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }
}
