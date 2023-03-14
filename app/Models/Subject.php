<?php

namespace App\Models;

use App\Models\Grade;
use App\Models\Teacher;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name','degree','grade_id','classroom_id','teacher_id'];


    // جلب اسم المراحل الدراسية

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    // جلب اسم الصفوف الدراسية
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    // جلب اسم المعلم
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
