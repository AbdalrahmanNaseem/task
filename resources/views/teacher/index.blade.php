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
        <div class="card-header text-white d-flex justify-content-between align-items-center">
            <div>Teacher</div>
            <div>
                <a href="{{ route('Teacher.create') }}" class="btn btn-dark btn-sm btn-custom">
                    Create Teacher
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-2">
                    <strong>ID:</strong>
                </div>
                <div class="col-3">
                    <strong class="text-hover">Name:</strong>
                </div>
                <div class="col-3">
                    <strong class="text-hover">Subject:</strong>
                </div>
                <div class="col-3">
                    <strong class="text-hover">Students:</strong>
                </div>
            </div>

            @foreach ($teachers as $teacher)
                <div class="row mb-3 align-items-center">
                    <div class="col-2">
                        <h6>{{ $teacher->id }}</h6>
                    </div>
                    <div class="col-3">
                        <h6 class="text-hover">{{ $teacher->teacher }}</h6>
                    </div>
                    <div class="col-3">
                        @php
                            $subjectName = \App\Models\Subject::find($teacher->subject);
                        @endphp
                        <h6 class="text-hover">{{ $subjectName ? $subjectName->name : 'No Subject' }}</h6>
                    </div>
                    <div class="col-3">
                        <ul class="list-unstyled">
                            @if ($subjectName && $subjectName->students->isNotEmpty())
                                @foreach ($subjectName->students as $student)
                                    <li>{{ $student->name }}</li>
                                @endforeach
                            @else
                                <li>No Students</li>
                            @endif
                        </ul>
                    </div>
                </div>
                <hr>
            @endforeach


        </div>
    </div>
@endsection
