<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * To show login view
     * 
     * @param LoginRequest $request
     * @return \Illuminate\View\View
     */
    public function index() 
    {
        return view('login');
    }

    /**
     * To login from system
     * 
     * @param LoginRequest $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request) 
    {
        $credentials = $request->validated();
        $remember = array_pop($credentials);
        return Auth::attempt($credentials, $remember) ? 
            $this->onLoginSuccess($request) :
            $this->onLoginFailed();
    }
    
    /**
     * To logout from system
     * 
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.index');
    }

    /**
     * Callback when auth success
     * 
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    private function onLoginSuccess(Request $request) 
    {
        $request->session()->regenerate();
        return redirect()->intended('home')->with('status', 'Login Success');
    }

    /**
     * Callback when auth failed
     * 
     * @return \Illuminate\Http\Response
     */
    private function onLoginFailed() 
    {
        $errors = new MessageBag(['Login Failed']);
        return redirect()->back()->withErrors($errors);
    }
}