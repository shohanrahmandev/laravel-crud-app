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



        <section style="width: 40%;">

            <h1 class="d-flex justify-content-center mt-5 p-5"> Insert Data App </h1>



            <form class=" border shadow-lg p-3 mb-5 bg-body rounded" action="/save">

                <hr>
                <div class="mb-3 col-5">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <hr>
                <div class="mb-3 col-5">
                    <label for="password" class="form-label"> Password : </label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <hr>
                <div class="mb-3 col-5">
                    <label for="website" class="form-label">Website :</label>
                    <input type="text" name="website" class="form-control" id="website">
                </div>
                <hr>


                <button type="submit" class="btn btn-success">Insert</button>
            </form>

        </section>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
