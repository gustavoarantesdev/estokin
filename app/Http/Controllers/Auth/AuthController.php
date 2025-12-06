<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Exibe o formulário de login.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Autentica o usuário com base nas credenciais, e inicia a sessão.
     */
    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate(
            [
                'username' => 'required|string|max:150|min:3',
                'password' => 'required|string|min:5',
            ],
            [
                'username.required' => 'Insira o login.',
                'username.string' => 'Insira um login válido',
                'username.max' => 'O login deve ter no máximo :max caracteres.',
                'username.min' => 'O login deve ter no mínimo :min caracteres',

                'password.required' => 'Insira a senha.',
                'password.string' => 'Insira uma senha válida',
                'password.min' => 'A senha deve ter no mínimo :min caracteres.',
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => 'A combinação de login e senha estão incorretos.',
        ])->onlyInput('username');
    }

    /**
     * Encerra a sessão do usuário e invalida o token CSRF.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
