<?php 

ini_set('display_errors', '1');

$db_host = "localhost";
$db_name = "cima";
$db_username = "root";
$db_password = "";


$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);

$query = "INSERT INTO `films`(`title`, `rate`, `year`, `stars`, `des`, `img`) VALUES (?,?,?,?,?,?)";
$stmt = $db->prepare($query);
$img="no.jpg";
if (isset($_FILES['file-input']) && $_FILES['file-input']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['file-input']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['file-input']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        $img=$_FILES['file-input']['name'];
                       
                }
        }
}

if(isset($_POST["title"])){
   
    $data = [$_POST["title"] , $_POST["rate"] , $_POST["year"] , $_POST["stars"] , $_POST["des"] , $img];

    $stmt->execute($data);

}

?>

<?php

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur


if (isset($_FILES['file-input']) && $_FILES['file-input']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['file-input']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['file-input']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['file-input']['tmp_name'], 'images/' . basename($_FILES['file-input']['name']));
                       
                }
        }
}
?>
<!---html--->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Cima</title>
	<link rel="icon" type="image/png" href="images/icon3.jpg" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/bd4d35510f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.checked {
  color: orange;
}
a.button2{
font-size: 1.5rem;
display:inline-block;
padding:1.75em 6em;
border:0.2em solid #000000;
margin:0 6em 0.3em 0;
box-sizing: border-box;
text-decoration:none;
text-transform:uppercase;
font-family:'Roboto',sans-serif;
font-weight:600;
color:#000000;
text-align:center;
transition: all 0.15s;
}
a.button2:hover{
color:#ff4411;
border-color:#ff4411;
}
a.button2:active{
color:#BBBBBB;
border-color:#BBBBBB;
}
@media all and (max-width:30em){
a.button2{
display:block;
margin:0.4em auto;
}
}
/*---modal--*/
.custom-select{
	color: #606060!important;
	display: inline-block;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: 100%;
    font-weight: inherit!important;
   
    line-height: 4.5rem!important;
    
    font-size: 2rem!important;
    
    background: rgba(0,0,0, 0.1)!important;
    border: 0!important;
    border-radius: 3.25rem!important;
    resize: none!important;
    vertical-align: middle!important;
    -webkit-box-shadow: none!important;
    box-shadow: none!important;
    -webkit-transition: all 200ms ease-in-out!important;
    -o-transition: all 200ms ease-in-out!important;
    transition: all 200ms ease-in-out!important;

}
.row1
{
	margin-top: 0px;
    margin-right: 65px!important;
    margin-bottom: 0px;
    margin-left: 0px!important;
}
.modal-dialog {
    width: 756px!important;
    margin: 62px auto!important;
    border-radius: 2rem!important;
}
.section-title  {
	margin-left: 2rem;
}
.space3{
	height: 2rem;
}
.hero-btn2{
 	display: inline-block;
 	text-decoration: none;
 	color: white;
    background-color:#848abd;
 	border: none;
 	border-radius:1.5rem;	
 	padding: 12px 34px;
 	font-size: 14px;
 	position: relative;
 	cursor: pointer;
 }

 .hero-btn2:hover{
 	box-shadow: 0px 0px 0px 5px #c0c0c0;
 }
.form-control{
	display: inline-block;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: 100%;
    font-weight: inherit!important;
    height: 4.5rem!important;
    line-height: 4.5rem!important;
    padding: 0 2rem!important;
    font-size: 2rem!important;
    color: #606060!important;
    background: rgba(0,0,0, 0.1)!important;
    border: 0!important;
    border-radius: 3.25rem!important;
    resize: none!important;
    vertical-align: middle!important;
    -webkit-box-shadow: none!important;
    box-shadow: none!important;
    -webkit-transition: all 200ms ease-in-out!important;
    -o-transition: all 200ms ease-in-out!important;
    transition: all 200ms ease-in-out!important;
}
.modal-content{
	height: 450px;
	width:759px;

}
.column img{
	height: 500px;
	width: auto;
}
.column {
  float: left;
  width: 50%;
  padding: 0px;
  height: 500px; 
}


.row1:after {
  content: "";
  display: table;
  clear: both;
  height: 100%;

}
/*---end-modal--*/


</style>

</head>
<body>

		<!-- Jumbotron -->
  <div class="col" style="background-image: url('images/cima.jpg');">

	  <div class="space">
      <div class="space3"></div>
      <div class="center" >

<a href="index.php"class="button2" type="button"  data-toggle="modal2" data-target="#myModal2">Go Back</a>
</div>

    <h1 class="page_title"style="font-weight: 800;">We added ur movie </h1>
    
    </div>
    <!-- 
    <div class="divider"><svg xmlns="http://www.w3.org/2000/svg" class="light" preserveAspectRatio="none" viewBox="0 0 1070 20.98">
          <path d="M0,0V21H1070V0A6830.24,6830.24,0,0,1,0,0Z" /></svg></div>
   </div>  -->

    <!-- Jumbotron -->
    </body>


</html>