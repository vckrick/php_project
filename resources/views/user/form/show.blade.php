@extends('layouts.main')

@section('page.title', "Просмотр анкеты")

@section('main.content')

    <x-title>
        {{ __("Просмотр анкеты") }}
        
        <x-slot name="link">
            <a href="{{ route('user.profile.show', Auth::user()->id) }}">
                {{ __("Назад") }}
            </a>
        </x-slot>

        <x-slot name="right">
            <x-button-link href="{{ route('user.form.edit', $form->id) }}">
                {{ __("Изменить") }}
            </x-button-link>
        </x-slot>

    </x-title>

    <h2 class="h4">
        {{ $form->vocation }}
    </h2>

    <div class="pt-3">
        {{ $form->adress }}
    </div>

    <div class="pt-3">
        {{ $form->about }}
    </div>

@endsection