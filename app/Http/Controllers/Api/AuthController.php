<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){
        try{
            $data = $request->validated();
            if (User::where('email', $data['email'])->exists()) {
                return response()->json(['error' => 'Пользователь с таким email уже существует'], 409);
            }
            $user = User::create($data);
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'token' => $token, 'message' => 'пользователь создан'], 201);
        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 400);
        }
    }
    public function login(LoginRequest $request, AuthService $service){
        $data = $request->validated();
        try{
            $result = $service->login($data);
            return response()->json(['token'=>$result['token']], 200);
        }catch (\Exception $e){
            return response()->json(['error'=>$e->getMessage()], $e->getCode()?: 500);
        }
    }
    public function logout(Request $request){
        try{
            $request->user()->currentAccessToken()->delete();
            return response()->json(['message' => 'Вы вышли из системы'], 200);
        }catch (\Exception $exception){
            return response()->json([$exception],400);
        }
    }
    public function profile(){
            $user = auth()->user();
            if (!$user) {
                return response()->json(['error' => 'Пользователь не авторизован'], 401);
            }
            return new UserResource($user);
    }
}
