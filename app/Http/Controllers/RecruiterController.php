<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruiter;

class RecruiterController extends Controller
{
    public function Recruiter (){

        $recruiters = Recruiter::all();
        return view("recruiter.index", compact("recruiters"));
    }
    
    public function Create(){
        return view('recruiter.create');
    }

    public function Store(Request $request){

        $recruiter = new Recruiter();
        $recruiter->user_id = $request->input('user_id');
        $recruiter->admission_date = $request->input('admission_date');
        $recruiter->save(); 

        return redirect()->route('recruiter');
    }

    public function Edit (Recruiter $recruiter){
        return view('recruiter.edit', compact('recruiter'));
    }


    public function Update(Request $request, Recruiter $recruiter){
        
        $recruiter->update($request->all()); 
        return redirect()->route('recruiter');
    }

    public function Show(Recruiter $recruiter){
        return view ('recruiter.show', compact('recruiter'));
    }

    public function Destroy (Request $request, Recruiter $recruiter){ 
        $recruiter->delete();
        return redirect()->route('recruiter');
    }
}
