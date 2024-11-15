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
                                <h3 class="card-title">Update Employee</h3>
                            </div>
                            <form action="{{route('employee.update',$employee_edit->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="exampleInputname">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleInputname"
                                                value="{{$employee_edit->name}}" name="name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" value="{{$employee_edit->email}}"
                                               name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="exampleInputmobile">Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleInputmobile"
                                                value="{{$employee_edit->mobile}}" name="mobile">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="exampleInpuaddress">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleInpuaddress"
                                                value="{{$employee_edit->address}}" name="address">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="exampleInputsalary">Base Salary</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleInputsalary"
                                                value="{{$employee_edit->base_salary}}" name="base_salary">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </section>
    </div>
@endsection
