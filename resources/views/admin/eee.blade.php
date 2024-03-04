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
                    @foreach($eeetudent as $eeetudent)
                      <tr>
                        <td>
                        <img src="{{ asset('storage/' . $eeetudent->student_image) }}" height="80" width="90" style="border-radius: 50%;" alt="Student Image">
                      </td>
                          <td>{{ $eeetudent->student_roll }}</td>
                          <td>{{ $eeetudent->student_name }}</td>
                          <td>{{ $eeetudent->student_fathername }}</td>
                          <td>{{ $eeetudent->student_mothername }}</td>
                          <td>{{ $eeetudent->student_phone }}</td>
                          <td>{{ $eeetudent->student_department }}</td>
                          <td>{{ $eeetudent->student_address }}</td>
                          <td>{{ $eeetudent->student_year }}</td>
                        
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