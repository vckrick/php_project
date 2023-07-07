@extends('layouts.main')

@section('main.content')

    <x-title>
        {{ __("Список постов") }}
    </x-title>

    @include("blog.filter")

    @if (empty($posts))
        {{ __("Посты не найдены.") }}
    @else
        <div class="row">
                @foreach ($posts as $post)
                    <div class="col-12 col-md-4">
                        <x-post.card :post="$post" />
                    </div>
                @endforeach 
        </div>
    @endif

@endsection