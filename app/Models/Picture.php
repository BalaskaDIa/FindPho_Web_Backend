<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use Laravelista\Comments\Commentable;

class Picture extends Model
{
    use HasFactory,Commentable;
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function categories() {
        return $this->belongsTo(Categories::class);
    }

    protected $table = 'pictures';

    protected $visible = [
        'id',
        'user_id',
        'categories_id',
        'url',
        'coordinate',
        'title',
        'description',
        'created_at',
        'updated_at',
        'image',
        'caption',
        'category'
    ];

    protected $fillable = [
        'user_id',
        'categories_id',
        'url',
        'coordinate',
        'title',
        'description',
        'created_at',
        'updated_at',
        'image',
        'caption'
    ];
}
