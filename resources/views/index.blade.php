<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex justify-content-center mt-5 p-5">
        <section style="width:50%;">
            <div class="d-flex justify-content-center mt-5 p-5">
                <h1> Crud App</h1>
            </div>

            <table class="table table-striped border shadow-lg p-5 mb-5 bg-body rounded ">
                <thead class="table-success">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Date</th>
                        <th scope="col">List Food</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            1
                        </th>
                        <td>
                            5/6/2022
                        </td>
                        <td>
                            Egg , potato
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-success">Edit</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-warning">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            2
                        </th>
                        <td>
                            6/6/2022
                        </td>
                        <td>
                            Vagetable
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-success">Edit</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-warning">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            3
                        </th>
                        <td>
                            7/6/2022
                        </td>
                        <td>
                            Chicken
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-success">Edit</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-warning">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
