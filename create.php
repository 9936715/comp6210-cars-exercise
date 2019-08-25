<?php
include_once('helpers/functions.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Create</title>
</head>
<body>
<div class="container">
    <h1>Create</h1>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div class="form-group row">
    <label for="make" class="col-sm-1 col-form-label">
    Make
    </label>
    <div class="col-sm-5">
    <input type="text" name="make" id="make">
    </div>
    </div>

    <div class="form-group row">
    <label for="model_1" class="col-sm-1 col-form-label">
    Model 1
    </label>
    <div class="col-sm-5">
    <input type="text" name="model_1" id="model_1">
    </div>
    </div>

    <div class="form-group row">
    <label for="model_2" class="col-sm-1 col-form-label">
    Model 2
    </label>
    <div class="col-sm-5">
    <input type="text" name="model_2" id="model_2">
    </div>
    </div>

    <div class="form-group row">
    <label for="model_3" class="col-sm-1 col-form-label">
    Model 3
    </label>
    <div class="col-sm-5">
    <input type="text" name="model_3" id="model_3">
    </div>
    </div>

    <div class="form-group row">
    <label for="model_4" class="col-sm-1 col-form-label">
    Model 4
    </label>
    <div class="col-sm-5">
    <input type="text" name="model_4" id="model_4">
    </div>
    </div>

    <div class="form-group row">
    <label for="model_5" class="col-sm-1 col-form-label">
    Model 5
    </label>
    <div class="col-sm-5">
    <input type="text" name="model_5" id="model_5">
    </div>
    </div>
    
    <div class="form-group row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-5">
    <input type="button" name="cancel" value="Cancel" class="btn btn-outline-dark" onclick="window.history.back()">
    <input type="submit" name="submitCreate" value="Create" class="btn btn-primary">
    </div>
    </div>
    </form>
</div>
</body>
</html>