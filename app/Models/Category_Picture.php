<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Picture extends Model
{
    use HasFactory;

    public function picture() {
        return $this->hasMany(Picture::class);
    }

    public function category() {
        return $this->hasMany(Categories::class);
    }

    protected $table = 'category_picture';

    protected $visible = [
        'picture_id',
        'category_id'
    ];

    protected $fillable = [
        'picture_id',
        'category_id'
    ];
}
