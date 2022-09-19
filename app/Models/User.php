<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

use function PHPUnit\Framework\isNull;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'fullname',
        'DoB',
        'username',
        'email',
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
    ];

    //login
    public function login(String $user,String $pw){
        $user = DB::table('tblaccount')->where('username','=',$user)->where('password','=',$pw)->first();
        if(!is_null($user))
        {
            return True;
        }
            
        return False;
    }

    //register
    public function Register(String $name,String $email,String $user,String $pw){
        
        if(DB::table('tblaccount')->insert(
            ['MemberName' => $name,'email' => $email, 'username' => $user, 'password' => $pw]
        ))
            return True;
        return False;
    }
    public function getMem($user){
        $name = DB::table('tblaccount')->where('username','=',$user)->orwhere('idMember',$user)->get();
        return $name;
    }
}
