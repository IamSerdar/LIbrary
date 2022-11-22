<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        try {
            $user = User::whereUsername($data['username'])->first();
            if (!$user) {
                return response()->json('User not found', 400);
            }
            if (!Hash::check( $request->get('password'), $user->password)) {
                return response()->json('The password is incorrect', 400);
            }
            $user->tokens()->delete();
            $token = $user->createToken('api')->plainTextToken;
            return [
                'token' => $token,
            ];
        }
        catch (\DomainException $exception) {
            return $this->error(['user' => __($exception->getMessage())]);
        }
    }
}
