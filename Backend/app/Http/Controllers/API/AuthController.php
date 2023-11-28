<?php

namespace App\Http\Controllers\API;

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

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        if($data){
            // $username = strtolower(substr($request->name, 0, 1));
            // if(User::where('username', $username)->exists()){
            //     $username .='_'. rand(100, 999);
            // }
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $request->role_id,
                // 'adresse' => $request->adresse,
                // 'phone' => $request->phone,
                // 'date_of_birth' => $request->date_of_birth,
                // 'city' => $request->city,
                // 'profile_image' => $request->profile_image
            ]);

            return $this->success([
                'user', $user,
                'token' => $user->createToken('API token of ' .$user->email)->plainTextToken
            ]);
        }else{
            return $this->error('','An error has occurred', 401);
        }

    }

    public function login(LoginRequest $request)
    {
        $request->validated($request->all());

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();
        // $user = User::where('username', $credentials['email'])
        //                 ->orWhere('email', $credentials['email'])
        //                 ->first();

        if(!Auth::attempt(['email' => $user->email,'password' => $credentials['password']]))
        {
            return $this->error('error', 'Credentials do not match', 401);
        }else{
            if(Gate::allows('admin')){
                return "Welcome to your dashboard";
            }else{
                // return "Welcome to WebGenius Solutions";
                return $this->success([
                    'user', "Welcome to WebGenius Solutions",
                    'token' => $user->createToken('API token of ' .$user->email)->plainTextToken
                ]);
            }
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
