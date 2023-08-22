<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;
use App\Models\Club;

class Zone extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'name',
        'is_active',
    ];
    protected $table = 'zones';

    public function region() {
        return $this->belongsTo(Region::class);
    }

    public function club() {
        return $this->hasMany(Club::class);
    }
}
