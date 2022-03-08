<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Picture extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function comment() {
        return $this->hasMany(Comment::class);
    }


    protected $table = 'pictures';

    protected $visible = [
        'id',
        'user_id',
        'url',
        'coordinate',
        'title',
        'description',
        'created_at',
        'updated_at',
        'image',
        'caption'
    ];

    protected $fillable = [
        'user_id',
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
