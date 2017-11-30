<?php

namespace App\Listeners;

use App\Events\UserSignUp;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Filesystem\Filesystem;

class HandUserSignUp
{
    public $filesystem;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     * Handle the event.
     *
     * @param  UserSignUp  $event
     * @return void
     */
    public function handle(UserSignUp $event)
    {
        dump($event->user->name . ' sign up ');
    }
}
