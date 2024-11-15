@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            @if (session('success'))
              <div class="alert alert-success">{{(session('success'))}}</div>
            @endif
            <h1 class="m-0">Employees</h1>
          </div><!-- /.col -->
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$percent_current_month}}%</h3>
                <p>this Month Attendance percent</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$percent_last_month}}%</h3>
                <p>Last Month Attendance percent</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>     
      </div>
    </section>
  </div>
@endsection

