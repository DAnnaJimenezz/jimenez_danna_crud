<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Http\Requests\CandidateRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CandidateController extends Controller
{
    public function Candidate (): View{

        $candidates = Candidate::all();
        return view("candidate.index", compact("candidates"));
    }
    
    public function Create(): View{
        return view('candidate.create');
    }

    public function Store(CandidateRequest $request): RedirectResponse{
        
        $candidate = new Candidate();
        $candidate->user_id = $request->input('user_id');
        $candidate->selection_status = $request->input('selection_status');
        $candidate->points = $request->input('points');
        $candidate->save();

        return redirect()->route('candidate');
    }

    public function Edit (Candidate $candidate): View{
        return view('candidate.edit', compact('candidate'));
    }


    public function Update(Request $request, Candidate $candidate): RedirectResponse{
        
        $candidate->update($request->all()); 
        return redirect()->route('candidate');
    }

    public function Show(Candidate $candidate) :View{
        return view ('candidate.show', compact('candidate'));
    }

    public function Destroy (Request $request, Candidate $candidate): RedirectResponse{ 
        $candidate->delete();
        return redirect()->route('candidate');
    }
}
