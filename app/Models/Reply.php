<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'replies';

    protected $fillable = [
        "user_id",
        "comment_id",
        "content"
    ];

    /**
     * Define the relationship with the comments
     */
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id', 'id');
    }

    /**
     * Define the relationship with the users
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
