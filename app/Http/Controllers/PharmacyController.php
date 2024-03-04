<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use App\Models\Addstudent;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    
    public function pharmacy()
    {
        $pharmacystudent = Addstudent::where('student_department', 'PHARMACY')->get();
        return view('admin.pharmacy', ['pharmacystudent' => $pharmacystudent]);
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
    public function show(Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pharmacy $pharmacy)
    {
        //
    }
}
