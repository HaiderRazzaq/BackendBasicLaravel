@extends('layout.app')
@section('title')
    Show single department information
@endsection



@section('singledeaprtment')
    <table class="table table-bordered table-hover mt-5 inputform">

        <tbody class="table-group-divider">
            <tr>
                <th scope="row">Department Id</th>
                <td>{{ $department->id }}</td>

            </tr>
            <tr>
                <th scope="row">Department Name</th>
                <td>{{ $department->department_name }}</td>

            </tr>
            <tr>
                <th scope="row">Department Owner</th>
                <td colspan="2">{{ $department->department_owner }}</td>

            </tr>

        </tbody>
        <td colspan="2">
            <div class="btn-group" role="group">
                <a href="{{ route('departments.edit', $department->id) }}" target="_blank" class="btn btn-primary btn-sm">
                    Edit
                </a>
                <form action="{{ route('departments.destroy', $department->id) }}" method="post">
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
