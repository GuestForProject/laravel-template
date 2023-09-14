<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request): string {
        return "Это главная страница с постами";
    }

    public function store(Request $request): string {
        return "Это страница просмотра поста post";
    }



    public function create(Request $request, int $id): string {
        return "Страница создания поста";
    }
    public function show(Request $request, int $id): string {
        return "Это страница просмотра поста #" . $id;
    }
    public function edit(Request $request, int $id): string {
        return "Это страница редактирования поста #" . $id;
    }
    public function update(Request $request, int $id): string {
        return "Это страница редактирования update поста #" . $id;
    }
    public function delete(Request $request, int $id): string {
        return "Это страница удаления поста #" . $id;
    }
    public function like(Request $request, int $id): string {
        return "Это страница лайка поста #" . $id;
    }


    public function login(Request $request): string {
        return "Это страница входа";
    }
    public function registration(Request $request): string {
        return "Это страница регистрации";
    }
}
