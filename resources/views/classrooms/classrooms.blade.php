@extends('layout.app')

@section('title')
    Classrooms lists
@endsection


@section('classroomslist')
    <div class="container mt-5">
        <h2>Form Data Table</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Class Name</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="className">Sample Class</td>
                    <td id="owner">John Doe</td>
                    <td>
                        {{-- <button type="button" class="btn btn-primary btn-sm">Edit</button> --}}
                        <a href="{{ route('classrooms.edit', 3) }}" target="_blank"><button type="button"
                                class="btn btn-primary btn-sm">Edit</button></a>
                        <a href="{{ route('classrooms.show', 3) }}" target="_blank" rel="noopener noreferrer"><button
                                type="button" class="btn btn-info btn-sm">Show</button></a>

                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
