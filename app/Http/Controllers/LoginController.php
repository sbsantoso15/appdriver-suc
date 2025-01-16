<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showForm() {
        return view('login');
    }

    public function login(Request $request) {
        $request->validate([
            'nik' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = User::where('nik', $request->nik)
        ->where('status', 'Admin')
        ->where('isactive', 1)
        ->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dboard.index');
        }
        return back()->withErrors(['password' => 'NIK atau password salah.']);
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }

}
