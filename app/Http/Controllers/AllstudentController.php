<?php

namespace App\Http\Controllers;

use App\Models\Allstudent;
use Illuminate\Http\Request;

class AllstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allstudent()
    {
        return view('admin.allstudent');
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
    public function show(Allstudent $allstudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Allstudent $allstudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Allstudent $allstudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Allstudent $allstudent)
    {
        //
    }
}
