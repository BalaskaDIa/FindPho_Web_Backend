<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Picture extends Model
{
    use HasFactory;

    public function picture() {
        return $this->belongsTo(Picture::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    protected $table = 'comments';
    
    protected $visible = [
        'picture_id',
        'category_id'
    ];

    protected $fillable = [
        'picture_id',
        'category_id'
    ];
}
