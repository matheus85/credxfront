<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function index()
    {
        return view('auth.index');
    }

    public function signupPage()
    {
        return view('auth.signup');
    }

    public function login(Request $request)
    {
        $response = $this->requestApiAuth($request->all(), 'login');
        
        if ($response['status'] == 200) {
            session()->put('authenticated', time());
            session()->put('user', $response['data']['user']);
            session()->put('access_token', $response['data']['access_token']);
            return redirect()->route('home.index');
        } else {
            return redirect()->back()
                             ->withErrors($response['data']['data'] ?? [])
                             ->withError($response['data']['message'] ?? '');
        }
    }

    public function logout()
    {
        $this->requestApi('logout', 'delete');

        session()->flush();

        return redirect()->route('index');
    }

    public function signup(Request $request)
    {
        $response = $this->requestApiAuth($request->all(), 'signup');
        
        if ($response['status'] == 201) {
            return redirect()->route('index');
        } else {
            return redirect()->back()
                             ->withErrors($response['data']['data'] ?? [])
                             ->withError($response['data']['message'] ?? '');
        }
    }
}
