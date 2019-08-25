<?php
include_once("helpers/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Delete</title>
</head>
<body>
<div class="container">
<h1>Delete</h1>
<br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type=hidden name="id" id="id" value="<?php echo $car->id;?>">
    <div class="form-group row">
    <label for="make" class="col-sm-1 col-form-label">
    Make
    </label>
    <div class="col-sm-3">
    <input type="text" name="make" id="make" value="<?php echo $car->make?>" class="form-control" disabled>
    </div>
    </div>
<?php
$num=1;
foreach($car->models as $model){
    echo '<div class="form-group row">';
    echo '<label for="model_'.$num.'" class="col-sm-1 col-form-label">';
    echo "Model ".$num;
    echo "</label>";
    echo '<div class="col-sm-3">';
    echo '<input disabled class="form-control" type="text" name="model_'.$num.'" id="model_'.$num.'" value="'.$model.'">';
    echo "</div>";
    echo "</div>";
    $num++;
}
?>
<div class="form-group row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-3">
    <input type="button" name="cancel" value="Cancel" class="btn btn-outline-dark" onclick="window.history.back()">
    <input type="submit" name="submitDelete" value="Delete" class="btn btn-primary">
    </div>
    </div>
    </form>
</body>
</html>