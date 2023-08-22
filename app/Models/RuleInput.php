<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RuleInput extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rule_inputs';

    protected $fillable = [
        'label', 'type_id', 'rule_id', 'status'
    ];

    protected $dates = ['deleted_at'];

    public function inputType()
    {
        return $this->belongsTo(InputType::class, 'type_id');
    }
}
