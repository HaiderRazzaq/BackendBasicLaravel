{{-- @extends('layout.app') --}}
{{-- @section('title')
    Show single student information
@endsection --}}
<x-layout>
    <style>
        .comment {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .comment-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
            color: #555;
        }

        .username {
            font-weight: bold;
        }

        .comment-time {
            font-size: 0.9em;
        }

        .comment-body {
            color: #333;
        }

        .alert {
            margin-bottom: 0;
        }
    </style>

    <x-page-title text='Show single student information'></x-page-title>
    {{-- @section('singlestudent') --}}
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
                <td colspan="2">{{ $singlestudent->department->department_name }}</td>

            </tr>
            <tr>
                <th scope="row">Classroom</th>
                <td colspan="2">{{ $singlestudent->classroom->class_name }}</td>
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
            <tr>
                <th scope="row">Input By</th>
                <td colspan="2">{{ $singlestudent->User->name }}</td>

            </tr>
        </tbody>
        <td colspan="2">
            <div class="btn-group" role="group">
                <a href="{{ route('students.edit', $singlestudent->id) }}" target="_blank"
                    class="btn btn-primary btn-sm">
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
    {{-- @endsection --}}

    <!-- Comment Section -->
    <div class="container mt-5">
        <h2>Comments</h2>
        <form action="{{ route('comments.store', $singlestudent->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="comment">Add a comment:</label>
                <textarea class="form-control" name="comment" id="comment" rows="3" required></textarea>
                {{-- <input type="hidden" value="{{ $singlestudent->id }}" name="studentid"> --}}
            </div>
            <button type="submit" name="submit" class="btn btn-primary">new comment</button>
        </form>
        <hr>
        <div id="comments">
            <div class="comment">
                @foreach($singlestudent->comment as $getcomment)

                <div class="comment-header">
                    <span class="username">JohnDoe</span>
                    <span class="comment-time">{{ $getcomment->created_at }}</span>
                </div>
                <div class="comment-body">
                    <div class="alert alert-secondary" role="alert">{{ $getcomment->content }}</div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</x-layout>
