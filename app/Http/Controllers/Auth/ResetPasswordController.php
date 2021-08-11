<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{


    use ResetsPasswords;

    protected $redirectTo;

    public function __construct()
    {
        $this->middleware('guest');

        if (Auth::check() && Auth::user()->role->id == 1) {
            $this->redirectTo = route('admin.dashboard');
        } else {
            $this->redirectTo = route('member.dashboard');
        }
        $this->middleware('guest')->except('logout');

    }
}
