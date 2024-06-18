<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programs extends Model
{
    use HasFactory;

    protected $table = 'programs';
    protected $primaryKey = 'progid';
    protected $fillable = ['progfullname', 'progshortname', 'progcollid', 'progcolldeptid'];

    public function college()
    {
        return $this->belongsTo(colleges::class, 'progcollid');
    }

    public function department()
    {
        return $this->belongsTo(departments::class, 'progcolldeptid');
    }
}
