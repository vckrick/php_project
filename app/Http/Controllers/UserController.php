<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($user) 
    {
        return view('user.profile.show', compact('user'));
    }
    public function edit($user) 
    {
        return view('user.profile.edit', compact('user')); 
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'father_name' => ['nullable', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
        ]);

        User::query()->find(Auth::user()->id)->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'father_name' => $validated['father_name'] ?? null,
            'email' => $validated['email'],
        ]);

        return redirect()->route('user.profile.show', Auth::user()->id);
    }

}
