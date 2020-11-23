<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\UserType;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function signIn(){

        return view('users.sign_in');
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
        $user = User::find($userId);
        $userTypes = UserType::all();
        return view('users.edit', compact('user', 'userTypes'));
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

        return redirect('/users');
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

        $user = User::update($validated_fields);

        return redirect('/users/'.$user->id);
    }

    public function delete($userId){
        $user = User::find($userId);
        return view('users.delete', compact('user'));
    }

    public function destroy(User $user){
        $user->delete();
        return redirect('/users');
    }
}
