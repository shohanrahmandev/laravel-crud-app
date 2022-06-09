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



        <section style="width: 30%;">

            <h1 class="d-flex justify-content-center mt-5 p-5"> Crud Update App </h1>

            <form class=" border shadow-lg p-3 mb-5 bg-body rounded" action="/update/{{ $todo->id }}">

                <hr class="text-danger border-2 opacity-100">
                <div class="mb-3 col-3">
                    <label for="date" class="form-label">Date :</label>
                    <input type="date" name="date" class="form-control" id="date" value="{{ $todo->date }}">
                </div>
                <hr class="text-danger border-2 opacity-100">
                <div class="mb-3 col-5">
                    <label for="date" class="form-label">Name :</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $todo->name }}">
                </div>
                <hr class="text-danger border-2 opacity-100">
                <div class="mb-3 col-5">
                    <label for="text" class="form-label">List Food :</label>
                    <input type="text" name="food" class="form-control" id="food" value="{{ $todo->food }}">
                </div>
                <hr class="text-danger border-2 opacity-100">


                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>

        </section>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
