<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


$db_host = "localhost";
$db_name = "sjefam";
$db_username = "root";
$db_password = "";


$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);

$email= $_GET["email"];

$stmt=$db->prepare("SELECT * FROM membre WHERE email=?");

$stmt->execute([$email]);
$data=$stmt->fetchall(PDO::FETCH_ASSOC);


?>


<?php foreach ($data as $membre):?>
<?php
    $_SESSION['email']=$membre['email'];
    
    $email=$membre['email'];
    $pwd=$membre['pwd'];
    $nom=$membre['nom'];
    $prenom=$membre['prenom'];  
    $nmr_tel=$membre['nmr_tel'];
    $pole=$membre['pole'];
    
  ?>
<?php endforeach ; ?>

    <h1>modification</h1>

<form action="change.php?email=<?= $email ?>" method="post">

     <label for="newmail">updatemail</label>
     <input type="email" name="newmail" value="<?= $email?>">

    <br>

     <label for="newmpwd">updatepwd</label>
     <input type="text" name="newpwd" value="<?= $pwd?>">

     <br>

     <label for="newnom">updatenom</label>
     <input type="text" name="newnom" value="<?=$nom?>">

     <br>

    <label for="newprenom">updateprenom</label>
    <input type="text" name="newprenom" value="<?=$prenom?>">

     <br>
     <label for="newnmrtel">updatenmrtel</label>
    <input type="text" name="newnmrtel" value="<?=$nmr_tel?>">

     <br>
     <label for="newpole">pole</label>
    <input type="text" name="newpole" value="<?=$pole?>">

     <br>

     <button type="submit">modifier </button>

</form>

</body>
</html>