<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function create() 
    {
        return view('user.form.create');
    }

    public function store(Request $request) 
    {
        $validated = validator($request->all(), [
            'vocation' => ['required', 'string', 'max:50'],
            'about' => ['required', 'string', 'max:10000'],
            'adress' => ['required', 'string', 'max:100'],
        ])->validate();


        $form = Form::query()->create([
            'user_id' => Auth::user()->id,
            'vocation' => $validated['vocation'],
            'about' => $validated['about'],
            'adress' => $validated['adress'],
        ]);
        $form->save();

        User::query()->find(Auth::user()->id)->update([
            'form_id' => $form->id,
        ]);

        return redirect()->route('user.form.show', $form->id);
    }

    public function show($form)
    {
        $form = Form::query()->find($form);
        return view('user.form.show', compact('form'));
    }
    public function edit($form) 
    {
        $form = Form::query()->find($form);
        return view('user.form.edit', compact('form')); 
    }

    public function update(Request $request)
    {
        $validated = validator($request->all(), [
            'vocation' => ['required', 'string', 'max:50'],
            'about' => ['required', 'string', 'max:10000'],
            'adress' => ['required', 'string', 'max:100'],
        ])->validate();

        Form::query()->find(Auth::user()->form_id)->update([
            'user_id' => Auth::user()->id,
            'vocation' => $validated['vocation'],
            'about' => $validated['about'],
            'adress' => $validated['adress'],
        ]);

        return redirect()->route('user.form.show', Auth::user()->id);
    }
}
