@extends('layout.app')
@section('title')
    Show single class information
@endsection



@section('singleclassroom')
    <table class="table table-bordered table-hover mt-5 inputform">

        <tbody class="table-group-divider">
            <tr>
                <th scope="row">Class Id</th>
                <td>{{ $classroom->id }}</td>

            </tr>
            <tr>
                <th scope="row">Class Name</th>
                <td>{{ $classroom->class_name }}</td>

            </tr>
            <tr>
                <th scope="row">Class Owner</th>
                <td colspan="2">{{ $classroom->class_owner }}</td>
            </tr>

            <tr>
                <th scope="row">Created At</th>
                <td colspan="2">{{ $classroom->created_at }}</td>
            </tr>
            <tr>
                <th scope="row">Updated At</th>
                <td colspan="2">{{ $classroom->updated_at }}</td>
            </tr>
        </tbody>
        <td colspan="2">

            <div class="btn-group" role="group">
                <a href="{{ route('classrooms.edit', $classroom->id) }}" target="_blank" class="btn btn-primary btn-sm">
                    Edit
                </a>
                <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="post">
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
