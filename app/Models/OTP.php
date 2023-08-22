<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTP extends Model
{
    use HasFactory;

    protected $table = 'report_login_otp';

    protected $fillable = [
        'phone_number',
        'otp',
        'member_id',
    ];
}
