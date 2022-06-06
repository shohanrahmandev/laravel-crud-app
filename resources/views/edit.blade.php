<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <form class="form-horizontal" action="index.php">
            <div class="form-group" style="margin-top:10%;">
                <label class="control-label col-sm-2">Date:</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="pwd" placeholder="Enter date" name="pwd">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">List :</label>
                <div class=" col-sm-3">
                    <input type="text" class="form-control" id="pwd" placeholder="Enter list" name="pwd">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
