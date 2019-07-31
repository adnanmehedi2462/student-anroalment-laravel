@extends('layout') @section('content')
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
            <form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1"> teacher name</label>
                    <input type="text" class="form-control p-input" required="required" name="teacher_name" placeholder="Enter name">

                </div>



                <div class="form-group">
                    <label for="exampleInputPassword1"> teacher phone</label>
                    <input type="number" class="form-control p-input" name="teacher_phone" placeholder="number">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> teacher photo</label>
                    <input type="file" class="form-control p-input" name="teacher_image" placeholder="file">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1"> teacher address</label>
                    <input type="text" class="form-control p-input" name="teacher_address" placeholder="address">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">  teacher depertment</label>
                    <select name="teacher_depertment">
                    
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
