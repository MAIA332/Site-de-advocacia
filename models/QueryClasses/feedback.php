<?php

include_once('../../database/connection.php');

$name = $_POST['name'];
$message = $_POST['message'];
$grade;

$_POST['v1'] = (isset($_POST['v1'])) ? $grade = 1 : null;
$_POST['v2'] = (isset($_POST['v2'])) ? $grade = 2 : null;
$_POST['v3'] = (isset($_POST['v3'])) ? $grade = 3 : null;
$_POST['v4'] = (isset($_POST['v4'])) ? $grade = 4 : null;
$_POST['v5'] = (isset($_POST['v5'])) ? $grade = 5 : null;

try{ 
    $con->query("INSERT INTO feedback (name, grade, message, crated_at) VALUES ('$name', '$grade', '$message', '')"); 
    header("Location: ../../web/views/Feedback/splash.html");
}
catch(PDOException $e){
    echo $e-> getMessage();
}

?>