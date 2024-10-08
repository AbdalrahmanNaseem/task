@extends('layouts.sidebar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .form-container {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .button-wrapper {
        text-align: center;
    }
</style>

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="container   w-50">
            <span class="">
                <div class="card shadow-lg rounded">
                    <div class="card-header">
                        <h3 class="card-title">
                            Enter new data :
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-container">
                            <form action="{{ route('subject.update', $subject) }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="New_user_name" class="col-12 col-form-label text-center">Enter your new
                                        name :</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control rounded"
                                            value="{{ old('New_user_name', $subject->name) }}" name="New_user_name"
                                            id="New_user_name">
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
            </span>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
