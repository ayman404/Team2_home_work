<?php

$serveur="localhost";
$user="root";
$pw="";
$bdname="cars";


$conn = new PDO("mysql:host=$serveur;dbname=$bdname", $user, $pw);

// $matricule= $_GET["matricule"];

// $stmt=$db->prepare("SELECT * FROM membre WHERE email=$email");
// $stmt->execute();
// $data=$stmt->fetchall(PDO::FETCH_ASSOC);

$matricule= $_GET["matricule"];



$newmark=$_POST["newmark"];
$newcolor=$_POST["newcolor"];
$newkm=$_POST["newkm"];
$newtel=$_POST["newtel"];
$newfuel=$_POST["newfuel"];
$newmatricule=$_POST["newmatricule"];


$stmt = $conn->prepare("UPDATE sje_cars SET  mark = '$newmark' , color = '$newcolor' ,km='$newkm',tel ='$newtel',fuel='$newfuel',matricule = '$newmatricule'  WHERE matricule =? ");
$stmt->execute([$matricule]);


header("location: afficher.php");

?>
