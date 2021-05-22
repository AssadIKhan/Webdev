<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
       $this->validate($request, [
        'firstname' => 'required|max:255',
        'lastname' => 'required|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|confirmed',
       ]);

       User::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'email'  =>  $request->email,
        'password' => Hash::make($request->password),
       ]);

       auth()->attempt($request->only('email', 'password'));

       return redirect()->route('dashboard');
    }
}
