<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = false;

    const STATUS_UNPUBLICHED = 0;
    const STATUS_PUBLICHED = 1;
    const ARCHIVED = 2;

    public static function getStatus($idStatus)
    {
        switch ($idStatus){
            case 0: return 'Неопубликованный';break;
            case 1: return 'Опубликованный';break;
            case 2: return 'Архивированный';break;
        }
        return abort(500);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function likedUsers()
    {
        return $this->belongsToMany(User::class, 'post_user_likes','post_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id','id')->orderBy('created_at','desc')->take(5);
    }

    public function getCreator()
    {
        return $this->belongsTo(User::class,'creator_id','id');
    }
}
