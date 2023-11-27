<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function Candidate (){

        $candidates = Candidate::all();
        return view("candidate.index", compact("candidates"));
    }
    
    public function Create(){
        return view('candidate.create');
    }

    public function Store(Request $request){
        
        $candidate = new Candidate();
        $candidate->user_id = $request->input('user_id');
        $candidate->selection_status = $request->input('selection_status');
        $candidate->points = $request->input('points');
        $candidate->save();

        return redirect()->route('candidate');
    }

    public function Edit (Candidate $candidate){
        return view('candidate.edit', compact('candidate'));
    }


    public function Update(Request $request, Candidate $candidate){
        
        $candidate->update($request->all()); 
        return redirect()->route('candidate');
    }

    public function Show(User $user){
        return view ('candidate.show', compact('candidate'));
    }

    public function Destroy (Request $request, Candidate $candidate){ 
        $candidate->delete();
        return redirect()->route('candidate');
    }
}
