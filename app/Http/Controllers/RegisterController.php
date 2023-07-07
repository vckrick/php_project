<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'father_name' => ['nullable', 'string', 'max:50'],
            'passport_seria' => ['required', 'string', 'max:4', 'min:4'],
            'passport_number' => ['required', 'string', 'max:6', 'min:6', 'unique:users'],
            'born_date' => ['required', 'string', 'date'],
            'sex' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
            'agreement' => ['accepted'],
        ]);

        $user = User::query()->create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'father_name' => $validated['father_name'] ?? null,
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'passport_seria' => $validated['passport_seria'],
            'passport_number' => $validated['passport_number'],
            'sex' => $validated['sex'],
            'born_date' => $validated['born_date'],
        ]);

        $user->save();

        Auth::login($user);
        
        return redirect()->route('user');
    }
}
