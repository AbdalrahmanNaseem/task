@extends('layouts.sidebar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    }

    .btn-custom {
        transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }

    .text-hover:hover {
        color: #007bff;
        transition: color 0.3s ease;
    }

    .fade-in {
        opacity: 0;
        animation: fadeIn 0.8s forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .card-header {
        background: linear-gradient(to right, #6c757d, #495057);
    }
</style>

@section('content')
    <div class="card shadow m-5 mb-0 fade-in">
        <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
            <div>Student</div>
            <div>
                <a href="{{ route('student.create') }}" class="btn btn-dark btn-sm btn-custom">
                    Go to Create Student
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-1">
                    <strong>ID:</strong>
                </div>
                <div class="col-2">
                    <strong class="text-hover">Name:</strong>
                </div>
                <div class="col-2">
                    <strong class="text-hover">Email:</strong>
                </div>
                <div class="col-2">
                    <strong class="text-hover">Phone:</strong>
                </div>
                <div class="col-3">
                    <strong class="text-hover">Subjects:</strong>
                </div>
                <div class="col-1">
                    <strong class="text-hover">Edit:</strong>
                </div>
                <div class="col-1">
                    <strong class="text-hover">Delete:</strong>
                </div>
            </div>
            @foreach ($students as $student)
                <div class="row mb-3 align-items-center">
                    <div class="col-1">
                        <h6>{{ $student->id }}</h6>
                    </div>
                    <div class="col-2">
                        <h6 class="text-hover">{{ $student->name }}</h6>
                    </div>
                    <div class="col-2">
                        <h6 class="text-hover">{{ $student->email }}</h6>
                    </div>
                    <div class="col-2">
                        <h6 class="text-hover">{{ $student->phone }}</h6>
                    </div>
                    <div class="col-3">
                        <ul class="list-unstyled">
                            @foreach ($student->subjects as $subject)
                                <li>{{ $subject->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('student.edit', $student) }}" class="btn btn-primary btn-sm btn-custom">Edit</a>
                    </div>
                    <div class="col-1">
                        <form action="{{ route('student.delete', $student) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
                <hr>
            @endforeach

        </div>
    </div>
@endsection
