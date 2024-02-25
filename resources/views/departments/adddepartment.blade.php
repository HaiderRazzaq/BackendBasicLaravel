@extends('layout.app')

@section('title')
    Add new Departments
@endsection



@section('adddepartment')
    <form class="row g-3 w-a inputform" method="post" action="{{route('departments.store')}}">
        @csrf
        <div class="col-md-6 mb-3">
            <label for="inputDepartment" class="form-label">Department Name</label>
            <input type="text" class="form-control" name="departmentname" id="inputDepartment" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputOwner" class="form-label">Owner</label>
            <input type="text" class="form-control" name="departmentowner" id="inputOwner" required>
        </div>
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection
