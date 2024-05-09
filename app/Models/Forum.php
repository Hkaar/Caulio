<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forums';

    protected $fillable = [
        "title",
        "img",
        "desc",
    ];

    /**
     * Define the relationship with users
     */
    public function users()
    {
        return $this->hasMany(ForumUser::class, 'forum_id', 'id');
    }

    /**
     * Define the relationship with posts
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'forum_id', 'id');
    }
}
