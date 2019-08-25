<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cars</title>
</head>
<body>
<div class="container">
<h1>Cars</h1>
<br>
<a class="btn btn-primary" href="create.php" role="button">Create</a>
<br>
<br>
<table class="table">
<thead>
<tr>
<th>Id</th><th>Make</th><th>Model 1</th><th>Model 2</th><th>Model 3</th><th>Model 4</th><th>Model 5</th><th>Action</th>
</tr>
</thead>
<tbody>
<?php
include_once('helpers/functions.php');

$cars = getAll();

foreach($cars as $car){
    echo "<tr>";
    echo "<td>".$car->id."</td>";
    echo "<td>".$car->make."</td>";

    foreach($car->models as $model){
        echo "<td>".$model."</td>";
    }

    echo '<td><a class="btn btn-outline-primary" href="update.php?id='.$car->id.'">Update</a> <a class="btn btn-outline-danger" href="delete.php?id='.$car->id.'">Delete</a></td>';
    echo "</tr>";
}
?>
</tbody>
</table>
</div>
</body>
</html>