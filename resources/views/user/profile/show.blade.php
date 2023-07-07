@extends('layouts.main')

@section('page.title', "Просмотр поста")

@section('main.content')

    <x-title>
        {{ __("Просмотр профиля") }}
        
        <x-slot name="link">
            <a href="{{ route('home') }}">
                {{ __("Назад") }}
            </a>
        </x-slot>

        <x-slot name="right">
            <x-button-link href="{{ route('user.profile.edit', Auth::user()->id) }}">
                {{ __("Редактировать") }}
            </x-button-link>
            @if(Auth::user()->form_id !== null)
            <x-button-link href="{{ route('user.form.show', Auth::user()->form_id)}}">
                {{ __("Посмотреть анкету") }}
            </x-button-link>
            @else
            <x-button-link href="{{ route('user.form.create') }}">
                {{ __("Создать анкету") }}
            </x-button-link>
            @endif
        </x-slot>

    </x-title>

    <h2 class="h4">
        Фамилия: {{ Auth::user()->last_name }}
    </h2>
    <h2 class="h4">
        Имя: {{ Auth::user()->first_name }}
    </h2>
    @if(Auth::user()->father_name)
    <h2 class="h4 mb-4">
        Отчество: {{ Auth::user()->father_name }}
    </h2>
    @endif
    <h2 class="h4">
        Паспорт: {{ Auth::user()->passport_seria }} {{ Auth::user()->passport_number }}
    </h2>
    <h2 class="h4">
        Дата рождения: {{ Auth::user()->born_date }}
    </h2>
    <h2 class="h4">
        Пол: {{ Auth::user()->sex }}
    </h2>

@endsection