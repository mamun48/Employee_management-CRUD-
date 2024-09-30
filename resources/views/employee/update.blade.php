@extends('layout')
@section('page-content')
<p>
    <a class="btn btn-primary" href="{{route('employee.index')}}">Back</a>
</p>
<form method="POST" action="{{route('employee.update',$employee->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control" name="name" value='{{$employee->name}}'>
    </div>

    <div class="form-group">
        <label for="job_title">Job title</label>
      <input type="text" id="job_titile" class="form-control" name="job_title" value='{{$employee->job_title}}'>
    </div>

    <div class="form-group">
        <label for="joining_date">Joining date</label>
      <input type="date" id="joining_date" class="form-control" name="joining_date" value='{{$employee->joining_date}}'>
    </div>

    <div class="form-group">
        <label for="salary">Salary</label>
      <input type="double" id="salary" class="form-control" name="salary" value='{{$employee->salary}}'>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
      <input type="email" id="email" class="form-control" name="email" value='{{$employee->email}}'>
    </div>

    <div class="form-group">
        <label for="mobile">Mobile number</label>
      <input type="text" id="mobile" class="form-control" name="mobile" value='{{$employee->mobile}}'>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
      <input type="text" id="address" class="form-control" name="address" value='{{$employee->address}}'>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection