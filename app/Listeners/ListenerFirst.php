<?php

namespace App\Listeners;

use App\Events\EventTest;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ListenerFirst implements ShouldQueue
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
    public function handle(EventTest $event): void
    {
        Log::info("Đây là hành động thứ 2");
    }
}