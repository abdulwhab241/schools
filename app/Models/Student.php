<?php

namespace App\Models;

use App\Models\Grade;
use App\Models\Image;
use App\Models\Gender;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $guarded=[];

      // علاقة بين الطلاب والانواع لجلب اسم النوع في جدول الطلاب

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    // علاقة بين الطلاب والمراحل الدراسية لجلب اسم المرحلة في جدول الطلاب

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }


    // علاقة بين الطلاب الصفوف الدراسية لجلب اسم الصف في جدول الطلاب

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    // // علاقة بين الطلاب الاقسام الدراسية لجلب اسم القسم  في جدول الطلاب

    // public function section()
    // {
    //     return $this->belongsTo(Section::class, 'section_id');
    // }

    // علاقة بين الطلاب والصور لجلب اسم الصور  في جدول الطلاب
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }


    // // علاقة بين الطلاب والاباء لجلب اسم الاب في جدول الاباء

    // public function myparent()
    // {
    //     return $this->belongsTo(My_Parent::class, 'parent_id');
    // }

    // // علاقة بين جدول سدادت الطلاب وجدول الطلاب لجلب اجمالي المدفوعات والمتبقي
    // public function student_account()
    // {
    //     return $this->hasMany(StudentAccount::class, 'student_id');
    // }

    //     // علاقة بين جدول الطلاب وجدول الحضور والغياب
    // public function attendance()
    // {
    //     return $this->hasMany(Attendance::class, 'student_id');
    // }

    // public function feeInvoice()
    // {
    //     return $this->belongsTo(FeeInvoice::class, 'student_id');
    // }
}
