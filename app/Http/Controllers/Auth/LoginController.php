<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('login'); }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required','email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // intended: redirects to the page the user was trying to access before being sent to login
            return redirect()->intended(route('offers.index'));
            // previous: return redirect()->intended(route('home'));
        }
        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
            ])->onlyInput('email');
    }
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }
}

//11:11 !!return redirect('offers.index');
//previous: return redirect('/offers');
