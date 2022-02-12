<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Picture;

class comment extends Model
{
    use HasFactory;

    public function picture() {
        return $this->belongsTo(Picture::class);
    }


    protected $table = 'comment';
    
    protected $visible = [
        'id',
        'picture_id',
        'title',
        'description',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'picture_id',
        'title',
        'description',
        'created_at',
        'updated_at'
    ];
}