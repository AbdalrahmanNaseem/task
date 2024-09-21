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
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
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
                    <h4 class="mb-0">Create New Teacher</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('Teacher.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Enter your name:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Teacher"
                                required>
                        </div>

                        <div class="mb-3">
                            <fieldset class="check-group border p-3 rounded">
                                <legend class="fs-6 fw-bold mb-2">Select Your Subject:</legend>
                                <div class="row">
                                    @foreach ($subjects as $subject)
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    id="subject_{{ $subject->id }}" name="subject_id"
                                                    value="{{ $subject->id }}" required>
                                                <label class="form-check-label" for="subject_{{ $subject->id }}">
                                                    {{ $subject->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </fieldset>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="{{ route('Teachers.index') }}" class="btn btn-primary">Back</a>
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
