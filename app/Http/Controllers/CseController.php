<?php

namespace App\Http\Controllers;

use App\Models\Cse;
use App\Models\Addstudent;
use Illuminate\Http\Request;

class CseController extends Controller
{

    public function cse()
    {

        $csestudent = Addstudent::where('student_department', 'CSE')->get();
        return view('admin.cse', ['csestudent' => $csestudent]);
        //return view('admin.cse');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cse $cse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cse $cse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cse $cse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cse $cse)
    {
        //
    }
}
