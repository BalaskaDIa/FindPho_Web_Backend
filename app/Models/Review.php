<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Picture;

class Review extends Model
{
    use HasFactory;

    public function location() {
        return $this->belongsTo(Picture::class);
    }

    protected $table = 'reviews';
    
    protected $visible = [
        'id',
        'picture_id',
        'rate'
    ];

    protected $fillable = [
        'picture_id',
        'rate'
    ];
}
