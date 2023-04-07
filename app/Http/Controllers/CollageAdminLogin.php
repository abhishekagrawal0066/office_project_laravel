<?php

namespace App\Http\Controllers;
use App\Http\Requests\adminLogin as AdminRequest;
use App\Models\adminlogin;
use Illuminate\Http\Request;
use Auth;
use Hash;

class CollageAdminLogin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('collage/admin/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        $allData = $request->all();

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // return redirect({{route}}'dashboard'));
            return redirect(('collage/admin/dashboard'));
        }else{
            return back()->with('error', 'Wrong Login Details');
        }
    }
    public function dashboard()
    {
        if(Auth::guard('admin')){
            return view('collage/admin/dashboard');
        }
        return view('collage/admin/login');
    }
    
    public function logout(Request $request) {
        // echo '<br>Abhi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($request);echo '</pre>'; die();
        Auth::logout();
        // dd
        return redirect()->route('login');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
