@extends('layout.app')

@section('title')
    Classrooms lists
@endsection


@section('classroomslist')
    @if (session('success'))
        <div class="alert alert-success mt-4 inputform">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger mt-4 inputform">{{ session('error') }}</div>
    @endif
    <div class="container mt-5">
        <h2>ClassRooms List</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Class Name</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $classroom)
                    <tr>
                        <td id="className">{{ $classroom->class_name }}</td>
                        <td id="owner">{{ $classroom->class_owner }}</td>
                        <td id="created">{{ $classroom->created_at }}</td>
                        <td id="updated">{{ $classroom->updated_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('classrooms.edit', $classroom->id) }}" target="_blank"
                                    class="btn btn-primary btn-sm">
                                    Edit
                                </a>
                                <a href="{{ route('classrooms.show', $classroom->id) }}" target="_blank"
                                    rel="noopener noreferrer" class="btn btn-info btn-sm">
                                    Show
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
