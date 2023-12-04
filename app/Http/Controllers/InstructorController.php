<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Http\Requests\InstructorRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class InstructorController extends Controller
{
    public function Instructor (): View{

        $instructors = Instructor::all();
        return view("instructor.index", compact("instructors"));
    }
    
    public function Create(): View{
        return view('instructor.create');
    }

    public function Store(InstructorRequest $request): RedirectResponse{

        $instructor = new Instructor();
        $instructor->user_id = $request->input('user_id');
        $instructor->profession = $request->input('profession');
        $instructor->speciality = $request->input('speciality');
        $instructor->save(); 

        return redirect()->route('instructor');
    }

    public function Edit (Instructor $instructor): View{
        return view('instructor.edit', compact('instructor'));
    }


    public function Update(Request $request, Instructor $instructor): RedirectResponse{
        
        $instructor->update($request->all()); 
        return redirect()->route('instructor');
    }

    public function Show(Instructor $instructor): View{
        return view ('instructor.show', compact('instructor'));
    }

    public function Destroy (Request $request, Instructor $instructor): RedirectResponse{ 

        $instructor->delete();
        return redirect()->route('instructor');
    }
}
