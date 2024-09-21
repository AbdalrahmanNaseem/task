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
    }

    .form-check-label {
        font-weight: 500;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .form-check-label:hover {
        color: #007bff;
        transform: scale(1.05);
    }

    .btn-success {
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-success:hover {
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
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="container w-50">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Update User Data</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.update', $student) }}" method="post">
                        @csrf

                        <div class="row mb-3">
                            <label for="New_email" class="col-12 col-form-label text-center">Enter your new email:</label>
                            <div class="col-12">
                                <input type="email" class="form-control rounded"
                                    value="{{ old('New_email', $student->email) }}" name="New_email" id="New_email"
                                    required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="New_user_name" class="col-12 col-form-label text-center">Enter your new
                                name:</label>
                            <div class="col-12">
                                <input type="text" class="form-control rounded"
                                    value="{{ old('New_user_name', $student->name) }}" name="New_user_name"
                                    id="New_user_name" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="New_user_phone" class="col-12 col-form-label text-center">Enter your new
                                phone:</label>
                            <div class="col-12">
                                <input type="text" class="form-control rounded"
                                    value="{{ old('New_user_phone', $student->phone) }}" name="New_user_phone"
                                    id="New_user_phone" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <fieldset class="check-group">
                                    <legend>Select Your subjects:</legend>
                                    @foreach ($subjects as $subject)
                                        <div class="check-item">
                                            <input type="checkbox" id="subject_{{ $subject->id }}" name="subjects[]"
                                                value="{{ $subject->id }}"
                                                {{ $student->subjects->contains($subject->id) ? 'checked' : '' }}>
                                            <label class="form-check-label"
                                                for="subject_{{ $subject->id }}">{{ $subject->name }}</label>
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
@endsection
