<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserLogin extends Controller
{
    public function index(){
        return view('user_login');
    }

    public function create()
    {
        // dd('create');
    }
    // public function store(UserRequest $request){
    //     dd("weqwew");
    //     $input = $request->all();
    //     // $user = 
    //     // return back()->with('success', 'User created successfully.');

    // }

    public function store(UserRequest $request){
        $input = $request->all();
        // dd($input);
        // $user = User::create($input);
      
        return back()->with('success', 'User created successfully.');
    }
}
