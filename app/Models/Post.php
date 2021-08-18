<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
    public function author()
    {
    	return $this->belongsTo(Author::class);
    }
    public function postdetail()
    {
        return $this->hasOne(PostDetail::class);
    }
}
