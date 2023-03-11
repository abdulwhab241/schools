<?php

namespace App\Models;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_class',
        'grade_id'
    ];


    public function Grades()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }
}
