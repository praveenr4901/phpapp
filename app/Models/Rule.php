<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $table = 'rules';

    protected $fillable = [
        'part',
        'rule',
        'rule_id',
        'point',
        'status',
        'monthly',
        'yearly',
        'no_of_claims',
        'total_points',
    ];
}
