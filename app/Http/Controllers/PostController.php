<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Auth;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::all();

        $filteredPosts = $posts->filter(function ($post) {
            return Gate::allows('view-posts', $post);
        });

        return view('posts.index', ['posts' => $filteredPosts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request): RedirectResponse
    {
        $data = $request->all();

        $data['caducable'] = isset($data['caducable']);
        $data['comentable'] = isset($data['comentable']);
        $data['user_id'] = Auth::user()->id;

        Post::create($data);
        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', compact('post'));
    }
}
