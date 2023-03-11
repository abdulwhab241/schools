<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Section;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Requests\SectionRequest;

class SectionController extends Controller
{
    public function index()
    {
        // $TeacherWithSection = Teacher::with(['SectionsWith'])->get();
        $Grades = Grade::with(['Sections'])->get();

        $list_Grades = Grade::all();
        // $teachers = Teacher::all();
    
        return view('pages.Sections.index',compact('Grades','list_Grades'));
    }

    public function store(SectionRequest $request)
    {
        try {

            $validated = $request->validated();
            $Sections = new Section();
    
            $Sections->name_section = $request->Name_Section;
            $Sections->grade_id = $request->Grade_id;
            $Sections->class_id = $request->Class_id;
            $Sections->save();
            // $Sections->teachers()->attach($request->teacher_id);
            toastr()->success(trans('main_trans.success'));
    
            return redirect()->route('Sections.index');
        }
    
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(SectionRequest $request)
    {
        
    try {
        $validated = $request->validated();
        $Sections = Section::findOrFail($request->id);

        $Sections->name_section = $request->Name_Section;
        $Sections->grade_id = $request->Grade_id;
        $Sections->class_id = $request->Class_id;

        // $Sections->update([
        //     $Sections->Name_Section = $request->Name_Section,
        //     $Sections->Grade_id = $request->Grade_id,
        //     $Sections->Class_id = $request->Class_id,
        // ]);

        // if(isset($request->Status)) {
        //     $Sections->Status = 1;
        // } else {
        //     $Sections->Status = 2;
        // }


        //    // update pivot tABLE
        // if (isset($request->teacher_id)) {
        //     $Sections->teachers()->sync($request->teacher_id);
        // } else {
        //     $Sections->teachers()->sync(array());
        // }

        $Sections->save();
        toastr()->success(trans('main_trans.update'));

        return redirect()->route('Sections.index');
    }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

    }

    public function destroy(Request $request)
    {
        Section::findOrFail($request->id)->delete();
        toastr()->error(trans('main_trans.delete'));
        return redirect()->route('Sections.index');
    }

    public function get_classes($id)
    {
        $list_classes = Classroom::where("grade_id", $id)->pluck("name_class", "id");

        return $list_classes;
    }
    

}
