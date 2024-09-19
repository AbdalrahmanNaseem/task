<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .form-group {
            display: flex;
            align-items: center;
        }

        .form-group label {
            margin-right: 0;
            width: 25%;
            /* Adjust as needed */
        }

        .form-group input {
            width: 75%;
            /* Adjust as needed */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container my-5 w-50">
            <div class="card shadow-lg border-success mb-3">
                <div class="card-header bg-transparent border-success">
                    <h4 class="text-success">Create New User</h4>
                </div>
                <div class="card-body text-success">
                    <form action="{{ route('subject.store') }}" method="post">
                        @csrf



                        <div class=" row mb-3">
                            <div class="col-12 d-flex justify-content-center">

                                <label for="user_name" class="form-label text-center">Enter your name:</label>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control rounded" name="user_name" id="user_name">

                            </div>



                        </div>

                        <div class="text-center mt-2">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
