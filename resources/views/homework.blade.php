<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shohan-crud-app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <h2 class=" d-flex justify-content-center mt-5 p-5"> Homwork </h2>

    <h4 class="text-center text-capitalize">
        <a href="/" class="btn btn-success">Back</a>
    </h4>
    <h4 class="text-center text-capitalize">
        <a href="/insert" class="btn btn-success">insert</a>
    </h4>

    <div class="container d-flex justify-content-center mt-5 p-5">



        <table class="table table-hover table table-striped border shadow-lg p-5 mb-5 bg-body rounded ">
            <thead class="table-primary">
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Website</th>
                    <th>Edit</th>
                    <th>Delate</th>
                </tr>
            </thead>
            <tbody>

                @foreach ( $tudus as $tudu )


                <tr>
                    <td>{{ $tudu->id }}</td>
                    <td>{{ $tudu->email }}</td>
                    <td>{{ $tudu->password }}</td>
                    <td>{{ $tudu->website }}</td>
                    <td>
                        <button type="button" class="btn btn-outline-success">Edit</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-warning">Delete</button>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
