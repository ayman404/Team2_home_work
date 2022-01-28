<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
   
    
    <link href="./afficher.css" rel="stylesheet">
    <title>affichage</title>
</head>
<body>
    <h1 style="text-align:center;">les voitures disponibles : </h1>
 <?php
session_start();

$db_host = "localhost";
$db_name = "cars";
$db_username = "root";
$db_password = "";
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);
?>



<?php 
$stmt=$db->prepare("SELECT * FROM sje_cars ");
$stmt->execute();
$data=$stmt->fetchall(PDO::FETCH_ASSOC);
?>

<div class="contenu" style="padding-left:37% ;;">
<?php foreach ($data as $sje_cars): ?>
    <?php
    $_SESSION['matricule']=$sje_cars['matricule'];
    
    $mark=$sje_cars['mark'];
    $color=$sje_cars['color'];
    $km=$sje_cars['km'];
    $tel=$sje_cars['tel'];  
    $fuel=$sje_cars['fuel'];
    $matricule=$sje_cars['matricule'];

  ?>

<table>
<tr>
       <td><strong>mark</strong></td>
       <td><strong>color</strong></td>
       <td><strong>km</strong></td>
       <td><strong>tel</strong></td>
       <td><strong>fuel</strong></td>
       <td><strong>matricule</strong></td>
       <td><strong>modification</strong></td>
   </tr>
   <tr>
   <td><?= $mark ?></td>
   <td><?= $color ?></td>
   <td><?= $km ?></td>
   <td><?= $tel ?></td>
   <td><?= $fuel ?></td>
   <td><?= $matricule ?></td>
   <td><button style="background-color:#55ff00;" onclick="document.location='modify.php?matricule=<?= $matricule ?>'">Modifier</button></td>
 
    <br>
    </tr>
    </table>


<?php endforeach ; ?> 
</div>

</body>
</html>

   
   
