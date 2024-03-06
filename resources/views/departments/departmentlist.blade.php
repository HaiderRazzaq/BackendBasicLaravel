@extends('layout.app')

@section('title')
    Departments list
@endsection

@section('departmentslist')
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

    <div class="container mt-5">
        <h2>Departments List</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Department Name</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($departments as $department)
                    <tr>
                        <td id="departmentName">{{ $department->department_name }}</td>
                        <td id="owner">{{ $department->department_owner }}</td>
                        <td id="owner">{{ $department->created_at->format('Y-M-d') }}</td>
                        <td id="owner">{{ $department->updated_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('departments.edit', $department->id) }}" target="_blank"
                                    class="btn btn-primary btn-sm">
                                    Edit
                                </a>
                                <a href="{{ route('departments.show', $department->id) }}" target="_blank"
                                    rel="noopener noreferrer" class="btn btn-info btn-sm">
                                    Show
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
