<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Session;

Session_start();

class TeacherController extends Controller
{
    
    
    public function allteacher(Teacher $teacher)
    {
        $teacher = Teacher::all();
        return view('admin.all_teacher', ['teacher' => $teacher]);
    }
    public function addteacher()
    {
        return view('admin.add_teacher');
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
      
            $data = $request->validate([
                'teacher_name' => 'required',
                'teacher_phone' => 'required',
                'teacher_address' => 'required',
                'teacher_department' => 'required',
                'teacher_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        
            // Handle file upload if an image is provided
            if ($request->hasFile('teacher_image')) {
                $imagePath = $request->file('teacher_image')->store('teacher_images', 'public');
                $data['teacher_image'] = $imagePath;
            }
        
            if ($data) {
                $newTeacher = Teacher::create($data);
                Session::put('exception', 'Teacher Added Successfully');
        
                return redirect()->route('/addteacher');
            } else {
                Session::put('exception', 'Teacher Cannot be Added Successfully');
                return redirect()->route('/addteacher');
            }
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

       return redirect()->route('/allteacher')
                     ->with('success', 'Teacher deleted successfully');
    }
}
