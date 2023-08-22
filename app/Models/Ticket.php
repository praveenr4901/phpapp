<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Ticket
 * @package App\Models
 * @version July 17, 2023, 12:30 pm UTC
 *
 */
class Ticket extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tickets';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'member_id',
        'subject',
        'unique_id',
        'help_department_id',
        'message',
        'status',

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member_id' => 'integer',
        'subject' => 'string',
        'unique_id' => 'string',
        'help_department_id' => 'integer',
        'message' => 'string',
        'status' => 'integer'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'help_department_id');
    }
}
