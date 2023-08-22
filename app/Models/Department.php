<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
    ];

    protected $table = 'help_departments';

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'help_department_id');
    }
}
