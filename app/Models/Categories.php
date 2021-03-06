<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function pictures(){
        return $this->hasMany(Picture::class);
    }

    protected $table = 'categories';

    protected $visible = [
        'id',
        'name'
    ];

    protected $fillable = [
        'name'
    ];
}
