<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        Auth::login($user);

        return redirect()->route('home');
    }
}
