<?php

namespace App\Http\Controllers;

use App\UserType;
use Illuminate\Http\Request;

class UserTypesController extends Controller
{
    public function index(){
        $userTypes = UserType::all();
        return view('user_types.index', compact('userTypes'));
    }

    public function create(){
        return view('user_types.create');
    }

    
    public function show($userTypeId){
        $userType = UserType::find($userTypeId);
        return view('user_types.show', compact('userType'));
    }

    
    public function edit($userTypeId){
        $userType = UserType::find($userTypeId);
        return view('user_types.edit', compact('userType'));
    }

    
    public function store(){

        // Create a new UserType
        $userType = new UserType;
        $userType->name = request()->name;
        $userType->description = request()->description;
        $userType->save();

        return redirect('/user-types');
    }

    public function update(UserType $userType){
        $userType->name = request()->name;
        $userType->description = request()->description;
        $userType->save();

        return redirect('/user-types/'.$userType->id);
    }

    public function delete($userTypeId){
        $userType = UserType::find($userTypeId);
        return view('user_types.delete', compact('userType'));
    }

    public function destroy(UserType $userType){
        $userType->delete();
        return redirect('/user-types');
    }
}
