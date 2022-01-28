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


?>


    <h1>Creat SJE account</h1>
    <div class="regsiter">
            <form action="register.php" method="post">

                <label for="email_reg">Email:</label>
                <input type="email" name="email_reg" required>

                <br><br>

                <label for="pwd_reg">password</label>
                <input type="password" name="pwd_reg"required>

                <br><br>

                <label for="nom_reg">nom:</label>
                <input type="text" name="nom_reg" required>

                <br><br>


                <label for="prenom_reg">prénom</label>
                <input type="text" name="prenom_reg" required>

                <br><br>


                <label for="nmr_tel_reg">nmr_tel</label>
                <input type="text" name="nmr_tel_reg" required>

                <br><br>

                <br><br>

                <label for="pole_reg">Pole</label>
                <br><br>   
                <input type="checkbox" name="member_pole[]" value="pole_projet"> 
                <label for="pole_projet">pole_projet</label>
                
                <br><br>

                <input type="checkbox" name="member_pole[]" value="pole_devco">
                <label for="pole_devco">pole développement commerciale et partenariat</label>

                <br><br>


                <input type="checkbox" name="member_pole[]" value="pole_marketing">
                <label for="pole_marketing">pole marketing</label>


                <br><br>

                <input type="checkbox" name="member_pole[]" value="pole_RH">
                <label for="pole_RH">pole Ressources humaines et formations </label>


                
                <br><br>


                <input type="submit" value="Register">



            </form>

        </div>


</body>
</html>
