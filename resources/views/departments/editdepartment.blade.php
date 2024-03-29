{{-- @extends('layout.app') --}}

{{-- @section('title')
    Edit Department information
@endsection --}}

{{-- @section('editdepartment') --}}
<x-layout>

    <x-page-title text='Edit Department information'></x-page-title>
    @if (session('success'))
        <div class="alert alert-success mt-4 inputform">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger mt-4 inputform">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="row g-3 w-a inputform" method="POST" action="{{ route('departments.update', $department->id) }}">
        @csrf
        @method('PUT')
        <div class="col-md-6 mb-3">
            <label for="inputDepartment" class="form-label">Edit Department Name</label>
            <input type="text" class="form-control" name="departmentname" value="{{ $department->department_name }}"
                id="inputDepartment" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputOwner" class="form-label">Edit Owner</label>
            <input type="text" class="form-control" name="departmentowner"
                value="{{ $department->department_owner }}" id="inputOwner" required>
        </div>
        <div class="col-12">
            <button type="submit" value="submit" class="btn btn-primary">update</button>
        </div>
    </form>
    {{-- @endsection --}}

</x-layout>
