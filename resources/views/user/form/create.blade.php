@extends('layouts.main')

@section('page.title', "Создать пост")

@section('main.content')

    <x-title>
        {{ __("Создать анкету") }}

        <x-slot name='link'>
            <a href="{{ route('user.profile.show', Auth::user()->id) }}">
                {{ __("Назад") }}
            </a>
        </x-slot>

    </x-title>

    <x-post.form action="{{ route('user.form.store') }}" method="POST" >
        <x-button type="submit" class="mb-3">
            {{ __("Создать") }}
        </x-button>
    </x-post.form>

@endsection