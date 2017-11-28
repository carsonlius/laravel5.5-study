<?php

namespace App\Listeners;

use App\Events\HobbyWasPublished;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HobbyWasPublishedListener
{
    /**
     * Create the event listener.     * @return void     *


     */
    public function __construct()
    {
        var_dump("hello world");
    }

    /**
     * Handle the event.
     *
     * @param  HobbyWasPublished  $event
     * @return void
     */
    public function handle(HobbyWasPublished $event)
    {
        dump('A hobby is post and i want to send an email');
        dump($event);
    }
}
