<?php

namespace App\Observers;

use Illuminate\Support\Facades\Notification;
use App\Section;

class SectionObserver
{
    /**
     * Handle the section "created" event.
     *
     * @param  \App\Section  $section
     * @return void
     */
    public function created(Section $section)
    {
        Notification::send(\App\User::first(), new \App\Notifications\InvoicePaid($section));
    }

    /**
     * Handle the section "updated" event.
     *
     * @param  \App\Section  $section
     * @return void
     */
    public function updated(Section $section)
    {
        //
    }

    /**
     * Handle the section "deleted" event.
     *
     * @param  \App\Section  $section
     * @return void
     */
    public function deleted(Section $section)
    {
        //
    }

    /**
     * Handle the section "restored" event.
     *
     * @param  \App\Section  $section
     * @return void
     */
    public function restored(Section $section)
    {
        //
    }

    /**
     * Handle the section "force deleted" event.
     *
     * @param  \App\Section  $section
     * @return void
     */
    public function forceDeleted(Section $section)
    {
        //
    }
}
