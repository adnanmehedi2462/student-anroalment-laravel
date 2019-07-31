@extends('layout') @section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Basic form elements</h2>
             
            <form class="forms-sample" method="post" action="{{URL::to('/update_teacher',$edit_one->teacher_id)}}" >
               {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">teacher_name</label>
                    <input type="text" class="form-control p-input" required="required" name="teacher_name"value="{{$edit_one->teacher_name}}">

                </div>
                <!--    student rool-->
             
                <!--    student father-->
             
                <div class="form-group">
                    <label for="exampleInputPassword1"> teacher phone </label>
                    <input type="number" class="form-control p-input" name="teacher_phone" value="{{$edit_one->teacher_phone}}">
                </div>
            
             
                <div class="form-group">
                    <label for="exampleInputPassword1"> student address</label>
                    <input type="text" class="form-control p-input" name="teacher_address" value="{{$edit_one->teacher_address}}">
                </div>
               
          
                


                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
