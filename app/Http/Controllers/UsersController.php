<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\UserType;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function create(){
        $userTypes = UserType::all();
        return view('users.create', compact('userTypes'));
    }

    
    public function show($userId){
        $user = User::find($userId);
        return view('users.show', compact('user'));
    }

    
    public function edit($userId){
        $userTypes = UserType::all();
        $user = User::find($userId);
        if(auth()->user()->id == $userId)
        {
            return view('users.edit', compact('user', 'userTypes'));
        } 
        else
        {
            return redirect('/users/'.$user->id);
        }
    }

    
    public function store(){

        // Create a new User
        $validated_fields = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'address' => 'required',
            'user_type_id' => 'required'
        ]);

        $user = User::create($validated_fields);

        return redirect('/login');
    }

    public function update(User $user){

        
        $validated_fields = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'address' => 'required',
            'user_type_id' => 'required'
        ]);

        if(auth()->user()->id == $user->id)
        {
            $user->update($validated_fields);
        }
        return redirect('/users/'.$user->id);
    }

    public function delete($userId){
        $user = User::find($userId);
        if(auth()->user()->id == $userId)
        {
            return view('users.delete', compact('user'));
        } 
        else
        {
            return redirect('/users/'.$user->id);
        }
    }

    public function destroy(User $user){
        if(auth()->user()->id == $user->id)
        {
            $user->delete();
        }
        return redirect('/users');
    }
}
