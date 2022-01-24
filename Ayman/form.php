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
/*body {
  font-family: sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 200px;
}*/

.file-input__input {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}

.file-input__label {
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  border-radius: 4px;
  font-size: 14px;
  font-weight: 600;
  color: #fff;
  font-size: 14px;
  padding: 10px 12px;
  background-color: #ff4411;
  box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
}

.file-input__label svg {
  height: 16px;
  margin-right: 4px;
}



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

    <h1 class="page_title"style="font-weight: 800;">Enter the movie info</h1>
    
  
    </div>
    <!-- 
    <div class="divider"><svg xmlns="http://www.w3.org/2000/svg" class="light" preserveAspectRatio="none" viewBox="0 0 1070 20.98">
          <path d="M0,0V21H1070V0A6830.24,6830.24,0,0,1,0,0Z" /></svg></div>
   </div>  -->

    <!-- Jumbotron -->
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="row1">
  <div class="column" >
  	<img src="images/add.png">
    
  </div>
  <div class="column" style="background-color:#fff;">
  	<button type="button" class="close" data-dismiss="modal">&times;</button>
  	<!-- form-->
    <h2 class="section-title">Update a movie</h2>
    <div class="space3"></div>
                        <form action="update.php" method="post" enctype="multipart/form-data">
                          <div class="form-row1">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="string" class="form-control" name="title" placeholder="Title">
                              </div>
                              <div class="space3"></div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="integer" class="form-control" name="rate" placeholder="Rate">
                              </div>

                            </div>
                          </div>
                          <div class="form-row1">
                            <div class="col-md-12">
                              <div class="form-group">
                                <input type="integer" class="form-control"  name="des" placeholder="description">
                              </div>
                              <div class="space3"></div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                              <div class="file-input">
      <input type="file" name="file-input" id="file-input" class="file-input__input" />
      <label class="file-input__label" for="file-input">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload" class="svg-inline--fa fa-upload fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" >
          <path fill="currentColor" d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z" ></path>
        </svg>
        <span>Upload photo</span></label >
    </div>
                              <div class="space3"></div>
                            </div>
                          </div>
                          <div class="form-row1">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" name="year" placeholder="Year">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                              <input type="text" class="form-control"  name="stars" placeholder="Stars">
                              </div>
                              <div class="space3"></div>
                            </div>
                          </div>
                          <div class="form-row1">
                            <div class="col-md-12">
                            
                              <button type="submit" class="hero button2" style="font-size: 2rem!important; background-color: #ff4411;font-size: 2rem!important; background-color: #ff4411; color: white ;border: none; border-radius: 0.5rem; width: 8rem;height: 3.75rem;" >Update</button>
                            </div>
                          </div>
                        </form>
                        <!-- form-->
  </div>
</div>
      
    </div>
  </div>
  <script type="text/javascript">
	$(window).load(function()
{
    $('#myModal').modal('show');
});
</script>
  </body>


</html>