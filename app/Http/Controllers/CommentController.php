<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::paginate(20);

        return view("comments.index", [
            "comments" => $comments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comments.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "post_id" => ["required", "number", "exists:posts,id"],
            "user_id" => ["required", "number", "exists:users,id"],
            "content" => ["required", "string"],
        ]);

        $comment = new Comment();
        $comment->fill($validated);
        $comment->save();

        return redirect()->route('comments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $comment = Comment::findOrFail($id);

        return view("comments.show", [
            "comment" => $comment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $comment = Comment::findOrFail($id);

        return view("comments.edit", [
            "comment" => $comment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $comment = Comment::findOrFail($id);

        $validated = $request->validate([
            "post_id" => ["nullable", "number", "exists:posts,id"],
            "user_id" => ["nullable", "number", "exists:users,id"],
            "content" => ["nullable", "string"],
        ]);

        $comment->update($validated);
        $comment->save();
        
        return redirect()->route('comments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $comment = Comment::findOrFail($id);

        $comment->replies()->delete();
        $comment->delete();

        return response(null);
    }
}
