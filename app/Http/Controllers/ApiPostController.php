<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use Auth;

class ApiPostController extends Controller
{


    public function update(PostRequest $request, Post $post)
    {
        $data = $request->all();

        $data['caducable'] = isset($data['caducable']);
        $data['comentable'] = isset($data['comentable']);
        $data['user_id'] = Auth::user()->id;

        $post->update($data);
        return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
