<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset ="utf-8">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
    <script src="https://kit.fontawesome.com/08a813f3f5.js" crossorigin="anonymous"></script>
    <title>Welcome to tunisian car market</title>
</head>
<body>
  
</body>
</html>

<body>
<form action="insert.php" method="post">

    
    <main class ="all">
        <div class="titre">
     <h1>Welcome to tunisian car market !</h1>
     <i class="fas fa-car car"></i>
 </div>
    
     <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Marque :</label>
         <input type="text" class="form-control" id="modele" placeholder="volkswagen,toyota,.." name="mark">
       </div>
       <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Couleur du véhicule :</label>
         <input type="text" class="form-control" id="color"  name="color">
       </div>
       <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">matricule   :</label>
         <input type="text" class="form-control" id="annee" name="matricule" >
       </div>
       <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Kilometrage :</label>
         <input type="text" class="form-control" id="kilometrage" name="km">
       </div>

       <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Phone number :</label>
         <input type="text" class="form-control" name="tel" id="tel" >
       </div> 
       <p>choisir le type du carburant :</p>
       <input type="radio" id="gazoline" name="fuel" value="Gasoline">
   <label for="">gasoline</label><br>
   <input type="radio" id="diesel" name="fuel" value="Diesel">
   <label for="">diesel </label><br><br>
   
     <input type="submit" value="Submit" >
     </main>
 </form>
</body>



</html>