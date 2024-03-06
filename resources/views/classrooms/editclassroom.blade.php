@extends('layout.app')



@section('title')
    Edit classroom
@endsection

@section('editclassroom')
    <form class="row g-3 w-a inputform" method="POST" action="{{ route('classrooms.update', 2) }}">
        @csrf
        @method('PUT')
        <div class="col-md-6 mb-3">
            <label for="inputclass" class="form-label">Edit Class Name</label>
            <input type="text" class="form-control" name="classname" id="inputclass" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputOwner" class="form-label">Edit Owner</label>
            <input type="text" class="form-control" name="classowner" id="inputOwner" required>
        </div>
        <div class="col-12">
            <button type="submit" value="submit" class="btn btn-primary">update</button>
        </div>
    </form>
@endsection
