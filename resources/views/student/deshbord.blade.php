@extends('student_layout')
@section('content')
<style>
/*

    s{
        
        text-align: center
    }
*/

</style>
       <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All student</h2>
                  @php
                  $student=DB::table('student_tbl')
                  ->count('student_id');
                  
                  @endphp
                  <p style="font-size:30px; text-align: center
">{{$student}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All teacher</h2>
                        @php
                  $teacher=DB::table('teacher_tbl')
                  ->count('teacher_id');
                  
                  @endphp
                <p style="font-size:30px; text-align: center
">{{$teacher}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Tution fee</h2>
                            <p style="font-size:30px; text-align: center
">3999tk mounth</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Revenue</h2>
                            <p style="font-size:30px; text-align: center
">16</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 revenue-card grid-margin d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h2 class="card-title">Website Traffic</h2>
                  <ul class="ct-legend mt-5"></ul>
                  <div id="dashboard-chartist-simple"></div>
                  <div class="row mx-1 mt-5 d-none d-sm-flex">
                    <div class="col-12">
                      <hr class="mt-1">
                    </div>
                    <div class="col-12 col-sm-4 revenue-details text-center text-sm-left">
                    
                      <p class="head text-muted">CSE</p>
                  
                      <p class="count">88877</p>
                    </div>
                    <div class="col-12 col-sm-4 d-flex justifiy-content-center flex-column text-center revenue-details">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                    <div class="col-12 col-sm-4 text-center text-sm-right revenue-details">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 stock-price grid-margin d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h2 class="card-title">Stock Price</h2>
                  <div class="amount-column-wrapper wrapper">
                    <p class="total-performance">$ 9856</p>
                    <div class="row">
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-up-thick text-success"></i>
                          <p class="progess mb-0">58.8%</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-up-thick text-success"></i>
                          <p class="progess mb-0">+32</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                      <div class="col-12"><hr></div>
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-down-thick text-danger"></i>
                          <p class="progess mb-0">18.2%</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-up-thick text-success"></i>
                          <p class="progess mb-0">+89</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 d-flex flex-row align-items-center mt-4">
                        <p class="mb-0 mr-3">Sources: </p>
                        <a href="#" class="btn btn-rounded bg-google btn-social mr-2"><i class="mdi mdi-google"></i></a>
                        <a href="#" class="btn btn-rounded bg-facebook btn-social mr-2"><i class="mdi mdi-facebook"></i></a>
                        <a href="#" class="btn btn-rounded bg-twitter btn-social"><i class="mdi mdi-twitter"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
 
   
     


@endsection