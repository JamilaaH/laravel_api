<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->email);
        $form = $request->validate([
            'email' => 'required|string',
            'password' => 'required',
        ]);
        if (!Auth::attempt($form)) {
            return $this->error('Mot de passe ou email invalides', 401);
        }
        //rechercher l'user
        $user = User::where('email', $form['email'])->first();

        //vérifier le mdp et si l'user n'existe pas
        if (!$user || !Hash::check($form["password"], $user->password)) {
            return response()->json([
                'message'=>"mot de passe ou email invalide"
            ]);
        }

        $token = $user->createToken('api_token')->plainTextToken;

        $response = [
            'message'=>"vous êtes connecté",
            'user'=>$user,
            'token' => $token,
        ];
        
        return response()->json($response,201);
    }
    
    public function register(Request $request)
    {
        $form = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|confirmed',
            'photo' => 'required|string',
        ]);

        $user = User::create([
            'nom' => $form['nom'],
            'prenom' => $form['prenom'],
            'email' => $form['email'],
            'photo' => $form['photo'],
            'password' => bcrypt($form['password']),
        ]);

        $token = $user->createToken('api_token')->plainTextToken;

        $response = [
            'user'=>$user,
            'token' => $token,
        ];
        
        return response()->json($response, 201);
    }

    public function logout(Request $request)
    {
        auth()->user()->currentAccessToken()->delete();       
        return response(['message' => 'You have been successfully logged out.'], 200);
    }
    
}
