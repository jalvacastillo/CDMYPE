<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

use App\User;

class AuthController extends Controller
{
    

    public function login(Request $request){

        $credentials = $request->only('email', 'password');
        $token = null;

        try {
            // return response()->json($credentials);
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Something went wrong'], 500);            
        }

        $user = JWTAuth::authenticate($token);

        // return $user;

        return response()->json(['token' => $token, 'user' => $user]);
        // return response()->json($token);
    }


}
