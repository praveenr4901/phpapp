<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;


class Profession extends Model
{
    use HasFactory;

    protected $table = 'professions';

    protected $fillable = ['name', 'is_active'];

    public function member() {
        return $this->belongsTo(Member::class);
    }
}
