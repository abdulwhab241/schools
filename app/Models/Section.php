<?php

namespace App\Models;

use App\Models\Grade;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_section',
        'grade_id',
        'class_id',
    ];

    public function My_classes()
    {
        return $this->belongsTo(Classroom::class, 'class_id');
    }

    //   // علاقة الاقسام مع المعلمين
    // public function teachers()
    // {
    //     return $this->belongsToMany(Teacher::class,'teacher_section');
    // }

    public function Grades()
    {
        return $this->belongsTo(Grade::class,'grade_id');
    }
}
