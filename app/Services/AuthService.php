<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function login($data)
    {
        $user = User::where('email', $data['email'])->firstOrFail() ?? throw new \Exception('Пользователь не найден', 404);;
        if(!Hash::check($data['password'], $user->password)) {
            throw new \Exception('Неверный email или пароль', 401);
        }
        $user->tokens()->delete();
        $token = $user->createToken('my-app-token')->plainTextToken;
        $user->tokens()->where('token', hash('sha256', explode('|', $token)[1]))
            ->update(['expires_at' => now()->addDays(10)]);

        return ['token' => $token];
    }
}
