@extends('layout')

@section('content')

<div class="card">
    <div class="card-body">
        <h2 class="card-title">Teacher Data Table</h2>
        <div class="row">
            <div class="col-12">
                <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Teacher Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teacher as $teacher)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $teacher->teacher_image) }}" height="80" width="90" style="border-radius: 50%;" alt="Teacher Image">
                            </td>
                            <td>{{ $teacher->teacher_name }}</td>
                            <td>{{ $teacher->teacher_phone }}</td>
                            <td>{{ $teacher->teacher_address }}</td>
                            <td>{{ $teacher->teacher_department }}</td>
                            <td>
          
                                <form action="{{ URL::to('/teacher_destroy', ['teacher' => $teacher->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this teacher?')">
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
