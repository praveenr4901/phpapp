<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Role;
use App\Models\Member;
use App\Models\Designation;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'user_roles';

    protected $fillable = ['member_id', 'role_id', 'designation_id'];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'member_id', 'member_id');
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
}
