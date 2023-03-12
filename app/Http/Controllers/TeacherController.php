<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;
use App\Repository\TeacherRepositoryInterFace;



class TeacherController extends Controller
{
    protected $Teacher;
    public function __construct(TeacherRepositoryInterFace $Teacher)
    {
        $this->Teacher = $Teacher;
    }

    public function index()
    {
        $Teachers = $this->Teacher->getAllTeachers();
        return view('pages.Teachers.index', compact('Teachers'));
    }

    public function create()
    {
        $specializations = $this->Teacher->GetSpecializations();
        $genders = $this->Teacher->GetGender();
        return view('pages.Teachers.create', compact('specializations','genders'));
    }

    public function store(TeacherRequest $request)
    {
        return $this->Teacher->storeTeachers($request);
    }

    public function edit($id)
    {
        $Teachers = $this->Teacher->editTeachers($id);
        $specializations = $this->Teacher->GetSpecializations();
        $genders = $this->Teacher->GetGender();
        return view('pages.Teachers.edit', compact('specializations','genders','Teachers'));
    }

    public function update(Request $request)
    {
        return $this->Teacher->updateTeachers($request);
    }

    public function destroy(Request $request)
    {
        return $this->Teacher->deleteTeachers($request);
    }
}
