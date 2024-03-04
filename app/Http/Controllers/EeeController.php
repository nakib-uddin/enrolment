<?php

namespace App\Http\Controllers;

use App\Models\Eee;
use App\Models\Addstudent;
use Illuminate\Http\Request;

class EeeController extends Controller
{
   
    public function eee()
    {
        $eeetudent = Addstudent::where('student_department', 'EEE')->get();
        return view('admin.eee', ['eeetudent' => $eeetudent]);
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
    public function show(Eee $eee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eee $eee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eee $eee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eee $eee)
    {
        //
    }
}
