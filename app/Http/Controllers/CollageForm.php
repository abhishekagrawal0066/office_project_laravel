<?php

namespace App\Http\Controllers;
use App\Models\CollageData;

use Illuminate\Http\Request;
use App\Http\Requests\CollageForms;

class CollageForm extends Controller
{
    public function index(){
        return view('collage');
    }
    public function store(CollageForms $request){
        $allData = $request->all();
        $result = CollageData::updateOrCreate(['id' => $request->get('id')], $allData);
        return   back()->with('success', 'User created successfully.');

    }
}
