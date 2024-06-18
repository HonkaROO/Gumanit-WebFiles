<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colleges extends Model
{
    use HasFactory;
    protected $table = 'colleges';
    protected $primaryKey = 'collid';
    protected $fillable = ['collfullname', 'collshortname'];

    public function departments()
    {
        return $this->hasMany(departments::class, 'deptcollid');
    }

    public function programs()
    {
        return $this->hasMany(programs::class, 'progcollid');
    }
}
