<?php

namespace App\Http\Controllers;

use App\Models\Tution;
use Illuminate\Http\Request;

class TutionController extends Controller
{
    
    public function tutionfee()
    {
        return view('admin.tutionfee');
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
    public function show(Tution $tution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tution $tution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tution $tution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tution $tution)
    {
        //
    }
}
