<?php

namespace App\Listeners;

use App\Providers\RouteServiceProvider;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AssignRole
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event)
    {
         if ($event->user->isAdmin()) {

                return redirect()->route('admin');
            } else {

                return redirect()->route('dashboard');
            }

    }
}
