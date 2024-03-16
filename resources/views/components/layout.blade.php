<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{-- <title>@yield('title')</title> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<style>
    .inputform {
        margin: auto;
        width: 70%
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto fs-5 my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home Page</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Students
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('students.create')}}">Add students</a></li>
                            <li><a class="dropdown-item" href="{{route('students.index')}}">Students list</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Departments
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('departments.create')}}">Add Departments</a></li>
                            <li><a class="dropdown-item" href="{{route('departments.index')}}">Departments list</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Classrooms
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('classrooms.create') }}">Add Classrooms</a></li>
                            <li><a class="dropdown-item" href="{{ route('classrooms.index') }}">Classrooms list</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

        {{$slot}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
