<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    { 
        $validator = Validator($request->all(), [
            'email' => 'required|email','string',
            'password' => 'required|string',
           ]);  
           if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()->all()], 422);
           }
           $credentials = $request->only('email', 'password');
           $token = auth()->attempt($credentials);
           if (!$token) {
            return response()->json([
              'message' => 'Unauthorized'
            ], 401);
           }
           $user = auth()->user();
           $success['token'] =  $token;
           $success['name'] =  $user->name;
           return response()->json($success, 200);

        }

        public function logout()
        {
            auth()->logout();
            return response()->json(['message' => 'Deconnexion reussie.'], 200);
        }

        public function refresh(){
            $token = auth()->refresh();
            return respone()->json([
                "Access Token" => $token,
                "token_type" => "bearer",
                'user' => auth()->user(),
                "expires_in" => env("JWT_TTL") * 60 ."secondes"
            ]);
        }
    
}