@extends('layout.app')
@section('title')
    Show single class information
@endsection



@section('singleclassroom')
    <table class="table table-bordered table-hover mt-5 inputform">

        <tbody class="table-group-divider">
            <tr>
                <th scope="row">Class Id</th>
                <td>212</td>

            </tr>
            <tr>
                <th scope="row">Class Name</th>
                <td>Jacob</td>

            </tr>
            <tr>
                <th scope="row">Class Owner</th>
                <td colspan="2">Larry the Bird</td>

            </tr>

        </tbody>
        <td colspan="2">
            <button type="button" class="btn btn-primary btn-sm">Edit</button>
            <button type="button" class="btn btn-danger btn-sm">Delete</button>
        </td>
    </table>
@endsection
