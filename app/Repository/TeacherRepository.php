<?php

namespace App\Repository;

use App\Models\Gender;
use App\Models\Teacher;
use App\Models\Specialization;
use Illuminate\Support\Facades\Hash;

class TeacherRepository implements TeacherRepositoryInterFace
{
    public function getAllTeachers()
    {
        return Teacher::all();
    }

    public function GetSpecializations()
    {
        return Specialization::all();
    }

    public function GetGender()
    {
        return Gender::all();
    }

    public function storeTeachers($request)
    {
        try {
            $Teachers = new Teacher();
    
            $Teachers->email = $request->Email;
            $Teachers->password =  Hash::make($request->Password);
            $Teachers->name = $request->Name;
            $Teachers->phone_number = $request->Phone_Number;
            $Teachers->specialization_id = $request->Specialization_id;
            $Teachers->gender_id = $request->Gender_id;
            $Teachers->joining_date = $request->Joining_Date;
            $Teachers->address = $request->Address;
            $Teachers->save();
            toastr()->success('تم حفظ المعلم بنجاح');
    
            return redirect()->route('Teachers.create');
        }
    
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function updateTeachers($request)
    {
        try {
            $Teachers = Teacher::findOrFail($request->id);
    
            // $Teachers->Email = $request->Email;
            $Teachers->email = $request->Email;
            $Teachers->password =  Hash::make($request->Password);
            $Teachers->name = $request->Name;
            $Teachers->phone_number = $request->Phone_Number;
            $Teachers->specialization_id = $request->Specialization_id;
            $Teachers->gender_id = $request->Gender_id;
            $Teachers->joining_date = $request->Joining_Date;
            $Teachers->address = $request->Address;
            $Teachers->save();
            toastr()->success('تم تعديل المعلم بنجاح');
    
            return redirect()->route('Teachers.index');
        }
    
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function editTeachers($id)
    {
        return Teacher::findOrFail($id);
    }

    public function deleteTeachers($request)
    {
        Teacher::findOrFail($request->id)->delete();
        toastr()->error('تم حذف المعلم بنجاح');
        return redirect()->route('Teachers.index');
    }

    
    
}




