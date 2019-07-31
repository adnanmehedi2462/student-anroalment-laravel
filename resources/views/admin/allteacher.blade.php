
@extends('layout')
@section('content')

  <!-- partial -->
  

          <h1 class="page-title">Data table</h1>
    
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
                     <p class="alert-success">
              <?php
                
                $fool=Session::get('fool');
                if($fool){
                    
                    
                    echo $fool;
                    Session::put('fool',null);
                    
                }
                
                
                
                ?>
                </p>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                       
                          <th>TC_name</th>
                          <th>TC_phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Depertment</th>
                         
                        
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($allteacher_info as $v_teacher)
                      <tr>
                         
                          <td>{{$v_teacher->teacher_name}}</td>
                          <td>{{$v_teacher->teacher_phone}}</td>
                          <td><img src="{{URL::to($v_teacher->teacher_image)}}" hight="80" width="100" ></td>
                          <td>{{$v_teacher->teacher_address}}</td>
                          <td>{{$v_teacher->teacher_depertment}}</td>
                          
                          <td>
                           <a href="{{URL::to('/teacherview/'.$v_teacher->teacher_id)}}"><button class="btn btn-outline-primary">View</button></a>
                              <a href="{{URL::to('/editteacher/'.$v_teacher->teacher_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="{{URL::to('/delete_teacher/'.$v_teacher->teacher_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
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