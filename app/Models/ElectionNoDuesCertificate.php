<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionNoDuesCertificate extends Model
{
    use HasFactory;

    protected $table = 'election_nodues_certificate';

    protected $fillable = ['member_id', 'serial', 'club_id'];

    public function member() {
        return $this->belongsTo(Member::class);
    }
}
