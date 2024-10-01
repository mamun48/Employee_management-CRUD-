@extends('layout')
@section('page-content')

<p class="text-end">
    <a class="btn btn-primary" href="{{route('employee.create')}}">Add Employee</a>
</p>

<table class="table table-striped">
   
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Job Title</th>
        <th scope="col">Salay</th>
        <th scope="col">Details</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
  
    <tbody>
        @foreach ($employees as $idx => $employee)
        <tr>
            {{-- <th scope="row">{{$idx + 1}}</th> --}}
            <td>{{$employee->name}}</td>
            <td>{{$employee->job_title}}</td>
            <td> {{$employee->salary}}</td>
            <td>
                <a class="btn btn-primary me-2" href="{{ route('employee.show', $employee->id) }}">Details</a>
                      
            </td>
            <td>
                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger ms-2" value="Delete">
                </form>
            </td>
            
            
          </tr>
        @endforeach
      
    </tbody>
  </table>
  {{$employees->links()}}
@endsection