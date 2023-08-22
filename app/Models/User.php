<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use App\Models\UserRole;
use App\Models\Member;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'member_id',
        'mobile',
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

    public function setRole() {
        if (auth()->user()) {
            auth()->user()->assignRole('treasurer');
        }
    }

    public function member() {
        return $this->belongsTo(Member::class);
    }


     public function userRole()
     {
         return $this->hasOne(UserRole::class, 'member_id', 'member_id');
     }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    // public function hasRole($role)
    // {
    //     return $this->userRole->role->where('name', $role)->exists();
    // }

}
