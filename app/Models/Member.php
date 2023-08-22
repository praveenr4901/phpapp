<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profession;
use App\Models\User;
use App\Models\ElectionDues;
use App\Models\Club;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = ['clubid', 'id','email','phone','','name', 'gender', 'spouse', 'address', 'whatsapp', 'dob', 'anniversary', 'profession', 'specialization','mobile','joindate'];

    public function profession()
    {
        return $this->hasOne(Profession::class, 'profession');
    }

    public function user() {
        return $this->hasOne(User::class);
    }

    public function dues() {
        return $this->hasOne(ElectionDues::class);
    }

    public function club() {
        return $this->hasOne(Club::class, 'clubid','clubid');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function nodues() {
        return $this->hasOne(ElectionNoDues::class);
    }

    public function noduesCertificate() {
        return $this->hasOne(ElectionNoDuesCertificate::class);
    }
    
    public function userRole()
    {
        return $this->hasOne(UserRole::class);
    }
}
