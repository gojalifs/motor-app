<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where("email", $request->email)->first();
        if (!$user) {
            return redirect()->back()->with("error", "Email salah!");
        }

        $check = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($check) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->withErrors(["error" => "Kata sandi salah!"]);
        }
    }
}
