@extends('layout')
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
            <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
               {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">student name</label>
                    <input type="text" class="form-control p-input" required="required" name="student_name" placeholder="Enter name">

                </div>
                <!--    student rool-->
                <div class="form-group">
                    <label for="exampleInputEmail1">student rool</label>
                    <input type="number" class="form-control p-input" name="student_rool" placeholder="Enter rool">

                </div>
                <!--    student father-->
                <div class="form-group">
                    <label for="exampleInputEmail1">student father name</label>
                    <input type="text" class="form-control p-input" name="student_fathersname" placeholder="Enter father name">


                </div>
                <!--    student father-->
                <div class="form-group">
                    <label for="exampleInputEmail1">student mother name</label>
                    <input type="text" class="form-control p-input" name="student_mothersname" placeholder="Enter mother name">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student email</label>
                    <input type="email" class="form-control p-input" name="student_email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student password</label>
                    <input type="password" class="form-control p-input" name="student_pass" placeholder="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student phone</label>
                    <input type="number" class="form-control p-input" name="student_phone" placeholder="number">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student photo</label>
                    <input type="file" class="form-control p-input" name="student_image" placeholder="file">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student year</label>
                    <input type="text" class="form-control p-input" name="student_year" placeholder="year">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student address</label>
                    <input type="text" class="form-control p-input" name="student_address" placeholder="address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student admission year</label>
                    <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="admission">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> student depertment</label>
                <select name="student_depertment">
                    
                    <option value="cse">cse</option>
                    <option value="bba">bba</option>
                    <option value="ete">ete</option>
                    
                    
                </select>
                </div>
                


                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
