@extends('layout')
 @section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Basic form elements</h2>
             
            <form class="forms-sample" method="post" action="{{URL::to('/update_student',$edit_one->student_id)}}" >
               {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">student name</label>
                    <input type="text" class="form-control p-input" required="required" name="student_name"value="{{$edit_one->student_name}}">

                </div>
                <!--    student rool-->
                <div class="form-group">
                    <label for="exampleInputEmail1">student rool</label>
                    <input type="number" class="form-control p-input" name="student_rool"value="{{$edit_one->student_rool}}">

                </div>
                <!--    student father-->
                <div class="form-group">
                    <label for="exampleInputEmail1">student father name</label>
                    <input type="text" class="form-control p-input" name="student_fathersname" value="{{$edit_one->student_fathersname}}">


                </div>
                <!--    student father-->
                <div class="form-group">
                    <label for="exampleInputEmail1">student mother name</label>
                    <input type="text" class="form-control p-input" name="student_mothersname" value="{{$edit_one->student_mothersname}}">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student email</label>
                    <input type="email" class="form-control p-input" name="student_email" value="{{$edit_one->student_email}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student password</label>
                    <input type="password" class="form-control p-input" name="student_pass" value="{{$edit_one->student_pass}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student phone</label>
                    <input type="number" class="form-control p-input" name="student_phone" value="{{$edit_one->student_phone}}">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputPassword1"> student year</label>
                    <input type="text" class="form-control p-input" name="student_year" value="{{$edit_one->student_year}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student address</label>
                    <input type="text" class="form-control p-input" name="student_address" value="{{$edit_one->student_address}}">
                </div>
               
          
                


                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
