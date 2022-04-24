<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Models\Posts\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with([
            'likes' => function ($q){
                return $q->latest()->first();
            },
            'comments' => function($q){
                return $q->latest()->first();
            }
        ])->withCount(['likes','comments'])->where(function ($q){
            $q->public()->somePeopleSee(true);
        })->orderBy('created_at', 'desc')->paginate(20);

        return $this->sendSuccess('Get Post Success', new PostCollection($posts));

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
