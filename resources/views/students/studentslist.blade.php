{{-- @extends('layout.app') --}}

{{-- @section('title')
    Students list
@endsection --}}
<x-layout>

    <x-page-title text='Students list'></x-page-title>

    {{-- @section('studentslist') --}}
    @if (session('success'))
        <div class="alert alert-success mt-4 inputform">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger mt-4 inputform">{{ session('error') }}</div>
    @endif
    <div class="container mt-5">
        <h2>Students list</h2>
        <table class="table table-bordered table-hover">
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
                    <th scope="col">Created Date</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">User Input</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td id="firstName">{{ $student->first_name }}</td>
                        <td id="lastName">{{ $student['last_name'] }}</td>
                        <td id="email">{{ $student->email }}</td>
                        <td id="phone">{{ $student->phone }}</td>
                        <td id="department">{{ $student->department->department_name }}</td>
                        <td id="classroom">{{ $student->classroom->class_name }}</td>
                        <td id="address">{{ $student->address }}</td>
                        <td id="city">{{ $student->city }}</td>
                        <td id="createdate">{{ $student->created_at->diffForHumans() }}</td>
                        <td id="createdate">{{ $student->updated_at }}</td>
                        <td id="createdate">{{ $student->user->name }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('students.edit', $student->id) }}" target="_blank"
                                    class="btn btn-primary btn-sm">
                                    Edit
                                </a>
                                <a href="{{ route('students.show', $student->id) }}" target="_blank"
                                    rel="noopener noreferrer" class="btn btn-info btn-sm">
                                    Show
                                </a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="post">
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
                {{-- @endsection --}}

</x-layout>
