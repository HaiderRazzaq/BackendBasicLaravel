{{-- @extends('layout.app') --}}
{{-- @section('title')
    Edit classroom
@endsection --}}

{{-- @section('editclassroom') --}}
<x-layout>

    <x-page-title text='Edit classroom'></x-page-title>
    {{-- display edit error --}}
    @if (session('success'))
        <div class="alert alert-success mt-4 inputform">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger mt-4 inputform">{{ session('error') }}</div>
    @endif

    {{-- display Validation error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="row g-3 w-a inputform" method="POST" action="{{ route('classrooms.update', $classroom->id) }}">
        @csrf
        @method('PUT')
        <div class="col-md-6 mb-3">
            <label for="inputclass" class="form-label">Edit Class Name</label>
            <input type="text" class="form-control" value="{{ $classroom->class_name }}" name="classname"
                id="inputclass" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputOwner" class="form-label">Edit Owner</label>
            <input type="text" class="form-control" value="{{ $classroom->class_owner }}" name="classowner"
                id="inputOwner" required>
        </div>
        <div class="col-12">
            <button type="submit" value="submit" class="btn btn-primary">update</button>
        </div>
    </form>
    {{-- @endsection --}}

</x-layout>
