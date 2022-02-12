<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Picture extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
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
