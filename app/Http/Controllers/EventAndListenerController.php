<?php

namespace App\Http\Controllers;

use App\Events\EventTest;
use Illuminate\Http\Request;

class EventAndListenerController extends Controller
{
    public function eventAndListener()
    {
        event(new EventTest());

        return response()->json([
            'message' => 'Đang chạy các sự kiện'
        ]);
    }
}
