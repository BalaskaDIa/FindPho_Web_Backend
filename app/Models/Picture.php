<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Picture extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function comment() {
        return $this->hasMany(Comment::class);
    }

    public function picture_cat2() {
        return $this->belongsTo(Category_Picture::class);
    }


    protected $table = 'picture';
    
    protected $visible = [
        'id',
        'user_id',
        'url',
        'coordinate',
        'title',
        'description',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'user_id',
        'url',
        'coordinate',
        'title',
        'description',
        'created_at',
        'updated_at'
    ];
}
