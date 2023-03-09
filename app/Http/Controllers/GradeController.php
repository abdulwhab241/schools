<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Requests\GradeRequest;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('pages.Grades.index', compact('grades'));
    }

    public function store(GradeRequest $request)
    {
        try
        {
            $validated = $request->validated();
            $Grade = new Grade();
            $Grade->name = $request->Name;
            $Grade->notes = $request->Notes;
            $Grade->save();
            // toastr()->success(trans('main_trans.success'));
            return redirect()->route('Grades.index');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(GradeRequest $request)
    {
        try
        {
            $validated = $request->validated();
            $Grade = Grade::findOrFail($request->id);
            $Grade->update([
                $Grade->name = $request->Name,
                $Grade->notes = $request->Notes,
            ]);
            // toastr()->success(trans('main_trans.update'));
            return redirect()->route('Grades.index');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        // $Grade = Grade::findOrFail($request->id)->delete(); 
        // toastr()->warning(trans('main_trans.delete'));
        // return redirect()->route('Grades.index');
    $MyClass_id = Classroom::where('grade_id',$request->id)->pluck('grade_id');

    if($MyClass_id->count() == 0){

        $Grades = Grade::findOrFail($request->id)->delete();
        // toastr()->error(trans('main_trans.delete'));
        return redirect()->route('Grades.index');
    }

    else{

        // toastr()->error(trans('main_trans.delete_Grade_Error'));
        return redirect()->route('Grades.index');
    }
}
    
}
