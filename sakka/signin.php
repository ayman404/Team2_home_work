<?php

session_start();

$serveur="localhost";
$user="root";
$pw="";
$bdname="sjefam";


$conn = new PDO("mysql:host=$serveur;dbname=$bdname", $user, $pw);

// insert row in users

$email_sig=$_POST["email_sig"];
$pwd_sig=$_POST["pwd_sig"];

$stmt=$conn->prepare("SELECT email FROM membre WHERE email=? and pwd=?");
$stmt->execute([$email_sig , md5($pwd_sig)]);

$data=$stmt->fetchall(PDO::FETCH_ASSOC);

if(count($data)==1){
    $var=$data[0];
    $_SESSION['email']=$var['email'];
    // var_dump($_SESSION);
    // echo "Connected";   
    header("location: homee.php");
}

else{
    header("location: logg.php");
}
