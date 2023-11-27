<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests\RoleRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RoleController extends Controller
{
    public function Role (): View{

        $roles = Role::all();
        return view("role.index" ,compact("roles"));
    }
    
    public function Create(): View{
        return view('role.create');
    }

    public function Store(RoleRequest $request): RedirectResponse{
        
        Role::create($request->all());
        return redirect()->route('role');
    }

    public function Edit (Role $role): View{
        return view('role.edit', compact('role'));
    }


    public function Update(RoleRequest $request, Role $role): RedirectResponse{
        
        $role->update($request->all()); 
        return redirect()->route('role');
    }

    public function Show(Role $role): View{
        return view ('role.show', compact('role'));
    }

    public function Destroy (RoleRequest $request, Role $role): RedirectResponse{ 
        $role->delete();
        return redirect()->route('role');
    }
}
