<?php

namespace App\Http\Controllers\Auth;

use JWTAuth;
use App\User;
use Carbon\Carbon;
use App\Models\Laboratorio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthJWTController extends Controller
{
    

    public function login(Request $request){

        $credentials = $request->only('email', 'password');
        $token = null;

        if (!$token = JWTAuth::attempt($credentials)) {
            return  Response()->json(['error' => 'Datos incorrectos', 'code' => 401], 401);
        }

        $user = JWTAuth::authenticate($token);

        return response()->json(['token' => $token, 'user' => $user], 200);

    }

    public function register(RegisterRequest $request){

        // Creamos primero el laboratorio vacio.
        $lab = new Laboratorio;
        $lab->nombre         = $request->empresa;
        $lab->vencimiento   = Carbon::now()->addMonths(1);
        $lab->save();

        $user = new User;
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->password     = bcrypt($request->password);
        $user->laboratorio_id     = $lab->id;
        $user->save();

        if (!$token = JWTAuth::attempt(['email'=> $request->email, 'password' => $request->password])) {
            return  Response()->json(['error' => 'Datos incorrectos', 'code' => 401], 401);
        }

        $user = JWTAuth::authenticate($token);

        return response()->json(['token' => $token, 'user' => $user], 200);        

    }


}