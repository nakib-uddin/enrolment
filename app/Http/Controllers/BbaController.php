<?php

namespace App\Http\Controllers;

use App\Models\Bba;
use App\Models\Addstudent;
use Illuminate\Http\Request;

class BbaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function bba()
    {
        $bbatudent = Addstudent::where('student_department', 'BBA')->get();
        return view('admin.bba', ['bbatudent' => $bbatudent]);
    }
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
    public function show(Bba $bba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bba $bba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bba $bba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bba $bba)
    {
        //
    }
}
