@extends('layout')
@section('content')

  <!-- partial -->
  

          <h1 class="page-title">Data table</h1>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>St_rool</th>
                          <th>St_name</th>
                          <th>St_phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Depertment</th>
                         
                        
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($bbainfo as $v_student)
                      <tr>
                          <td>{{$v_student->student_rool}}</td>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td><img src="{{URL::to($v_student->student_image)}}" hight="80" width="100" style="border-radius: 80%;"</td>
                          <td>{{$v_student->student_address}}</td>
                          <td>{{$v_student->student_depertment}}</td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
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