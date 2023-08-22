<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionClubs extends Model
{
    use HasFactory;

    protected $table = 'election_clubs';

    protected $fillable = ['clubid', 'count'];

    public function member() {
        return $this->belongsTo(Member::class);
    }
}
