<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Forum;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(20);

        return view("posts.index", [
            "posts" => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "forum" => ["required", "string", "max:100", "exists:forms,title"],
            "user" => ["required", "string", "exists:users,name"],
            "title" => ["required", "string", "max:255"],
            "content" => ["nullable", "string"],
        ]);

        $post = new Post();

        $userId = User::where("name", $validated["user"])->first()->id;
        $forumId = Forum::where("title", $validated["forum"])->first()->id;

        $post->fill($validated);
        $post->user_id = $userId;
        $post->forum_id = $forumId;

        $post->save();

        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $post = Post::findOrFail($id);
        
        return view("posts.show", [
            "post" => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $post = Post::findOrFail($id);
        
        return view("posts.edit", [
            "post" => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $post = Post::findOrFail($id);
        
        $validated = $request->validate([
            "forum" => ["nullable", "string", "max:100", "exists:forms,title"],
            "user" => ["nullable", "string", "exists:users,name"],
            "title" => ["nullable", "string", "max:255"],
            "content" => ["nullable", "string"],
        ]);

        $post->update($validated);

        if ($validated["forum"]) {
            $userId = User::where("name", $validated["user"])->first()->id;
            $post->user_id = $userId;
        }

        if ($validated["user"]) {
            $forumId = Forum::where("title", $validated["forum"])->first()->id;
            $post->forum_id = $forumId;
        }

        $post->save();

        return redirect()->route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $post = Post::findOrFail($id);

        $post->comments()->delete();
        $post->delete();

        return response(null);
    }
}
