<?php

namespace App\Observers;

use App\Event;

class EventObserver
{
    /**
     * Handle the event "deleted" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function deleted(Event $event)
    {
        \Storage::disk('public')->delete($event->image);
    }
}
