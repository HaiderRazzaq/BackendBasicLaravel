@extends('layout.app')
@section('title')
Show single student information
@endsection



@section('singlestudent')

<table class="table table-bordered table-hover mt-5 inputform">
    <tbody class="table-group-divider">
        <tr>
            <th scope="row">Student Id</th>
            <td>212</td>

        </tr>
        <tr>
            <th scope="row">First Name</th>
            <td>Jacob</td>

        </tr>
        <tr>
            <th scope="row">Last Name</th>
            <td colspan="2">Larry the Bird</td>

        </tr>
        <tr>
            <th scope="row">Email</th>
            <td colspan="2">Larry the Bird</td>

        </tr>
        <tr>
            <th scope="row">Phone</th>
            <td colspan="2">Larry the Bird</td>

        </tr>
        <tr>
            <th scope="row">Department</th>
            <td colspan="2">Larry the Bird</td>

        </tr>
        <tr>
            <th scope="row">Classroom</th>
            <td colspan="2">Larry the Bird</td>

        </tr>
        <tr>
            <th scope="row">Address</th>
            <td colspan="2">Larry the Bird</td>

        </tr>
        <tr>
            <th scope="row">City</th>
            <td colspan="2">Larry the Bird</td>

        </tr>

    </tbody>
<td colspan="2">
    <button type="button" class="btn btn-primary btn-sm">Edit</button>
    <button type="button" class="btn btn-danger btn-sm">Delete</button>
</td>
</table>

@endsection
