<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'display_name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Checks if the user is an admin
     */
    public function isAdmin()
    {
        return $this->role === "admin";
    }

    /**
     * Checks if the user has the specified permission within a forum
     */
    public function hasPermission(int $forumId, string $role)
    {
        return ForumUser::where('user_id', $this->id)
            ->where('forum_id', $forumId)
            ->where('role', $role)
            ->exists();
    }

    /**
     * Define the relationship with the forums
     */
    public function forums()
    {
        return $this->hasMany(ForumUser::class, 'user_id', 'id');
    }

    /**
     * Define the relationship with the posts
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    /**
     * Define the relationship with the comments
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }

    /**
     * Define the relationship with the replies
     */
    public function replies()
    {
        return $this->hasMany(Reply::class, 'user_id', 'id');
    }
}
