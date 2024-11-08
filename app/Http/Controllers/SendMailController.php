<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailTest;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function sendMail()
    {
        SendMailTest::dispatch();

        return response()->json([
            'message' => "Gửi mail đã được đặt ở chế độ nền"
        ]);
    }
}
