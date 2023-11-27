<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruiter;
use App\Http\Requests\RecruiterRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RecruiterController extends Controller
{
    public function Recruiter (): View{

        $recruiters = Recruiter::all();
        return view("recruiter.index", compact("recruiters"));
    }
    
    public function Create(): View{
        return view('recruiter.create');
    }

    public function Store(RecruiterRequest $request): RedirectResponse{

        $recruiter = new Recruiter();
        $recruiter->user_id = $request->input('user_id');
        $recruiter->admission_date = $request->input('admission_date');
        $recruiter->save(); 

        return redirect()->route('recruiter');
    }

    public function Edit (Recruiter $recruiter): View{
        return view('recruiter.edit', compact('recruiter'));
    }


    public function Update(RecruiterRequest $request, Recruiter $recruiter): RedirectResponse{
        
        $recruiter->update($request->all()); 
        return redirect()->route('recruiter');
    }

    public function Show(Recruiter $recruiter): View{
        return view ('recruiter.show', compact('recruiter'));
    }

    public function Destroy (RecruiterRequest $request, Recruiter $recruiter): RedirectResponse{ 
        $recruiter->delete();
        return redirect()->route('recruiter');
    }
}
