<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $primaryKey = 'deptid';
    protected $fillable = ['deptfullname', 'deptshortname', 'deptcollid'];

    public function college()
    {
        return $this->belongsTo(colleges::class, 'deptcollid');
    }

    public function programs()
    {
        return $this->hasMany(programs::class, 'progcolldeptid');
    }
}
