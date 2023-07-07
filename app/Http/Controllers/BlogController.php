<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()->latest('published_at')->paginate(12, ['id', 'title', 'published_at']);

        $categories = ['null' => __('Все категории'), '1' => __('Первая категория')];

        return view('blog.index', compact('posts', 'categories'));
    }
    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Далеко-далеко за словесными горами в стране.',
            'content' => 'Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.',
        ];
        return view('blog.show', compact('post'));
    }
    public function like($post)
    {
        return "Лайк";
    }
}