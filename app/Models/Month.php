<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;
    protected $table = 'months';

    protected $fillable = ['year_id', 'month', 'start_date', 'end_date', 'publish'];
}
