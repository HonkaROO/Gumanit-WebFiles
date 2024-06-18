<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'studid';
    protected $fillable = ['studfirstname', 'studlastname', 'studmidname', 'studprogid', 'studcollid', 'studyear'];

    public function program()
    {
        return $this->belongsTo(programs::class, 'studprogid');
    }

    public function college()
    {
        return $this->belongsTo(colleges::class, 'studcollid');
    }
}
