<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'mobile',
        'address',
    ];
    protected $table = 'districts';

    public function region() {
        return $this->hasMany(Region::class);
    }
}
