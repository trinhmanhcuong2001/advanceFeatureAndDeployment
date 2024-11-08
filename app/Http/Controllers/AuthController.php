<?php

namespace App\Http\Controllers;

use App\Events\UserRegisterEvent;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->all();
        $data["password"] = $request->password;

        $user = User::create($data);

        event(new UserRegisterEvent($user));

        return response()->json([
            'message' => "Đăng ký thành công!"
        ]);
    }
}
