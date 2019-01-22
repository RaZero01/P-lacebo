<?php

namespace App\Observers;

use App\Partner;

class PartnerObserver
{
    /**
     * Handle the partner "deleted" event.
     *
     * @param  \App\Partner  $partner
     * @return void
     */
    public function deleted(Partner $partner)
    {
        \Storage::disk('public')->delete($partner->image);
    }
}
