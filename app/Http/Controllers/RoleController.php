<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function Role (){

        $roles = Role::all();
        return view("role.index" ,compact("roles"));
    }
    
    public function Create(){
        return view('role.create');
    }

    public function Store(Request $request){
        
        Role::create($request->all());
        return redirect()->route('role');
    }

    public function Edit (Role $role){
        return view('role.edit', compact('role'));
    }


    public function Update(Request $request, Role $role){
        
        $role->update($request->all()); 
        return redirect()->route('role');
    }

    public function Show(Role $role){
        return view ('role.show', compact('role'));
    }

    public function Destroy (Request $request, Role $role){ 
        $role->delete();
        return redirect()->route('role');
    }
}
