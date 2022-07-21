<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');}

    public function loginStore(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required']);
        if(Auth::attempt($data)){
            $request->session()->regenerate();

            return redirect('home');
        }

        return back()->with('error','username atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('login');
    }

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
}
