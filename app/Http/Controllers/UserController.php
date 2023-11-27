<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Role;

class UserController extends Controller
{
    public function User (){

        $users = User::all();
        return view("user.index", ["users"=> $users]);
    }
    
    public function Create(){

        $roles = Role::all();
        return view('/user/create',['roles'=> $roles]);
    }

    public function Store(UserRequest $request){

        $user = new User();
        $user->role_id = $request->input('role_id');
        $user->doc_type = $request->input('doc_type');
        $user->doc_num = $request->input('doc_num');
        $user->name = strtoupper($request->name);
        $user->last_name = strtoupper($request->last_name);        
        $user->phone= $request->input('phone');
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('user');

        auth()->attempt($request->only('email', 'password'));
        return redirect()->back()->with('mensaje',  'Usuario creado correctamente...');

    }

    public function Edit (User $user){
        return view('user.edit', compact('user'));
    }

    public function Update(UserRequest $request, User $user){
        
        $user->update($request->all()); 
        return redirect()->route('user');
    }

    public function Show(User $user){
        return view ('user.show', compact('user'));
    }

    public function Destroy (UserRequest $request, User $user){ 
        $user->delete();
        return redirect()->route('user');
    }
}
