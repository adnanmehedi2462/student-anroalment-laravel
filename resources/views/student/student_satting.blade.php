@extends('student_layout')
 @section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Basic form elements</h2>
            <p class="alert-success">
                <?php
                
                $fool=Session::get('fool');
                if($fool){
                    
                    
                    echo $fool;
                    Session::put('fool',null);
                    
                }
                
                
                
                ?>
            </p>
            <form class="forms-sample" method="post" action="{{URL::to('/studentsupdate')}}" >
               {{csrf_field()}}
                
                <div class="form-group">
                    <label for="exampleInputPassword1"> student password</label>
                    <input type="password" class="form-control p-input" name="student_pass" value="{{$views->student_pass}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student phone</label>
                    <input type="number" class="form-control p-input" name="student_phone" value="{{$views->student_phone}}">
                </div>
        
               
          
                


                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
