<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;
use App\Models\Zone;

class Region extends Model
{
    use HasFactory;
    protected $fillable = [
        'district_id',
        'region',
        'region_chairperson',
        'is_active',
    ];
    protected $table = 'regions';

    public function district() {
        return $this->belongsTo(District::class);
    }

    public function zone() {
        return $this->hasMany(Zone::class);
    }


}
