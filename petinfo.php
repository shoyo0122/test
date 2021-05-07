<?php 
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
}
if (!empty($_POST['age'])) {
    $age = $_POST['age'];
}
if (!empty($_POST['weight'])) {
    $weight = $_POST['weight'];
}
if (!empty($_POST['food'])) {
    $food = $_POST['food'];
}

$username = "root";
$password = "";

try {
    $dbh = new PDO('mysql:host=localhost; dbname=calorie; charset=utf8mb4', 
    $username, $password);
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

$sql = "SELECT * FROM petinfo";

$result = $dbh->prepare($sql);
$result->execute();

while($row = $result->fetchAll()){
    $rows[] = $row;
}
?>

<h1><?php if(!empty($rows[''])) {
    echo $rows[''];
}  ?></h1>