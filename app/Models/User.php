<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use App\Models\Picture;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function picture() {
        return $this->hasMany(Picture::class)->orderBy('created_at','desc');
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    protected $table = 'users';
    
    protected $visible = [
        'id',
        'name',
        'username',
        'email',
        'admin'
    ];

    protected $fillable = [
        'name',
        'username',
        'email',
        'admin',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'admin' => 'boolean'
    ];
}
