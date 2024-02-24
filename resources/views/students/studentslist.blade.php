@extends('layout.app')

@section('title')
    Students list
@endsection

@section('studentslist')

    <div class="container mt-5">
        <h2>Students list</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Department</th>
                    <th scope="col">Classroom</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row for First Name form -->
                <tr>
                    <td id="firstName">John</td>
                    <td id="lastName">Doe</td>
                    <td id="email">john.doe@example.com</td>
                    <td id="phone">(555) 123-4567</td>
                    <td id="department">Department 1</td>
                    <td id="classroom">Classroom 1</td>
                    <td id="address">1234 Main St</td>
                    <td id="city">Cityville</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-info btn-sm">Show</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endsection
