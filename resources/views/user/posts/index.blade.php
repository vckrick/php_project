@extends('layouts.main')

@section('page.title', "Мои посты")

@section('main.content')

    <x-title>
        {{ __("Мои посты") }}

        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.create') }}">
                {{ __('Создать') }}
            </x-button-link>
        </x-slot>

    </x-title>

    @if (empty($posts))
        {{ __("Посты не найдены.") }}
    @else
        @foreach ($posts as $post)
            <div class="mb-3">
                
                <h2 class="h6">
                    <a href="{{ route('user.posts.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </h2>

                <div class="small text-muted">
                    {{ now()->format('d.m.Y H:i:s') }}
                </div>

            </div>
        @endforeach 
    @endif

@endsection