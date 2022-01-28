<?php 

ini_set('display_errors', '1');

$db_host = "localhost";
$db_name = "sjefam";
$db_username = "root";
$db_password = "";


$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);

$query = "INSERT INTO `membre`(`email`,`pwd`,`nom`,`prenom`, `nmr_tel`,`pole`) VALUES (?,?,?,?,?,?)";
$stmt = $db->prepare($query);

if(isset($_POST["email_reg"])){
    $pole = "";
    if(!empty($_POST['member_pole'])) {   

        foreach($_POST['member_pole'] as $value){
            $pole .=  $value.',';
        }
    }
    $data = [$_POST["email_reg"] , md5($_POST["pwd_reg"]),$_POST["nom_reg"] , $_POST["prenom_reg"] , $_POST["nmr_tel_reg"],$pole];

    $stmt->execute($data);
 

}
header("location: logg.php");
