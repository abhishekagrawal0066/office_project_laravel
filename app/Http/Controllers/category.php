<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\categoryAdd;
use App\Models\categorys;

class category extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = categorys::all();
        // return view('collage/admin/category/list');
        return view('collage/admin/category/list', compact('categorys'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collage/admin/category/add')->with('updates', new categorys());;;
        // return view('createUser')->with('updates', new Student());;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(categoryAdd $request)
    {
        $allData = $request->all();
        $result = categorys::updateOrCreate(['id' => $request->get('id')], $allData);
        return   back()->with('success', 'Category created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categorys  $id)
    {
        $category = categorys::find($id);
        return view('collage/admin/category/add')->with('updates', $category);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        categorys::find($id)->delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
