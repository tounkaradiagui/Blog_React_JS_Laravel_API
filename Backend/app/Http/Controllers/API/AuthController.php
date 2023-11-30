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
        $request->validated(); //Validate all input

        $user = User::create([  //New user registration
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 4
        ]);

        return $this->success([ //The success response from my Traits directory
            'status' => 200,
            'username' => $user->username,
            'message' => "Registration successfully",
            'token' => $user->createToken('API token of ' . $user->email)->plainTextToken //Generate a token for every registered user
        ]);
    }

    public function login(LoginRequest $request)
    {
        $request->validated($request->all());

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();

        if(!Auth::attempt(['email' => $user->email,'password' => $credentials['password']]))
        {
            return $this->error('error', 'Credentials do not match', 401);
        }else{
            // if(Gate::allows('admin')){
            //     return "Welcome to your dashboard";
            // }else{
                // return "Welcome to WebGenius Solutions";
            return $this->success([
                'status' => 200,
                'username' => $user->username,
                'message' => "Authenticated successfully",
                'token' => $user->createToken('API token of ' .$user->email)->plainTextToken
            ]);
            // }
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
