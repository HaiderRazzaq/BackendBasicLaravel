{{-- @extends('layout.app') --}}

{{-- @section('title')
    Add new classroom
@endsection --}}

{{-- @section('addclassroom') --}}
<x-layout>

    <x-page-title text='Add new classroom'></x-page-title>

    @if (session('success'))
        <div class="alert alert-success mt-4 inputform">{{ session('success') }}
        </div>
    @endif
    @if (session('Errors'))
        <div class="alert alert-danger mt-4 inputform">
            {{ session('Errors') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger mt-4 inputform">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="row g-3 w-a inputform" method="POST" action="{{ route('classrooms.store') }}">
        @csrf
        <div class="col-md-6 mb-3">
            <label for="inputclass" class="form-label">Class Name</label>
            <input type="text" value="{{ old('classname') }}" autofocus class="form-control" name="classname"
                id="inputclass">
            @error('classname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputOwner" class="form-label">Owner</label>
            <input type="text" value="{{ old('classowner') }}" class="form-control" name="classowner"
                id="inputOwner">
        </div>
        <div class="col-12">
            <button type="submit" value="submit" name="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
    {{-- @endsection --}}

</x-layout>
