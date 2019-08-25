<?php

function connect(){
    $pdo = new PDO('mysql:host=localhost;dbname=cars','root','');
    return $pdo;
}
