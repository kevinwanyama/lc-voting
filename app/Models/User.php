<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }

    public function votes()
    {
        return $this->belongsToMany(Idea::class, 'votes');
    }

    public function getAvatar()
    {
        //$randomInteger= rand(1, 36);

        return'https://www.gravatar.com/avatar/'
        .md5($this->email)
        .'?=200'
        .'d=wavatar'
        // .$randomInteger
        .'.png';
    }
    public function isAdmin()

    {
        return in_array($this->email,[
            'wanyama@gmail.com',
            'kvnwanya@gmail.com',
            '17g01acs054@anu.ac.ke',
        ]); 
    }

}
