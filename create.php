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
    <div class="col-sm-3">
    <input type="text" name="make" id="make" class="form-control">
    </div>
    </div>

    <?php
for($i= 1; $i < 6; $i++){
    echo '<div class="form-group row">';
    echo '<label for="model_'.$i.'" class="col-sm-1 col-form-label">';
    echo "Model ".$i;
    echo "</label>";
    echo '<div class="col-sm-3">';
    echo '<input class="form-control" type="text" name="model_'.$i.'" id="model_'.$i.'">';
    echo "</div>";
    echo "</div>";
}
?>
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