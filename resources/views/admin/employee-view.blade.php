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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Employee Details</h3>
                            </div>
                            
                            <label class="ml-4">NAME:<strong class="text-success"> {{$employee->name}}</strong></label>
                            <hr>
                            <label class="ml-4">EMAIL:<strong class="text-success"> {{$employee->email}}</strong></label>
                            <hr>
                            <label class="ml-4">MOBILE:<strong class="text-success"> {{$employee->mobile}}</strong></label>
                            <hr>
                            <label class="ml-4">ADDRESS:<strong class="text-success"> {{$employee->address}}</strong></label>
                            <hr>
                            <label class="ml-4">BASE SALARY:<strong class="text-success"> {{$employee->base_salary}}</strong></label>
                         
                            <div class="card-footer">
                                <a href="{{route('employee.list')}}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                        
                </div>
            </div>
        </div>
      </section>
    </div>
@endsection
