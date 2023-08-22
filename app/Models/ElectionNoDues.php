<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ElectionNoDues extends Model
{
    use HasFactory, SoftDeletes; 

    protected $table = 'election_nodues';

    protected $fillable = ['member_id', 'type', 'status', 'valid'];

    public function member() {
        return $this->belongsTo(Member::class);
    }

    /**
     * Method deleteRecord
     *
     * @param $id dues id
     *
     * @return void
     */
    public function deleteRecord($id)
    {
        $dues = ElectionNoDues::find($id);
        if ($dues) {
            $dues->delete();
            return true;
        }
        return false;
    }
}
