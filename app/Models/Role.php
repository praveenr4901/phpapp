<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\UserRole;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = ['name', 'description', 'status'];

    public function userRoles()
    {
        return $this->hasOne(UserRole::class);
    }
}
