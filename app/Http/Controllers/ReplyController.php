<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\User;

use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $replies = Reply::paginate(20);

        return view("replies.index", [
            "replies" => $replies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("replies.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "user" => ["required", "string", "exists:users,name"],
            "comment_id" => ["required", "numeric", "exists:comments,id"],
            "content" => ["required", "string"],
        ]);

        $userId = User::where("name", $validated["user"])->first()->id;

        $reply = new Reply();
        
        $reply->fill($validated);
        $reply->user_id = $userId;
        $reply->save();

        return redirect()->route('reply.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $reply = Reply::findOrFail($id);

        return view("replies.show", [
            "reply" => $reply,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $reply = Reply::findOrFail($id);

        return view("replies.edit", [
            "reply" => $reply,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $reply = Reply::findOrFail($id);

        $validated = $request->validate([
            "user" => ["nullable", "string", "exists:users,name"],
            "comment_id" => ["nullable", "numeric", "exists:comments,id"],
            "content" => ["nullable", "string"],
        ]);

        if ($validated["user"]) {
            $userId = User::where("name", $validated["user"])->first()->id;
            $reply->user_id = $userId;
        }

        $this->updateModel($reply, $validated, ["user"]);
        $reply->save();

        return redirect()->route('reply.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $reply = Reply::findOrFail($id);
        $reply->delete();

        return response(null);
    }
}
