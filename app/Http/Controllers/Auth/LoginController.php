<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    

    use AuthenticatesUsers;


    protected $redirectTo;

    public function __construct()
    {
        if (Auth::check() && Auth::user()->role->id == 1) {
            $this->redirectTo = route('admin.dashboard');
        } else {
            $this->redirectTo = route('member.dashboard');
        }

        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        return ['email' => $request->{$this->username()},'password'=> $request->password, 'status' => 1];
    }

}
