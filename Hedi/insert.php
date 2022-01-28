<?php 

ini_set('display_errors', '1');

$db_host = "localhost";
$db_name = "cars";
$db_username = "root";
$db_password = "";


$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);

$query = "INSERT INTO `sje_cars`(`mark`,`color`,`km`,`tel`,`fuel`,`matricule`) VALUES (?,?,?,?,?,?)";
$stmt = $db->prepare($query);

// if(isset($_POST["fuel"])){
//     $pole = "";
//     if(!empty($_POST['member_pole'])) {   

//         foreach($_POST['member_pole'] as $value){
//             $pole .=  $value.',';
//         }
//     }
//     $data = [$_POST["email_reg"] , md5($_POST["pwd_reg"]),$_POST["nom_reg"] , $_POST["prenom_reg"] , $_POST["nmr_tel_reg"],$pole];

//     $stmt->execute($data);
 

// }
$data = [$_POST["mark"] , $_POST["color"] , $_POST["km"] , $_POST["tel"],$_POST["fuel"],$_POST["matricule"]];

$stmt->execute($data);
 header("location: afficher.php");
