<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

    protected $fillable = [
        "post_id",
        "user_id",
        "content",
    ];

    /**
     * Define the relationship with posts
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    /**
     * Define the relationship with reply
     */
    public function replies()
    {
        return $this->hasMany(Reply::class, 'comment_id', 'id');
    }

    /**
     * Define the relationship with users
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
