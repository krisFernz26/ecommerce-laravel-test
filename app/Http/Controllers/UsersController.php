<?php

namespace App\Http\Controllers;

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
        $user = new User;
        $user->first_name = request()->first_name;
        $user->last_name = request()->last_name;
        $user->email = request()->email;
        $user->password = request()->password;
        $user->address = request()->address;
        $user->user_type_id = UserType::find(request()->user_type_id)->id;
        $user->save();

        return redirect('/users');
    }

    public function update(User $user){

        $user->first_name = request()->first_name;
        $user->last_name = request()->last_name;
        $user->email = request()->email;
        $user->password = request()->password;
        $user->address = request()->address;
        $user->user_type_id = UserType::find(request()->user_type_id)->id;
        $user->save();

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
