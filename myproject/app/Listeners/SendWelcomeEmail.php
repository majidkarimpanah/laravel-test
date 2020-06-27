<?php

namespace App\Listeners;

use App\Event\RegisterUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RegisterUser  $event
     * @return void
     */
    public function handle(RegisterUser $event)
    {
        $user=$event->getUser();
        Log::info('send welcome email to '.$user->name);
    }
}
