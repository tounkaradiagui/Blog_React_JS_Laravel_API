<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use HttpResponses;

    //  Je souhaiterai les erreurs dans la console si par exemple l'email ou le username existe Voici mon code de API laravel de la function register cidessous.
    public function register(RegisterRequest $request)
    {
        $request->validated(); // Valider toutes les entrées
    
        // Vérifier si le nom d'utilisateur existe déjà et le générer si nécessaire
        $username = $this->generateUniqueUsername($request->username);
    
        // Enregistrement du nouvel utilisateur
        $user = User::create([
            'name' => $request->name,
            'username' => $username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 4,
        ]);
    
        return $this->success([
            'status' => 200,
            'username' => $user->username,
            'message' => "Registration successfully",
            'token' => $user->createToken('API token of ' . $user->email)->plainTextToken,
        ]);
    }
    
    private function generateUniqueUsername($name)
    {
        // Supprimer les caractères spéciaux et les espaces du nom
        $cleanedName = preg_replace('/[^a-zA-Z0-9]/', '', $name);
    
        // Générer un nom d'utilisateur initial en prenant les 8 premiers caractères en minuscules
        $baseUsername = strtolower(substr($cleanedName, 0, 8));
    
        $username = $baseUsername;
        $counter = 1;
    
        // Vérifier l'unicité du nom d'utilisateur
        while (User::where('username', $username)->exists()) {
            // Si le nom d'utilisateur existe déjà, ajouter un compteur numérique
            $username = $baseUsername . $counter;
            $counter++;
        }

        // Ajouter des messages de journalisation pour le débogage
        Log::info('Generated username:', ['baseUsername' => $baseUsername, 'counter' => $counter, 'finalUsername' => $username]);

    
        return $username;
    }
    

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();
    
        if (!Auth::attempt(['email' => $user->email, 'password' => $credentials['password']])) {
            return $this->error([
                'status' => 401,
                'message' => 'Unauthorized Access! Please check your credentials and try again.',
            ]);
        } else {
            $role = '';
    
            if ($user->role_id == 1) {
                $role = 'admin';
            } elseif ($user->role_id == 2) {
                $role = 'editor';
            } else {
                $role = 'user';
            }
    
            $tokenResult = $user->createToken($user->token . '_' . $role . '_token_' . $user->username)->plainTextToken;
    
            return $this->success([
                'status' => 200,
                'id' => $user->id,
                'username' => $user->username,
                'role'  => $role,
                'token' => $tokenResult,
                'message' => "Authenticated successfully",
            ]);
        }
    }
    

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();

        return $this->success([
            'message' => 'You have successfully been logged out and your token has been deleted',
        ]);
    }
}
