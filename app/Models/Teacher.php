<?php

namespace App\Models;

use App\Models\Gender;
use App\Models\Specialization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $genders = [];

    public function specializations()
    {
        return $this->belongsTo(Specialization::class,'specialization_id');
    }
    
    public function genders()
    {
        return $this->belongsTo(Gender::class,'gender_id');
    }

    // // علاقة المعلمين مع الاقسام
    // public function SectionsWith()
    // {
    //     return $this->belongsToMany(Section::class,'teacher_section');
    // }
}
