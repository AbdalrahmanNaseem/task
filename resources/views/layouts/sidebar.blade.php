<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* CSS for Sidebar */
        #sidebar {
            height: 100vh;
            background-color: #f8f9fa;
        }

        #sidebar .nav-link {
            padding: 0.75rem 1.25rem;
            color: #333;
        }

        #sidebar .nav-link.active {
            color: #007bff;
            background-color: #e9ecef;
        }

        .sidebar-divider {
            border: 0;
            height: 1px;
            background-color: #007bff;
            margin: 1rem 0;
        }

        .custom-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            text-align: left;
        }

        .custom-btn:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .custom-btn i {
            margin-right: 8px;
        }
    </style>
</head>

<body>
    <div class="  container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="position-sticky">
                    <h4 class="sidebar-title text-light">Dashboard</h4>
                    <hr class="sidebar-divider">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="btn custom-btn w-100 mb-2" href="{{ route('students.index') }}">
                                <i class="bi bi-person"></i>
                                Go to Show Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn custom-btn w-100 mb-2" href="{{ route('subject.index') }}">
                                <i class="bi bi-file-earmark-text"></i>
                                Go to Show Subjects
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="btn custom-btn w-100 mb-2" href="{{ route('Teachers.index') }}">
                                <i class="bi bi-file-earmark-text"></i>
                                Go to Show Teachers
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- Main content -->
            <main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
