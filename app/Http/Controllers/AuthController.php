<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Jobs\SendMailJob;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        SendMailJob::dispatch($user);

        return response()->json([
            'message' => 'Thành công!'
        ]);
    }
}
