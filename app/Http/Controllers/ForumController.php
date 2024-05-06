<?php

namespace App\Http\Controllers;

use App\Models\Forum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forums = Forum::paginate(20);

        return view("forums.index", [
            "forums" => $forums,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("forums.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => ["required", "string", "max:100", "unique:forums,title"],
            "img" => ["nullable", "image", "mimes:jpg,jpeg,png", "max:10240"],
            "desc" => ["nullable", "string"],
        ]);

        $forum = new Forum();
        $forum->fill($validated);

        if ($request->hasFile('img')) {
            $img = $request->file("img");

            $fileName = time() . '_' . $img->getClientOriginalName();
            $filePath = $img->storeAs('uploads', $fileName, 'public');

            $forum->img = $filePath;
        }

        $forum->save();

        return redirect()->route('forums.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $forum = Forum::findOrFail($id);

        return view("forums.show", [
            "forum" => $forum,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $forum = Forum::findOrFail($id);

        return view("forums.edit", [
            "forum" => $forum,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $forum = Forum::findOrFail($id);

        $validated = $request->validate([
            "title" => ["nullable", "string", "max:100", "unique:forums,title"],
            "img" => ["nullable", "image", "mimes:jpg,jpeg,png", "max:10240"],
            "desc" => ["nullable", "string"],
        ]);

        $forum->update($validated);
        
        if ($request->hasFile('img')) {
            $img = $request->file("img");

            if ($forum->img) {
                Storage::disk("public")->delete($forum->img);
            }    

            $fileName = time() . '_' . $img->getClientOriginalName();
            $filePath = $img->storeAs('uploads', $fileName, 'public');

            $forum->img = $filePath;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $forum = Forum::findOrFail($id);

        $forum->users()->delete();
        $forum->posts()->delete();

        if ($forum->img) {
            Storage::disk("public")->delete($forum->img);
        }    
        
        $forum->delete();

        return response(null);
    }
}
