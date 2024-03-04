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
                    @foreach($allstudent as $allstudent)
                      <tr>
                        <td>
                        <img src="{{ asset('storage/' . $allstudent->student_image) }}" height="80" width="90" style="border-radius: 50%;" alt="Student Image">
                      </td>
                          <td>{{ $allstudent->student_roll }}</td>
                          <td>{{ $allstudent->student_name }}</td>
                          <td>{{ $allstudent->student_fathername }}</td>
                          <td>{{ $allstudent->student_mothername }}</td>
                          <td>{{ $allstudent->student_phone }}</td>
                          <td>{{ $allstudent->student_department }}</td>
                          <td>{{ $allstudent->student_address }}</td>
                          <td>{{ $allstudent->student_year }}</td>
                        
                          <td>
                          <a href="{{ route('/studentview', ['allstudent' => $allstudent->id])}}">
                         <button class="btn btn-outline-primary">View</button>
                         </a>
                           <a href="{{ route('/studentedit', ['allstudent' => $allstudent->id])}}"> <button class="btn btn-outline-warning">Edit</button></a>
                          <form action="{{ route('/student_destroy', ['allstudent' => $allstudent->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this student?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>

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