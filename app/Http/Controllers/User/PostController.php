<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class PostController extends Controller
{
    public function index() 
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Далеко-далеко за словесными горами в стране.',
            'content' => 'Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.',
        ];

        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }
    public function create() 
    {
        return view('user.posts.create');
    }
    public function store(Request $request) 
    {        
        $validated = validator($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
            'published_at' => ['nullable', 'string', 'date'],
            'published' => ['nullable', 'boolean'],
        ])->validate();

        $post = Post::query()->firstOrCreate([
            'user_id' => Auth::get('id'),
            'title' => $validated['title'],
        ], [
            'content' => $validated['content'],
            'published_at' => new Carbon($validated['published_at'] ?? null),
            'published' => $validated['published'] ?? false,
        ]);
        $post->save();

        return redirect()->route('user.posts.show', $post->id);
    }
    public function show($post) 
    {
        return view('user.posts.show', compact('post'));
    }
    public function edit($post) 
    {
        return view('user.posts.edit', compact('post')); 
    }
    public function update(Request $request, $post) 
    {
        $title = $request->input('title');
        $content = $request->input('content');

        // dd($title, $content);

        return redirect()->back();
    }
    public function delete($post) 
    {
        return redirect()->route('user.posts');
    }
};
