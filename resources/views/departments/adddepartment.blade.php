@extends('layout.app')

@section('title')
    Add new Departments
@endsection

@section('adddepartment')

    @if (session('success'))
        <div class="alert alert-success mt-4 inputform">{{ session('success') }}
        </div>
    @endif
    @if (session('Errors'))
        <div class="alert alert-danger mt-4 inputform">
            {{ session('Errors') }}
        </div>
    @endif

{{-- display validation error --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form class="row g-3 w-a inputform" method="post" action="{{ route('departments.store') }}">
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
            <button type="submit" name="submit" value="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection
