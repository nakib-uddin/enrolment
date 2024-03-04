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
    public function update(Request $request, Addstudent $allstudent)
    {
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
            'student_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // if ($request->hasFile('student_image')) {
        //     $imagePath = $request->file('student_image')->store('student_images', 'public');
        //     $data['student_image'] = $imagePath;
        // }
    
        // Update other fields
         Addstudent::where('id', $allstudent->id)->update($data);
        // Redirect with a success message
        return redirect()->route('/allstudent', ['allstudent' => $allstudent->id])->with('success', 'Student information updated successfully');
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
