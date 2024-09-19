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
            <div class="col-6 text-end"> <a href="{{ route('subject.create') }}" class="btn  btn-Secondary">
                    creat_subject</a>
            </div>s
        </div>
        <div class="card-body">

            <div class="row mb-3">
                <div class="col-2">
                    <h5>ID: </h5>
                </div>
                <div class="col-3">
                    <h5>Name: </h5>
                </div>

                <div class="col-3">
                    <h5>edit Button:</h5>
                </div>

                <div class="col-3">
                    <h5>delet Button:</h5>
                </div>


            </div>
            @foreach ($subjects as $subject)
                <div class="row mb-3">
                    <div class="col-1">
                        <h5> {{ $subject->id }}</h5>
                    </div>
                    <div class="col-3">
                        <h5> {{ $subject->name }}</h5>
                    </div>





                    <div class="col-3 ms-0">
                        <a href="{{ route('subject.edit', $subject) }}" class="btn btn-dark ms-3">Edit</a>

                    </div>

                    <div class="col-3">
                        <form action="{{ route('subject.delete', $subject) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </div>
                <hr>
            @endforeach
            <a class="btn btn-danger" href="{{ route('students.index') }}">go to show student</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
