<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','status','identification_code'];
    protected $with = ['roles','profile'];

//    protected $appends = ['user_role'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function profile()
    {

        return $this->hasOne('App\Models\Profile');

    }

        public function getStatusAttribute($value){
        if($value == true){
            return 'Active';
        }else {
            return 'Disabled';
        }
    }

        public function role(){
            return $this->getRoles()->first()->name;
    }

}
