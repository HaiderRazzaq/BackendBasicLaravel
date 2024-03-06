@extends('layout.app')

@section('title')
    Edit Department information
@endsection


@section('editdepartment')


<form class="row g-3 w-a inputform" method="POST" action="{{route('departments.update',$department->id)}}">
    @csrf
    @method('PUT')
    <div class="col-md-6 mb-3">
        <label for="inputDepartment" class="form-label">Edit Department Name</label>
        <input type="text" class="form-control" value="{{$department->department_name}}" id="inputDepartment" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputOwner" class="form-label">Edit Owner</label>
        <input type="text" class="form-control" value="{{$department->department_owner}}" id="inputOwner" required>
    </div>
    <div class="col-12">
        <button type="submit" value="submit" class="btn btn-primary">submit</button>
    </div>
</form>

@endsection
