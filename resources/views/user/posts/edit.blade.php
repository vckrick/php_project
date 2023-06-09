@props(['post' => null])

@extends('layouts.main')

@section('page.title', "Изменить пост")

@section('main.content')

    <x-title>
        {{ __("Изменить пост") }}

        <x-slot name='link'>
            <a href="{{ route('user.posts') }}">
                {{ __("Назад") }}
            </a> 
        </x-slot>

    </x-title>

    <x-post.form action="{{ route('user.posts.update', $post->id) }}" method="PUT" :post="$post"  >
        <x-button type="submit" class="mb-3">
            {{ __("Сохранить") }}
        </x-button>
    </x-post.form>

@endsection 