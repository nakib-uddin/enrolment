@extends('layout')

@section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Teacher Registration Form</h2>
            <p class="alert-success">
              <?php
              $exception = session('exception');
              if ($exception) {
                  echo $exception;
                  session()->forget('exception');
              }
              ?>
            </p>
            <form action="{{URL::to('/save_teacher')}}" method="post" enctype="multipart/form-data" class="forms-sample">
                @csrf

               
                <div class="form-group">
                    <label for="teacherName">Teacher Name</label>
                    <input type="text" class="form-control p-input" id="teacherName" name="teacher_name" placeholder="Enter Teacher Name" required>
                </div>

                <div class="form-group">
                    <label for="teacherPhone">Phone</label>
                    <input type="text" class="form-control p-input" id="teacherPhone" name="teacher_phone" placeholder="Enter Phone" required>
                </div>

                <div class="form-group">
                    <label for="teacherAddress">Address</label>
                    <input type="text" class="form-control p-input" id="teacherAddress" name="teacher_address" placeholder="Enter Address" required>
                </div>

                <div class="form-group">
                    <label for="teacherDepartment">Department</label>
                    <select class="form-control p-input" id="teacherDepartment" name="teacher_department" required>
                        <option value="">Select Department</option>
                        <option value="CSE">CSE</option>
                        <option value="EEE">EEE</option>
                        <option value="ETE">ETE</option>
                        <option value="BBA">BBA</option>
                        <option value="PHARMACY">PHARMACY</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="teacherImage">Upload Teacher Image</label>
                    <div class="row">
                        <div class="col-12">
                            <label for="teacherImage" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                            <input type="file" class="form-control-file" id="teacherImage" name="teacher_image" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Upload a photo of the teacher.</small>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
