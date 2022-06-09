<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shohan-Crud-app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex justify-content-center mt-5 p-5">
        <section style="width:50%;">
            <div class="d-flex justify-content-center p-3">
                <h1> Crud App</h1>
            </div>

            <div class="text-center p-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Create
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/store">

                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date :</label>
                                        <input type="date" class="form-control" name="date" id="date">
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label"> Name : </label>
                                        <input type="text" name="name" class="form-control" id="name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="list-food" class="form-label">List Food :</label>
                                        <input type="text" name="food" class="form-control" id="list-food">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--table-->
            <table class="table table-striped border shadow-lg p-5 mb-5 bg-body rounded ">
                <thead class="table-success">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Date</th>
                        <th scope="col">Nmae</th>
                        <th scope="col">List Food</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                    <tr>
                        <th scope="row">
                            {{ $todo->id }}
                        </th>
                        <td>
                            {{ $todo->date }}
                        </td>
                        <td>
                            {{ $todo->name }}
                        </td>
                        <td>
                            {{ $todo->food }}
                        </td>
                        <td>
                            <a href="/edit/{{ $todo->id }}" type="button" class="btn btn-outline-success">Edit</a>
                        </td>
                        <td>
                            <a href="/delete/{{ $todo->id }}" type="button" class="btn btn-outline-warning">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
