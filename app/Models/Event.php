<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    use HasFactory;

    protected $fillable = [
        'date', 'rule', 'opendate', 'closedate', 'title', 'adate', 'cmars', 'ncmars', 'amcharge', 'agcharge', 'smcharge', 'sgcharge', 'alscharge', 'aleocharge', 'sleocharge', 'payment', 'qrcode', 'payaccount', 'type', 'others', 'status'
    ];
}
