<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(20);

        return view('users.index', [
            "users" => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => ["required", "string", "max:255", "unique:users,name"],
            "display_name" => ["nullable", "string", "max:255"],
            "email" => ["required", "email", "unique:users,email"],
            "password" => ["required", "string", "min:8", "confirm"],
            "password_confirmation" => ["required", "string"],
            "role" => ["nullable", "string"],
            "img" => ["nullable", "img", "mimes:jpeg,png,jpg", "max:10240"]
        ]);

        $user = new User();
        $user->fill($validated);

        if ($request->hasFile('img')) {
            $img = $request->file("img");

            $fileName = time() . '_' . $img->getClientOriginalName();
            $filePath = $img->storeAs('uploads', $fileName, 'public');

            $user->img = $filePath;
        }
        
        $user->password = Hash::make($validated["password"]);
        $user->save();

        return redirect()->route("users.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = User::findOrFail($id);

        return view("users.show", [
            "user" => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::findOrFail($id);

        return view("users.edit", [
            "user" => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            "name" => ["nullable", "string", "max:255", "unique:users,name"],
            "display_name" => ["nullable", "string", "max:255"],
            "email" => ["nullable", "email", "unique:users,email"],
            "password" => ["nullable", "string", "min:8", "confirm"],
            "password_confirmation" => ["nullable", "string"],
            "role" => ["nullable", "string"],
            "img" => ["nullable", "img", "mimes:jpeg,png,jpg", "max:10240"]
        ]);

        $user->update($validated);

        if ($request->hasFile('img')) {
            $img = $request->file("img");

            if ($user->img) {
                Storage::disk("public")->delete($user->img);
            }    

            $fileName = time() . '_' . $img->getClientOriginalName();
            $filePath = $img->storeAs('uploads', $fileName, 'public');

            $user->img = $filePath;
        }
        
        if ($validated["password"]) {
            $user->password = Hash::make($validated["password"]);
        }

        $user->save();

        return redirect()->route("users.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $user = User::findOrFail($id);

        $user->forums()->delete();
        $user->posts()->delete();
        $user->comments()->delete();
        $user->replies()->delete();

        if ($user->img) {
            Storage::disk("public")->delete($user->img);
        }

        $user->delete();

        return response(null);
    }
}
