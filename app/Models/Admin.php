<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    // use HasApiTokens, HasFactory, Notifiable;


    const ROLE_ADMIN = 0;
    const ROLE_AUTHOR = 1;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'position',
        'role',
        'created_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];


    public function getCustomRoles()
    {
        return $this->role == self::ROLE_ADMIN ? 'Admin' : 'Author';
    }

}
