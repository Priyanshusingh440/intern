<?php include_once('config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<img src="img/a.png" class="img-thumbnail" alt="Cinque Terre">

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="Asset/xyz.mp4"></iframe>
</div>  
<div class="container-fluid" >


<?php

if(isset($_REQUEST['Add'])){ 
	$sql = mysqli_query($conn,'SELECT email From form WHERE email="'.$_REQUEST['email'].'"');
	if(mysqli_num_rows($sql)>0){
	echo	$msg='<div id="message" class="alert alert-danger" style="margin-top:8px; width:22%; margin-left:30%;">User Already Exist!</div>';
	}else{
	  mysqli_query($conn,'insert into form set 
		`name`="'.$_REQUEST['user_name'].'",
    `email`="'.$_REQUEST['email'].'",
    `mobile`="'.$_REQUEST['mobile_number'].'",
    `monthly_salary`="'.$_REQUEST['salary'].'",
    `nationality`="'.$_REQUEST['nation'].'",
    `city`="'.$_REQUEST['city'].'"');
	//	header('location:view_admin_users.php');

	}
}
?>


<form>
  <div class="input-group mb-3" style="margin-top:15px">
    <div class="input-group-prepend">
    <span class="input-group-text"  style="background-color:#3892f2"><i class="fas fa-user"  style="color:white"></i></span>  
    <span class="input-group-text" style="width:70%">Name</span>
    </div>
    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text"  style="background-color:#3892f2"><i class="fas fa-envelope"  style="color:white"></i></span>  
    <span class="input-group-text" style="width:70%">Email</span>
    </div>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text"  style="background-color:#3892f2"><i class="fas fa-mobile"  style="color:white"></i></span>  
    <span class="input-group-text" style="width:70%">Mobile No.</span>
    <span class="input-group-text" style="background-color:white">+91</span>
    </div>
    <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="Mobile Number">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text"  style="background-color:#3892f2"><i class="fas fa-dollar-sign"  style="color:white"></i></span>  
    <span class="input-group-text" style="width:80%">Monthly Salary</span>
    </div>
    <input type="number" class="form-control" id="salary" name="salary" placeholder="Monthly Salary">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text"  style="background-color:#3892f2"><i class="fas fa-flag"  style="color:white"></i></span>  
    <span class="input-group-text" style="width:80%">Nationality</span>
    </div>
    <select name="nation" class="form-control" id="nation">
    <option value="0">Select</option>
    <option value="1">Indian</option>
    <option value="2">Outside of India</option>
    </select>

  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text"  style="background-color:#3892f2"><i class="fas fa-city"  style="color:white"></i></span>  
    <span class="input-group-text" style="width:70%">City</span>
    </div>
    <select id="city" name="city" class="form-control">
    <option value="0">Select</option>
    <option value="1">Indian</option>
    <option value="2">Outside of India</option>
    </select>
  </div>
 <center>
   <!--<button type="button" class="btn btn-primary" name="Add" onclick="add()">Submit</button>-->
   <input type=submit class="btn btn-primary" name="Add" onclick="Add()">
 </center>
</form>
</div>
</body>
</html>