@extends('layouts.sidebar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body {
        background: #f4f7fa;
    }

    .form-label {
        font-weight: bold;
        font-size: 1.1rem;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .form-label:hover {
        color: #007bff;
        transform: scale(1.05);
    }

    .check-group {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        height: 100%;
    }

    .form-check-label {
        font-weight: 500;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .form-check-label:hover {
        color: #007bff;
        transform: scale(1.05);
    }

    .btn-primary {
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card {
        background: #ffffff;
        border-radius: 15px;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }
</style>

@section('content')
    <div class="container-fluid">
        <div class="container my-5 w-50">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Create New Student</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Enter your
                                        email:</label>
                                    <input type="email" class="form-control rounded" name="email" id="email"
                                        placeholder="Student@gmail.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Enter your
                                        name:</label>
                                    <input type="text" class="form-control rounded" name="name" id="name"
                                        placeholder="Student's name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Enter your
                                        phone:</label>
                                    <input type="text" class="form-control rounded" name="phone" id="phone"
                                        placeholder="Student's phone" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <fieldset class="check-group">
                                    <legend class="fs-6 fw-bold mb-2">Select Your subject:</legend>
                                    @foreach ($subjects as $subject)
                                        <div class="check-item">
                                            <input type="checkbox" id="subject_{{ $subject->id }}" name="subjects[]"
                                                value="{{ $subject->id }}">
                                            <label class="form-check-label" for="subject_{{ $subject->id }}">
                                                {{ $subject->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </fieldset>
                            </div>
                        </div>


                        <div class="d-flex">
                            <div class="me-auto">
                                <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
