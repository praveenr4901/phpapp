<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuleApproval extends Model
{
    use HasFactory;

    protected $table = 'rule_approval';


    protected $fillable = ['rule_id', 'first_approval', 'second_approval'];
}
