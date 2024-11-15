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
                    <div class="col-md-10">
                        @if (session('messages'))
                         <div class="alert alert-danger">{{(session('messages'))}}</div>
                       @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Employee Salary</h3>
                            </div>
                            <form action="{{route('total.salary')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Employee Name</label>
                                            <select class="form-control" name="employe_id">
                                              <option selected="selected">Select Employee</option>
                                              @foreach ($salarys as $value)
                                              <option value="{{$value->id}}">{{$value->name}}</option>
                                              @endforeach
                                            </select>
                                            @error('employe_id')
                                                <div class="text-danger">{{$message}}</div>
                                            @enderror
                                          </div> 
                                        <div class="form-group col-sm-6">
                                            <label>Month</label>
                                              <div>
                                                <input type="month" class="form-control" name="month"
                                                value="{{ \Carbon\Carbon::now()->format('Y-m')}}">
                                                @error('month')
                                                     <div class="text-danger">{{$message}}</div>
                                                 @enderror
                                             </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Year</label>
                                            <div>
                                                <input type="year" class="form-control" name="year" 
                                                 maxlength="4" value="{{ \Carbon\Carbon::now()->format('Y')}}">
                                                 @error('year')
                                                     <div class="text-danger">{{$message}}</div>
                                                 @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label>Totoal Working Days</label>
                                              <div>
                                                <input type="text" class="form-control" name="working_day"
                                                    placeholder="Enter a Working Days">
                                                    @error('working_day')
                                                     <div class="text-danger">{{$message}}</div>
                                                 @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Total Leave Taken</label>
                                              <div>
                                                <input type="text" class="form-control" name="leave_taken" 
                                                     placeholder="Enter a Total Leave">
                                                     @error('leave_taken')
                                                     <div class="text-danger">{{$message}}</div>
                                                 @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Over Time (in hours)</label>
                                            <div>
                                                <input type="number" class="form-control" name="over_time" placeholder="Enter Over Time" min="0" step="0.1">
                                                @error('over_time')
                                                     <div class="text-danger">{{$message}}</div>
                                                 @enderror
                                                <small class="form-text text-muted">Please enter the overtime in hours.</small>
                                            </div>
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
