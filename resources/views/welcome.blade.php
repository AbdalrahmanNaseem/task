@extends('layouts.sidebar')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    body {
        background: #f4f7fa;
    }

    .dashboard-header {
        background: #007bff;
        color: white;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .dashboard-card {
        background: white;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .dashboard-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .welcome-text {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 10px;
    }
</style>

@section('content')
    <div class="container-fluid">
        <div class="container my-5">
            <div class="dashboard-header text-center">
                <h1>Welcome to the Dashboard</h1>
            </div>
            <div class="dashboard-card">
                <p class="welcome-text">Here is some content for the dashboard.</p>
                <p>Feel free to explore the features available to you.</p>
            </div>
        </div>
    </div>
@endsection
