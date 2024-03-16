{{-- @extends('layout.app') --}}


{{-- @section('title')
    Add new student
@endsection --}}
<x-layout>

    <x-page-title text='Add new student'></x-page-title>

    {{-- @section('addstudent') --}}
    @if (session('success'))
        <div class="alert alert-success mt-4 inputform">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger mt-4 inputform">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="row g-3 w-a inputform" method="post" action="{{ route('students.store') }}">
        @csrf
        <div class="col-md-6 mb-3">
            <label for="inputFirstName" class="form-label">First Name</label>
            <input type="text" value="{{ old('firstname') }}" autofocus class="form-control" name="firstname"
                id="inputFirstName" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputLastName" class="form-label">Last Name</label>
            <input type="text" value="{{ old('lastname') }}" class="form-control" name="lastname" id="inputLastName"
                required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="inputEmail"
                required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputPhone" class="form-label">Phone</label>
            <input type="tel" value="{{ old('phone') }}" class="form-control" name="phone" id="inputPhone"
                required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputDepartment" class="form-label">Department</label>
            <select class="form-select" name="departmentname" id="inputDepartment" required>
                <option selected>Select Department...</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                @endforeach

            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputClassroom" class="form-label">Classroom</label>
            <select class="form-select" name="classroom" id="inputClassroom" required>
                <option selected>Select Classroom...</option>
                @foreach ($classrooms as $classroom)
                    <option value="{{ $classroom->id }}">{{ $classroom->class_name }}</option>
                @endforeach

            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St"
                required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="inputCity" required>
        </div>


        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
    {{-- @endsection --}}

</x-layout>
