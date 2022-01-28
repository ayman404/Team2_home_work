<?php

$serveur="localhost";
$user="root";
$pw="";
$bdname="sjefam";


$conn = new PDO("mysql:host=$serveur;dbname=$bdname", $user, $pw);

// $email= $_GET["email"];

// $stmt=$db->prepare("SELECT * FROM membre WHERE email=$email");
// $stmt->execute();
// $data=$stmt->fetchall(PDO::FETCH_ASSOC);

$email= $_GET["email"];



$newmail=$_POST["newmail"];
$newpwd=md5($_POST["newpwd"]);
$newnom=$_POST["newnom"];
$newprenom=$_POST["newprenom"];
$newnmrtel=$_POST["newnmrtel"];
$newpole=$_POST["newpole"];


$stmt = $conn->prepare("UPDATE membre SET email = '$newmail' ,pwd = '$newpwd' , nom = '$newnom' ,prenom='$newprenom',nmr_tel='$newnmrtel',pole='$newpole' WHERE email =? ");
$stmt->execute([$email]);


header("location: homee.php");

?>
