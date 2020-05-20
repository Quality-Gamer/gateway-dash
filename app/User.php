<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\RedisService;
use Illuminate\Cache\RedisStore;
use Illuminate\Support\Facades\Log;

class User extends Authenticatable
{
    use Notifiable;
    protected $userKey = "gt:us";
    protected $email = "email";
    protected $password = "password";
    public $redis_user_id;

    public static function login($email,$password){
        $id = md5($email . $password);
        $k = "gt:us". ":" . $id;
        $u = RedisService::redisExists($k);
        
        if($u) {
            $user = new User;
            $user->redis_user_id = $id;
            return $user;
        } 

        return null;
    }

    public function createUser($email,$password) {
        $id = md5($email . $password);
        $k = $this->userKey . ":" . $id;
        $p = password_hash($password,PASSWORD_DEFAULT);
        RedisService::redisHSet($k,$this->email,$email);
        RedisService::redisHSet($k,$this->password,$p);
    }   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
