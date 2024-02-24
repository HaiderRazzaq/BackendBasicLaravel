@extends('layout.app')

@section('title')
    Departments list
@endsection

@section('departmentslist')
    <div class="container mt-5">
        <h2>Departments List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Department Name</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="departmentName">Sample Department</td>
                    <td id="owner">John Doe</td>
                    <td>
                        <a href="{{ route('departments.edit', 3) }}" target="_blank"><button type="button"
                                class="btn btn-primary btn-sm">Edit</button></a>
                        <a href="{{ route('departments.show', 3) }}" target="_blank" rel="noopener noreferrer"><button
                                type="button" class="btn btn-info btn-sm">Show</button></a>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
