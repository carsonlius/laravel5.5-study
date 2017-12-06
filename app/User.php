<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use App\Events\UserSignUp;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    protected $dispatchesEvents = [
        'created' => UserSignUp::class
    ];

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

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function owns($class_mate)
    {

        // thsi->id 是当前登录账户的id
        return $this->id == $class_mate->user_id;
    }

    /*
    * string|collection $role
    *
    */
    public function hasRole($role)
    {
        // $this->roles和 $this->roles()的区别就是BelongsToMany对象和与当前登录用户相关联roles collection的区别
        if(is_string($role)) {
            return $this->roles->contains('name', $role);
        }
        
        return !!$role->intersect($this->roles)->count();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
