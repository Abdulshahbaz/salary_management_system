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
                                <h3 class="card-title">Add New Employee</h3>
                            </div>
                            <form action="{{ route('employee.insert') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="exampleInputname">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleInputname" name="name"
                                                valeue="{{ old('name') }}" placeholder="Enter a name">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" name="email"
                                                valeue="{{ old('email') }}" placeholder="Enter a Email">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="exampleInputmobile">Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleInputmobile"
                                                name="mobile" valeue="{{ old('mobile') }}" placeholder="Enter a mobile">
                                            @error('mobile')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="exampleInpuaddress">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleInpuaddress"
                                                name="address" valeue="{{ old('address') }}" placeholder="Enter a address">
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="exampleInputsalary">Base Salary</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="exampleInputsalary"
                                                name="base_salary" valeue="{{ old('base_salary') }}"
                                                placeholder="Enter a salary">
                                            @error('base_salary')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
