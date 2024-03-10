@extends('layout')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Student Registration Form</h2> 
            <p class="alert-success">
              <?php
              $exception = session('exception');
              if ($exception) {
                  echo $exception;
                  session()->forget('exception'); // Use session()->forget to remove the session variable
              }
              ?>
          </p> 
            <form action="{{ route('/update_student', ['allstudent' => $allstudent->id]) }}" method="post" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="studentId">Student ID</label>
                    <input type="text" class="form-control p-input" id="studentId" name="student_id" placeholder="Enter Student Id" value="{{ $allstudent->student_id }}" readonly>
                </div>
                <div class="form-group">
                    <label for="studentName">Student Name</label>
                    <input type="text" class="form-control p-input" id="studentName" name="student_name" placeholder="Enter Student Name" value="{{ $allstudent->student_name }}">
                </div>
                <div class="form-group">
                    <label for="studentRoll">Student Roll</label>
                    <input type="text" class="form-control p-input" id="studentRoll" name="student_roll" placeholder="Enter Student Roll"  value="{{ $allstudent->student_roll}}">
                </div>
                <div class="form-group">
                    <label for="studentFatherName">Father's Name</label>
                    <input type="text" class="form-control p-input" id="studentFatherName" name="student_fathername" placeholder="Enter Father's Name"  value="{{ $allstudent->student_fathername }}">
                </div>
                <div class="form-group">
                    <label for="studentMotherName">Mother's Name</label>
                    <input type="text" class="form-control p-input" id="studentMotherName" name="student_mothername" placeholder="Enter Mother's Name" value="{{ $allstudent->student_mothername }}">
                </div>
                <div class="form-group">
                    <label for="studentEmail">Email address</label>
                    <input type="email" class="form-control p-input" id="studentEmail" name="student_email" placeholder="Enter Email"  value="{{ $allstudent->student_email }}">
                    <small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="studentPhone">Phone</label>
                    <input type="text" class="form-control p-input" id="studentPhone" name="student_phone" placeholder="Enter Phone"  value="{{ $allstudent->student_phone }}">
                </div>
                <div class="form-group">
    <label for="studentDepartment">Department</label>
    <select class="form-control p-input" id="studentDepartment" name="student_department" readonly>
    <option value="{{ $allstudent->student_department }}" selected>{{ $allstudent->student_department }}</option>
</select>
</div>
                <div class="form-group">
                    <label for="studentAddress">Address</label>
                    <input type="text" class="form-control p-input" id="studentAddress" name="student_address" placeholder="Enter Address" value="{{ $allstudent->student_address }}" readonly>
                </div>
                <div class="form-group">
                    <label for="studentYear">Admission Year</label>
                    <input type="date" class="form-control p-input" id="studentYear" name="student_year" placeholder="Enter Admission Year"  value="{{ $allstudent->student_year }}">
                </div>
                <div class="form-group">
                    <label for="studentPassword">Password</label>
                    <input type="password" class="form-control p-input" id="studentPassword" name="student_password" placeholder="Enter Password"  value="{{ $allstudent->student_password }}">
                </div>
               
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection