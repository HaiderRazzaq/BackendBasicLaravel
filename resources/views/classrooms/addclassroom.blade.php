@extends('layout.app')

@section('title')
    Add new classroom
@endsection
@section('addclassroom')
    <form class="row g-3 w-a inputform" method="POST" action="{{route('classrooms.store')}}">
        @csrf
        <div class="col-md-6 mb-3">
            <label for="inputclass" class="form-label">Class Name</label>
            <input type="text" autofocus class="form-control" name="classname" id="inputclass" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputOwner" class="form-label">Owner</label>
            <input type="text" class="form-control" name="classowner" id="inputOwner" required>
        </div>
        <div class="col-12">
            <button type="submit" value="submit" name="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection
