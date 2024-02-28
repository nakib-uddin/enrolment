<?php

namespace App\Http\Controllers;

use App\Models\Addstudent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Illuminate\Support\Facades\Session;

Session_start();
class AddstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addstudent()
    {
        return view('admin.addstudent');
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
         // Define the validation rules
      $data = [
        'student_id' => 'required|unique:students',
        'student_name' => 'required',
        'student_roll' => 'required',
        'student_fathername' => 'required',
        'student_mothername' => 'required',
        'student_email' => 'required|email|unique:students',
        'student_phone' => 'required',
        'student_department' => 'required',
        'student_address' => 'required',
        'student_year' => 'required',
        'student_password' => 'required',
        'student_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

         // Create a validator instance
      $validator = Validator::make($request->all(), $data);
      
      // Check if validation fails
      if ($validator->fails()) {
          return response()->json(['errors' => $validator->errors()], 422);
      }

        // Handle file upload if an image is provided
        if ($request->hasFile('student_image')) {
            $imagePath = $request->file('student_image')->store('student_images', 'public');
            $data['student_image'] = $imagePath;
        }
              // Continue with your logic if validation succeeds

        if($data){
            $newStudent = Addstudent::create($data);
            Session::put('exception','Student Added Succesfully');
            
            return redirect()->route('/addstudent');
         }
         else{
            Session::put('exception','Student Can not Added Succesfully');
             return redirect()->route('/addstudent');
         }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Addstudent $addstudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Addstudent $addstudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Addstudent $addstudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Addstudent $addstudent)
    {
        //
    }
}
