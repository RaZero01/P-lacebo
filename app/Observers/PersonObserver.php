<?php

namespace App\Observers;

use App\Person;

class PersonObserver
{
    /**
     * Handle the person "creating" event.
     *
     * @param  \App\Person  $person
     * @return void
     */
    public function creating(Person $person)
    {
        $person->slug = str_slug($person->name);
    }

    /**
     * Handle the person "deleted" event.
     *
     * @param  \App\Person  $person
     * @return void
     */
    public function deleted(Person $person)
    {
        \Storage::disk('public')->delete($person->avatar);
    }
}
