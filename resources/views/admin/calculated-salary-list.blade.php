@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </section>
<div class="col-md-12">
         @if (session('success'))
            <div class="alert alert-success">{{(session('success'))}}</div>
          @endif
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Calculated Salary List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr style="text-align:center;">
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Total Working Days</th>
                    <th>Total Leaves</th>
                    <th>Over Time</th>
                    <th>Total Salary</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($calculated_salary as $key=>$calculated)
                    <tr style="text-align:center;">
                        <td>{{$key + 1}}</td>
                        <td>{{$calculated->employee->name}}</td>
                        <td>{{$calculated->month}}</td>
                        <td>{{$calculated->year}}</td>
                        <td>{{$calculated->total_working_days}}</td>
                        <td>{{$calculated->total_leave_taken}}</td>
                        <td>{{$calculated->overtime}}</td>
                        <td>{{$calculated->total_salary_made}}</td>
                    </tr>   
                    @endforeach
                </tbody>
              </table>
              <div class="float-end m-2">
                {{ $calculated_salary->links() }}
            </div>
             </div>
            <!-- /.card-body -->
          </div>
      </div>
   </div>
@endsection