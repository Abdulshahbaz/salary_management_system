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
              <h3 class="card-title">Employee List</h3>
              <a href="{{route('employee.add')}}" class="btn btn-primary float-end"><span
                class="cil-contrast "></span>Add New Employee</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Base Salary</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($employees as $key=>$item)
                    <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->mobile}}</td>
                    <td>{{$item->base_salary}}</td>
                    <td>
                          <a href="{{route('employee.show', $item->id)}}" class="btn btn-warning">view</a>
                          <a href="{{route('employee.edit',$item->id)}}" class="btn btn-success">edit</a>

                          <form action="{{route('employee.delete',$item->id)}}" method="POST" enctype="multipart/form-data"
                            class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are You Sure Delete Thise Data!')">delete</button>
                          </form>
                          
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
             </div>
            <!-- /.card-body -->
          </div>
      </div>
   </div>
@endsection