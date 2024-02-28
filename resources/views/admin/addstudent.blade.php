@extends('layout')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Student Registration Form</h2>  
            <form action="{{URL::to('/save_student')}}" method="post" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="studentId">Student ID</label>
                    <input type="text" class="form-control p-input" id="studentId" name="student_name" placeholder="Enter Student Id" required>
                </div>
                <div class="form-group">
                    <label for="studentName">Student Name</label>
                    <input type="text" class="form-control p-input" id="studentName" name="student_name" placeholder="Enter Student Name" required>
                </div>
                <div class="form-group">
                    <label for="studentRoll">Student Roll</label>
                    <input type="text" class="form-control p-input" id="studentRoll" name="student_roll" placeholder="Enter Student Roll" required>
                </div>
                <div class="form-group">
                    <label for="studentFatherName">Father's Name</label>
                    <input type="text" class="form-control p-input" id="studentFatherName" name="student_fathername" placeholder="Enter Father's Name" required>
                </div>
                <div class="form-group">
                    <label for="studentMotherName">Mother's Name</label>
                    <input type="text" class="form-control p-input" id="studentMotherName" name="student_mothername" placeholder="Enter Mother's Name" required>
                </div>
                <div class="form-group">
                    <label for="studentEmail">Email address</label>
                    <input type="email" class="form-control p-input" id="studentEmail" name="student_email" placeholder="Enter Email" required>
                    <small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="studentPhone">Phone</label>
                    <input type="text" class="form-control p-input" id="studentPhone" name="student_phone" placeholder="Enter Phone" required>
                </div>
                <div class="form-group">
    <label for="studentDepartment">Department</label>
    <select class="form-control p-input" id="studentDepartment" name="student_department" required>
        <option value="">Select Department</option>
        <option value="1">CSE</option>
        <option value="2">EEE</option>
        <option value="3">ETE</option>
        <option value="4">BBA</option>
        <option value="5">PHARMACY</option>
        <!-- Add more options as needed -->
    </select>
</div>
                <div class="form-group">
                    <label for="studentAddress">Address</label>
                    <input type="text" class="form-control p-input" id="studentAddress" name="student_address" placeholder="Enter Address" required>
                </div>
                <div class="form-group">
                    <label for="studentYear">Admission Year</label>
                    <input type="date" class="form-control p-input" id="studentYear" name="student_year" placeholder="Enter Admission Year" required>
                </div>
                <div class="form-group">
                    <label for="studentPassword">Password</label>
                    <input type="password" class="form-control p-input" id="studentPassword" name="student_password" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <label>Upload Student Image</label>
                    <div class="row">
                        <div class="col-12">
                            <label for="studentImage" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                            <input type="file" class="form-control-file" id="studentImage" name="student_image" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Upload a photo of the student.</small>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection