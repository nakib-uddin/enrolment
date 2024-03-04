@extends('layout')
@section('content')

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
            <tr>
                <th>Image</th>
                <th>Roll Number</th>
                <th>Student Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Address</th>
                <th>Year</th>
                <th>Actions</th>
                </tr>
                    </thead>
                    <tbody>
                    @foreach($bbatudent as $bbatudent)
                      <tr>
                        <td>
                        <img src="{{ asset('storage/' . $bbatudent->student_image) }}" height="80" width="90" style="border-radius: 50%;" alt="Student Image">
                      </td>
                          <td>{{ $bbatudent->student_roll }}</td>
                          <td>{{ $bbatudent->student_name }}</td>
                          <td>{{ $bbatudent->student_fathername }}</td>
                          <td>{{ $bbatudent->student_mothername }}</td>
                          <td>{{ $bbatudent->student_phone }}</td>
                          <td>{{ $bbatudent->student_department }}</td>
                          <td>{{ $bbatudent->student_address }}</td>
                          <td>{{ $bbatudent->student_year }}</td>
                        
                          <td>
                            <button  class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    

@endsection