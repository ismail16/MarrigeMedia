<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Support\Facades\Auth;

class ConfirmPasswordController extends Controller
{


    use ConfirmsPasswords;

    protected $redirectTo;

    public function __construct()
    {
        $this->middleware('auth');

        if (Auth::check() && Auth::user()->role->id == 1) {
            $this->redirectTo = route('admin.dashboard');
        } else {
            $this->redirectTo = route('member.dashboard');
        }
        $this->middleware('guest')->except('logout');

    }
}
