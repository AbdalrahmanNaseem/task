<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="card shadow m-5 mb-0">
        <div class="card-head row ">
            <div class="col-6">users</div>
            <div class="col-6 text-end"> <a href="{{ route('to.creat.students') }}" class="btn  btn-Secondary">
                    go_to_creat_student</a>
            </div>
        </div>
        <div class="card-body">

            <div class="row mb-3">
                <div class="col-1">
                    <h5>ID: </h5>
                </div>
                <div class="col-2">
                    <h5>Name: </h5>
                </div>
                <div class="col-2">
                    <h5>Email:</h5>
                </div>
                <div class="col-2">
                    <h5>phone:</h5>
                </div>
                <div class="col-1">
                    <h5>edit Button:</h5>
                </div>

                <div class="col-2">
                    <h5>delet Button:</h5>
                </div>


            </div>
            @foreach ($students as $student)
                <div class="row mb-3">
                    <div class="col-1">
                        <h5> {{ $student->id }}</h5>
                    </div>
                    <div class="col-2">
                        <h5> {{ $student->name }}</h5>
                    </div>
                    <div class="col-2">
                        <div class="row ">
                            <h5> {{ $student->email }}</h5>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="row ">
                            <h5> {{ $student->phone }}</h5>
                        </div>
                    </div>


                    <div class="col-1 ms-0">
                        <a href="{{ route('edit.student', $student) }}" class="btn btn-dark ms-3">Edit</a>

                    </div>

                    <div class="col-2">
                        <form action="{{ route('delete.student', $student) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </div>
                <hr>
            @endforeach

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
