<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        return "Страница список постов";
    }
    public function create() 
    {
        return "Страница создание поста";
    }
    public function store() 
    {
        return "Запрос создание поста";
    }
    public function show() 
    {
        return "Страница просмотр поста";
    }
    public function edit() 
    {
        return "Страница изменение поста"; 
    }
    public function update() 
    {
        return "Запрос изменение поста";
    }
    public function delete() 
    {
        return "Запрос удаление поста";
    }
}
