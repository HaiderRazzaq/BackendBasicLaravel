@extends('layout.app')
{{-- @section('title')
    Show single student information
@endsection --}}

<x-page-title text='Show single student information'></x-page-title>
@section('singlestudent')
    <table class="table table-bordered table-hover mt-5 inputform">
        <tbody class="table-group-divider">
            <tr>
                <th scope="row">Student Id</th>
                <td>{{ $singlestudent->id }}</td>

            </tr>
            <tr>
                <th scope="row">First Name</th>
                <td>{{ $singlestudent->first_name }}</td>

            </tr>
            <tr>
                <th scope="row">Last Name</th>
                <td colspan="2">{{ $singlestudent->last_name }}</td>

            </tr>
            <tr>
                <th scope="row">Email</th>
                <td colspan="2">{{ $singlestudent->email }}</td>

            </tr>
            <tr>
                <th scope="row">Phone</th>
                <td colspan="2">{{ $singlestudent->phone }}</td>

            </tr>
            <tr>
                <th scope="row">Department</th>
                <td colspan="2">{{ $singlestudent->department }}</td>

            </tr>
            <tr>
                <th scope="row">Classroom</th>
                <td colspan="2">{{ $singlestudent->classroom }}</td>
            </tr>
            <tr>
                <th scope="row">Address</th>
                <td colspan="2">{{ $singlestudent->address }}</td>

            </tr>
            <tr>
                <th scope="row">City</th>
                <td colspan="2">{{ $singlestudent['city'] }}</td>

            </tr>
            <tr>
                <th scope="row">Created Date</th>
                <td colspan="2">{{ $singlestudent->created_at }}</td>

            </tr>
            <tr>
                <th scope="row">Last Update</th>
                <td colspan="2">{{ $singlestudent->updated_at }}</td>

            </tr>
        </tbody>
        <td colspan="2">
            <div class="btn-group" role="group">
                <a href="{{ route('students.edit', $singlestudent->id) }}" target="_blank" class="btn btn-primary btn-sm">
                    Edit
                </a>
                <form action="{{ route('students.destroy', $singlestudent->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('This will Delete Item !!')">
                        Delete
                    </button>
                </form>

            </div>
        </td>
    </table>
@endsection
