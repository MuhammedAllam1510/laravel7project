<?php

namespace App\Listeners;

use App\Events\videoview;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class listenerview
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(videoview $videoview)
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
    }
}
