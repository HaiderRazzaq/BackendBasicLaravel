@extends('layout.app')

@section('title')
    Edit single student information
@endsection

@section('editstudent')


<form class="row g-3 w-a inputform">
    <div class="col-md-6 mb-3">
        <label for="inputFirstName" class="form-label">Edit First Name</label>
        <input type="text" class="form-control" value="{{$student->first_name}}" id="inputFirstName" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputLastName" class="form-label">Edit Last Name</label>
        <input type="text" class="form-control" value="{{$student->last_name}}" id="inputLastName" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputEmail" class="form-label">Edit Email</label>
        <input type="email" class="form-control" value="{{$student->email}}" id="inputEmail" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputPhone" class="form-label">Edit Phone</label>
        <input type="tel" class="form-control" value="{{$student->phone}}" id="inputPhone" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputDepartment" class="form-label">Edit Department</label>
        <select class="form-select" id="inputDepartment" required>
            <option selected>Select Department...</option>
            <option value="department1">Department 1</option>
            <option value="department2">Department 2</option>
            <!-- Add more options as needed -->
        </select>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputClassroom" class="form-label">Edit Classroom</label>
        <select class="form-select" id="inputClassroom" required>
            <option selected>Select Classroom...</option>
            <option value="classroom1">Classroom 1</option>
            <option value="classroom2">Classroom 2</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label for="inputAddress" class="form-label">Edit Address</label>
        <input type="text" class="form-control" id="inputAddress" value="{{$student->address}}" placeholder="1234 Main St" required>
    </div>

    <div class="col-md-6 mb-3">
        <label for="inputCity" class="form-label">Edit City</label>
        <input type="text" class="form-control" id="inputCity" value="{{$student->city}}" required>
    </div>


    <div class="col-12">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
</form>


@endsection
