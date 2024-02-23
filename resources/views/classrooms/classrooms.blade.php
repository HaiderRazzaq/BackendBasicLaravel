@extends('layout.app')

@section('title')
Classrooms lists
@endsection
@section('classroomslist')

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto fs-5 my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home Page</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Students
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Add students</a></li>
                        <li><a class="dropdown-item" href="#">Students list</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Departments
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Add Departments</a></li>
                        <li><a class="dropdown-item" href="#">Departments list</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Classrooms
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Add Classrooms</a></li>
                        <li><a class="dropdown-item" href="#">Classrooms list</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>


<div class="container mt-5">
    <h2>Form Data Table</h2>
    <table class="table">
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
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-info btn-sm">Show</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
