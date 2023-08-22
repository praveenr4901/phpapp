<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    protected $fillable = [
        'desig',
        'description',
        'status'
    ];
    protected $table = 'designations';

    /**
     * Method deleteRecord
     *
     * @param $id designation id
     *
     * @return void
     */
    public function deleteRecord($id)
    {
        $desig = Designation::find($id);
        if ($desig) {
            $desig->delete();
            return true;
        }
        return false;
    }
}
