<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // public function login(Request $request)
    // {
    //     $credentials = $request->only("email", "password");
    //     if(Auth::attempt($credentials))
    //     {
    //         if(auth()->user()->hasRole('admin'))
    //         {
    //             return redirect('/dashboard');
    //         }elseif(auth()->user()->hasRole('user'))
    //         {
    //             return redirect('/home');
    //         }
    //     }else
    //     {
    //         return redirect('/');
    //     }
    // }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('username', $credentials['email'])
                        ->orWhere('email', $credentials['email'])
                        ->first();
        if($user && $user->status == 1 && $user->hasRole('admin') && Auth::attempt([
            'username' => $user->username,
            'password' => $credentials['password']
            ]
        ))
        {
            // Connexion de l'utilisateur si active et via le username
            return redirect()->intended('/dashboard')->with('success', 'Bonjour  '. Auth::user()->nom . ' ' . Auth::user()->prenom. ' !!' .'  Bienvenue sur votre tableau de bord');
        }
        elseif($user && $user->status == 1 && $user->hasRole('admin') && Auth::attempt([
            'email' => $user->email,
            'password' => $credentials['password']
            ]
        ))
        {
            // Connexion de l'utilisateur si active et via email
            return redirect()->intended('/dashboard')->with('success', 'Bonjour  '. Auth::user()->nom . ' ' . Auth::user()->prenom. ' !!' .'  Bienvenue sur votre compte');
        }elseif($user && $user->status == 1 && $user->hasRole('user') && Auth::attempt([
            'username' => $user->username,
            'password' => $credentials['password']
            ]
        ))
        {
            // Connexion de l'utilisateur si active et via le username
            return redirect()->intended('/home')->with('success', 'Bonjour  '. Auth::user()->nom . ' ' . Auth::user()->prenom. ' !!' .'  Bienvenue sur votre compte');
        }
        elseif($user && $user->status == 1 && $user->hasRole('user') && Auth::attempt([
            'email' => $user->email,
            'password' => $credentials['password']
            ]
        ))
        {
            // Connexion de l'utilisateur si active et via email
            return redirect()->intended('/home')->with('success', 'Bonjour  '. Auth::user()->nom . ' ' . Auth::user()->prenom. ' !!' .'  Bienvenue sur votre compte');
        }
        elseif($user && $user->status == 0)
        {
            // Connexion de l'utilisateur si inactive via email ou username
            return redirect()->back()->withErrors(['credentials' => "Votre compte a été désactivé veuillez contacter votre administrateur"]);
        }
        else
        {
            // Connexion de l'utilisateur si email, username ou son mot de passe est incorrect
            return redirect()->back()->withErrors(['credentials' => "L'email ou le mot de passe ne correspond pas"]);
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
