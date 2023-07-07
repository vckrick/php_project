@props(['post' => null])

@extends('layouts.main')

@section('page.title', "Изменить анкету")

@section('main.content')

    <x-title>
        {{ __("Изменить анкету") }}

        <x-slot name='link'>
            <a href="{{ route('user.profile.show', Auth::user()->id) }}">
                {{ __("Назад") }}
            </a> 
        </x-slot>

    </x-title>

    <x-post.form action="{{ route('user.form.update', $form->id) }}" method="PUT" :form="$form"  >
        <x-button type="submit" class="mb-3">
            {{ __("Сохранить") }}
        </x-button>
    </x-post.form>

@endsection 