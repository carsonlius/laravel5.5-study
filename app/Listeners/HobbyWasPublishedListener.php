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
        $user = auth()->user();
        $obj_email = new \App\Mail\LessonPublished($user);
        \Mail::to(\App\User::first())->send($obj_email);

    }
}
