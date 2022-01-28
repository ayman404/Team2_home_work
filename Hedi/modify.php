<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./formstyle.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>affichage</title>
</head>
<body>
    
<?php
session_start();

$db_host = "localhost";
$db_name = "cars";
$db_username = "root";
$db_password = "";
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);


$matricule= $_GET["matricule"];

?>

<?php 
$stmt=$db->prepare("SELECT * FROM sje_cars WHERE matricule= ?");
$stmt->execute([$matricule]);
$data=$stmt->fetchall(PDO::FETCH_ASSOC);
?>


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
<form action="changee.php?matricule=<?= $matricule ?>" method="post">

    
<main class ="all">
    <div class="titre">
 <h1>Modifier Ici!</h1>
 <i class="fas fa-car car"></i>
</div>

 <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Marque :</label>
     <input type="text" class="form-control" id="modele" placeholder="volkswagen,toyota,.." name="newmark" value="<?= $mark?>">
   </div>
   <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Couleur du véhicule :</label>
     <input type="text" class="form-control" id="color"  name="newcolor" value="<?= $color?>">
   </div>
   <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">matricule   :</label>
     <input type="text" class="form-control" id="annee" name="newmatricule" value="<?= $matricule?>">
   </div>
   <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Kilometrage :</label>
     <input type="text" class="form-control" id="kilometrage" name="newkm"value="<?= $km?>">
   </div>

   <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Phone number :</label>
     <input type="text" class="form-control" name="newtel" id="newtel" value="<?= $tel?>">
   </div> 
   <p>choisir le type du carburant :</p>
   <input type="radio" id="gazoline" name="newfuel" value="Gasoline" >
  <label for="">gasoline</label><br>
  <input type="radio" id="diesel" name="newfuel" value="Diesel">
  <label for="">diesel </label><br><br>
  
 <input type="submit" value="Submit" >
 </main>
</form>


<?php endforeach ; ?>


</body>
</html>