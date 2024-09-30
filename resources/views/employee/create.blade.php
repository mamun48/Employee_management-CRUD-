@extends('layout')
@section('page-content')

<legend>New Employee</legend>
<p class="text-end">

</p>
<form method="POST" action="{{route('employee.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control" name="name" value={{old("name")}}>
    </div>

    <div class="form-group">
        <label for="job_title">Job title</label>
      <input type="text" id="job_titile" class="form-control" name="job_title" value={{old("job_title")}}>
    </div>

    <div class="form-group">
        <label for="joining_date">Joining date</label>
      <input type="date" id="joining_date" class="form-control" name="joining_date" value={{old("joining_date")}}>
    </div>

    <div class="form-group">
        <label for="salary">Salary</label>
      <input type="double" id="salary" class="form-control" name="salary" value={{old("salary")}}>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
      <input type="email" id="email" class="form-control" name="email" value={{old("email")}}>
    </div>

    <div class="form-group">
        <label for="mobile">Mobile number</label>
      <input type="text" id="mobile" class="form-control" name="mobile" value={{old("mobile")}}>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
      <input type="text" id="address" class="form-control" name="address" value={{old("address")}}>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection