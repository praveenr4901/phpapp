<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;
    const PendingApproval = '0';
    const FirstApproval = '1';
    const SecondApproval = '2';
    const PartialApproval = '3';
    const Declined = '4';

    protected $fillable = [
        'rule_id',
        'member_id',
        'club_id',
        'year_id',
        'month_id',
        'data',
        'fa',
        'sa',
        'sns',
        'claimed_point',
        'fa_point',
        'sa_point',
        'claimed_date',
        'fa_time',
        'sa_time',
        'status',
        'publish',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id', 'clubid');
    }

    public function rule()
    {
        return $this->belongsTo(Rule::class, 'rule_id', 'id');
    }
}
