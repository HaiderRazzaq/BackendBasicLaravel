
@extends('layout.app')


@section('addclassroom')
<form class="row g-3 w-a inputform">
    <div class="col-md-6 mb-3">
        <label for="inputclass" class="form-label">Class Name</label>
        <input type="text" class="form-control" id="inputclass" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputOwner" class="form-label">Owner</label>
        <input type="text" class="form-control" id="inputOwner" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
</form>

@endsection
