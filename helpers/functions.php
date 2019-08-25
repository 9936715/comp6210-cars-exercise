<?php

include_once("connection.php");
include_once("./cars.php");

if(isset($_GET['id']))
{
    $db = connect();
    $id = $_GET['id'];
    $query = "SELECT * FROM cars WHERE id = :id";
    $params = [":id"=>$id];
    $stmt = $db->prepare($query);
    $stmt->execute($params);
    $results = $stmt->FETCHALL();

    $car;

    foreach($results as $r){
        $car = new car($id, $r['make'], [$r['model_1'], $r['model_2'], $r['model_3'], $r['model_4'], $r['model_5']]);
    }
}
else if (isset($_POST['submitCreate'])) {
    $car = new car(0, $_POST['make'], [$_POST['model_1'], $_POST['model_2'], $_POST['model_3'], $_POST['model_4'], $_POST['model_5']]);

    $db = connect();
    $query = "INSERT INTO cars (make, model_1, model_2, model_3, model_4, model_5) VALUES (:make, :model_1, :model_2, :model_3, :model_4, :model_5)";
    $params = [":make"=>$car->make, ":model_1"=>$car->models[0], ":model_2"=>$car->models[1], ":model_3"=>$car->models[2], ":model_4"=>$car->models[3], ":model_5"=>$car->models[4]];
    $stmt = $db->prepare($query);
    $stmt->execute($params);

    header('Location: http://'.$_SERVER['HTTP_HOST']);
    die();
}
else if(isset($_POST['submitUpdate']))
{
    $db = connect();
    
    $car = new car($_POST['id'], $_POST['make'], [$_POST['model_1'], $_POST['model_2'], $_POST['model_3'], $_POST['model_4'], $_POST['model_5']]);

    $query = "UPDATE cars SET make = :make, model_1 = :model_1, model_2 = :model_2, model_3 = :model_3, model_4 = :model_4, model_5 = :model_5 WHERE id = :id";
    $params = [":id"=>$car->id, ":make"=>$car->make, ":model_1"=>$car->models[0], ":model_2"=>$car->models[1], ":model_3"=>$car->models[2], ":model_4"=>$car->models[3], ":model_5"=>$car->models[4]];
    $stmt = $db->prepare($query);
    $stmt->execute($params);

    header('Location: http://'.$_SERVER['HTTP_HOST']);
    die();
}
else if(isset($_POST['submitDelete']))
{
    $db = connect();
    
    $id = $_POST['id'];

    $query = "DELETE FROM cars WHERE id = :id";
    $params = [":id"=>$id];
    $stmt = $db->prepare($query);
    $stmt->execute($params);

    header('Location: http://'.$_SERVER['HTTP_HOST']);
    die();
}


function getAll(){
$db = connect();
$query = 'SELECT * FROM cars';
$stmt = $db->prepare($query);
$stmt->execute();
$results = $stmt->FETCHALL();

$cars = [];

foreach($results as $r){
    $car =  new car($r['id'], $r['make'], [$r['model_1'], $r['model_2'], $r['model_3'], $r['model_4'], $r['model_5']]);
    array_push($cars, $car);
}

return $cars;
}
?>