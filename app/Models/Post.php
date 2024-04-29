<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';
    
    protected $fillable = [
        "forum_id",
        "user_id",
        "title",
        "content",
    ];

    /**
     * Define the relationship with the forums
     */
    public function forum()
    {
        return $this->belongsTo(Forum::class, 'forum_id', 'id');
    }

    /**
     * Define the relationship with the users
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
