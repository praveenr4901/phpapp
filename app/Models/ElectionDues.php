<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use Illuminate\Database\Eloquent\SoftDeletes;

class ElectionDues extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'election_dues';

    protected $fillable = ['member_id', 'amount', 'status'];

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
        $dues = ElectionDues::find($id);
        if ($dues) {
            $dues->delete();
            return true;
        }
        return false;
    }
}
