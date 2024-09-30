@extends('layout')

@section('page-content')
<p>
    <a class="btn btn-primary" href="{{route('employee.index')}}">Back</a>
</p>
</p>
<table class="table table-striped table-bordered">
    <tr>
        <th>Name</th>
        <td>{{$employee->name}}</td>
    </tr>
    <tr>
        <th>Job Title</th>
        <td>{{$employee->job_title}}</td>
    </tr>
    <tr>
        <th>Salary</th>
        <td>{{$employee->salary}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$employee->email}}</td>
    </tr>
          
    <tr>
        <th>Phone no</th>
        <td>{{$employee->mobile}}</td>
    </tr>
    <tr>
        <th>Address</th>
        <td>{{$employee->address}}</td>
    </tr>
         
</table>
<p>
    <a class="btn btn-primary" href="{{route('employee.edit',$employee->id)}}">Update</a>
</p>

@endsection
