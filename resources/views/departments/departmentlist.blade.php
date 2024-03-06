@extends('layout.app')

@section('title')
    Departments list
@endsection

@section('departmentslist')
    <div class="container mt-5">
        <h2>Departments List</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Department Name</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($departments as $department)
                    <tr>
                        <td id="departmentName">{{$department->department_name}}</td>
                        <td id="owner">{{$department->department_owner}}</td>
                        <td>
                            <a href="{{ route('departments.edit', $department->id) }}" target="_blank"><button type="button"
                                    class="btn btn-primary btn-sm">Edit</button></a>

                            <a href="{{ route('departments.show', $department->id) }}" target="_blank" rel="noopener noreferrer"><button
                                    type="button" class="btn btn-info btn-sm">Show</button></a>
                                {{-- <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </form> --}}

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
