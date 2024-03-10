<?php

namespace App\Http\Controllers;

use App\Models\Allstudent;
use App\Models\Addstudent;
use Illuminate\Http\Request;

class AllstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allstudent()
    {
        $allstudent = Addstudent::all();
        return view('admin.allstudent', ['allstudent' => $allstudent]);
      
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
    public function studentview($allstudent)
    {
        $allstudent = Addstudent::where('id', $allstudent)->first();
    
        if (!$allstudent) {
            // Handle the case when the student with the given ID is not found
            abort(404);
        }
    
        return view('admin.studentview', ['allstudent' => $allstudent]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function studentedit(Addstudent $allstudent)
    {   
        return view('admin.studentedit', compact('allstudent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function studentupdate(Request $request, Addstudent $allstudent)
{
     // Find the student by ID
    $data = $request->validate([
        'student_name' => 'required',
        'student_roll' => 'required',
        'student_fathername' => 'required',
        'student_mothername' => 'required',
        'student_email' => 'required|email|unique:students,student_email,' . $allstudent->id,
        'student_phone' => 'required',
        'student_department' => 'required',
        'student_address' => 'required',
        'student_year' => 'required',
        'student_password' => 'required',
        
    ]);

    // Handle file upload if an image is provided
   
    // Update other fields
    $allstudent->update($data);

    // Redirect with a success message
    return redirect()->route('/allstudent')->with('success', 'Student information updated successfully');
    // return $request->student_department;
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Addstudent $allstudent)
    {
        $allstudent->delete();
        return redirect(url('/allstudent'))->with('success', 'Student deleted successfully');
    }
}
