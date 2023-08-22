<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zone;
use App\Models\Member;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'zone_id',
        'club_id',
        'name',
        'rcount',
        'fcount',
        'president',
        'secretary',
        'treasurer',
        'is_active'
    ];
    protected $table = 'clubs';

    public function zone() {
        return $this->belongsTo(Zone::class);
    }

    public function member() {
        return $this->belongsTo(Member::class);
    }

    public function elctionClub() {
        return $this->hasOne(ElectionClubs::class,'clubid');
    }
    
}
