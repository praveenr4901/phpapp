<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputType extends Model
{
    use HasFactory;

    protected $table = 'input_types';

    protected $fillable = ['type'];

    public function ruleInputs()
    {
        return $this->hasMany(RuleInput::class);
    }
}
