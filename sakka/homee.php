<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./homee.css" rel="stylesheet">
    <title>home</title>
</head>
<body>
    <h1>welcom to SJE Family</h1>
<?php
session_start();

$db_host = "localhost";
$db_name = "sjefam";
$db_username = "root";
$db_password = "";
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);
?>



<?php 
$stmt=$db->prepare("SELECT * FROM membre ");
$stmt->execute();
$data=$stmt->fetchall(PDO::FETCH_ASSOC);
?>


<?php foreach ($data as $membre): ?>
    <?php
    $_SESSION['email']=$membre['email'];
    
    $email=$membre['email'];
    $pwd=$membre['pwd'];
    $nom=$membre['nom'];
    $prenom=$membre['prenom'];  
    $nmr_tel=$membre['nmr_tel'];
    $pole=$membre['pole'];

  ?>

    <li>
    <?= $email ?> - <?= $pwd ?> - <?= $nom ?> - <?= $prenom ?> - <?= $nmr_tel ?> - <?= $pole ?>
    <a style="float:right" href="modifier.php?email=<?= $email ?>">modifier</a>
    <br>
    </li>


<?php endforeach ; ?>


</body>
</html>