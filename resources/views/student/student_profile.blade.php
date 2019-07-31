@extends('layout');
@section('content')

          <h1 class="page-title">User Profile</h1>
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($views_one->student_image)}}" hight="80" width="100" style="border-radius: 80%;" alt="NOT FIND">
                                        

                  <p class="name">{{$views_one->student_name}}</p>
                  <p class="designation">{{$views_one->student_depertment}}</p>
                  <a class="email" href="#">{{$views_one->student_email}}</a>
                  <a class="number" href="#">{{$views_one->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-12">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p><h2><b style="color:green">{{$views_one->student_name}}</b>  All information under valow...!!</h2></p>
                  </div>
                  <div class="info-links">
                  <h2>Father,s Name:-{{$views_one->student_fathersname}}</h2>
                  <h2>Mother,s Name:-{{$views_one->student_mothersname}}</h2>
                  <h2>Student,s Address:-{{$views_one->student_address}}</h2>
                  <h2>Student,s Year:-{{$views_one->student_year}}</h2>
                  <h2>Student,s Admission Year:-{{$views_one->student_admissionyear}}</h2>
                  <h2>Student,s Phone:-{{$views_one->student_phone}}</h2>
                  <h2>Student,s Department:-{{$views_one->student_depertment}}</h2>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        
@endsection