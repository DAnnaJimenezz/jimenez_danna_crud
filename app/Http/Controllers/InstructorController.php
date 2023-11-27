<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function Instructor (){

        $instructors = Instructor::all();
        return view("instructor.index", compact("instructors"));
    }
    
    public function Create(){
        return view('instructor.create');
    }

    public function Store(Request $request){

        $instructor = new Instructor();
        $instructor->user_id = $request->input('user_id');
        $instructor->profession = $request->input('profession');
        $instructor->speciality = $request->input('speciality');
        $instructor->save(); 

        return redirect()->route('instructor');
    }

    public function Edit (Instructor $instructor){
        return view('instructor.edit', compact('instructor'));
    }


    public function Update(Request $request, Instructor $instructor){
        
        $instructor->update($request->all()); 
        return redirect()->route('instructor');
    }

    public function Show(Instructor $instructor){
        return view ('instructor.show', compact('instructor'));
    }

    public function Destroy (Request $request, Instructor $instructor){ 
        $instructor->delete();
        return redirect()->route('instructor');
    }
}
