<?php

namespace CodeNation;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// Use App/Traits/HasGravatar to display Gravatar Image
use CodeNation\Traits\HasGravatar;

class User extends Authenticatable
{
    use Notifiable;
    use HasGravatar; // App Traits HasGravatar to get gravatar image

    /**
     * override the hasgravatr traits gravatarEmail property
     * 
     * @var gravatarEmail
     */
    public function __construct() {
        $this->gravatarEmail = 'email';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verifyUser() {
        return $this->hasOne('CodeNation\verifyUser');
    }
}
