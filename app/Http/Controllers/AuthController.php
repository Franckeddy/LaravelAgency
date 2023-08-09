<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    final public function login(): View {
        return view('auth.login');
    }

    final public function doLogin(LoginRequest $request): RedirectResponse {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.property.index'));
        }

        return back()->withErrors([
            'email' => 'Email Invalid',
        ])->onlyInput('email');
    }

    final public function logout(): RedirectResponse {
        Auth::logout();
        return to_route('login')->with('success', 'Vous êtes déconnecté');
    }
}
