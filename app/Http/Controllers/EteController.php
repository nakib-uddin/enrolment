<?php

namespace App\Http\Controllers;

use App\Models\Ete;
use App\Models\Addstudent;
use Illuminate\Http\Request;

class EteController extends Controller
{
    
    public function ete()
    {
        $etestudent = Addstudent::where('student_department', 'ETE')->get();
        return view('admin.ete', ['etestudent' => $etestudent]);
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
    public function show(Ete $ete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ete $ete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ete $ete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ete $ete)
    {
        //
    }
}
