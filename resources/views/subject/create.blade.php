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
    <div class="container-fluid">
        <div class="container my-5 w-50">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-Primary text-white">
                    <h4 class="mb-0">Create New User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('subject.store') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <label for="user_name" class="form-label">Enter your name:</label>
                                <input type="text" class="form-control rounded mt-2" name="user_name" id="user_name"
                                    placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-auto">
                                <a href="{{ route('subject.index') }}" class="btn btn-primary">Back</a>
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
