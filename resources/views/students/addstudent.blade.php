@extends('layout.app')


@section('title')
Add new student
@endsection


@section('addstudent')

<form class="row g-3 w-a inputform">
    <div class="col-md-6 mb-3">
        <label for="inputFirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="inputFirstName" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputLastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="inputLastName" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputPhone" class="form-label">Phone</label>
        <input type="tel" class="form-control" id="inputPhone" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputDepartment" class="form-label">Department</label>
        <select class="form-select" id="inputDepartment" required>
            <option selected>Select Department...</option>
            <option value="department1">Department 1</option>
            <option value="department2">Department 2</option>
        </select>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputClassroom" class="form-label">Classroom</label>
        <select class="form-select" id="inputClassroom" required>
            <option selected>Select Classroom...</option>
            <option value="classroom1">Classroom 1</option>
            <option value="classroom2">Classroom 2</option>
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
    </div>

    <div class="col-md-6 mb-3">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity" required>
    </div>


    <div class="col-12">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
</form>



@endsection
