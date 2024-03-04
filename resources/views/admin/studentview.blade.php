@extends('layout')
@section('content')

 <!-- partial -->

          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
    <img src="{{ asset('storage/' . $allstudent->student_image) }}" height="80" width="90" style="border-radius: 50%;" alt="Student Image">
    <p class="name">{{ $allstudent->student_name }}</p>
    <p class="designation">- {{ $allstudent->student_roll }} -</p>
    <a class="email" href="mailto:{{ $allstudent->student_email }}">{{ $allstudent->student_email }}</a>
    <a class="number" href="tel:{{ $allstudent->student_phone }}">{{ $allstudent->student_phone }}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Fathers Name:</i>
                      <span style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15px;">{{ $allstudent->student_fathername }}</span>
                    </a>
                  
                      <a class="website">
                        <i class="icon-globe icon">Mothers Name:</i>
                        <span style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15px;">{{ $allstudent->student_mothername }}</span>
                      </a>
                      <a class="website">
                        <i class="icon-globe icon">Student Address:</i>
                        <span style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15px;">{{ $allstudent->student_address }}</span>
                      </a>
                      <a class="website">
                        <i class="icon-globe icon">Department</i>
                        <span style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15px;">{{ $allstudent->student_department }}</span>
                      </a>
                      <a class="website">
                        <i class="icon-globe icon">Admission Year</i>
                        <span style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15px;">{{$allstudent->student_year }}</span>
                      </a>
                     
                  </div>
                </div>
              </div>
            </div>
           
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        <!-- content-wrapper ends -->

@endsection