<?php

session_start();

if(@$_POST['submit1'])

{

	$u = $_POST['text1'];

	$p = $_POST['pwd'];

	if($u =="bilal" && $p=="123")

	{

	$_SESSION['luser'] = $u;

	$_SESSION['start'] = time();

	 // taking now logged in time
	$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ; 

	// ending a session in 1  minutes from the starting time
	header('Location: HomePage.php');

	}

	else

	{

	$err= "<font color='red'>Invalid user login </font>";

	}

}

?>







<html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  
 
 <!-- Login Form-->

 <div class="container my-5 col-xl-3 mx-auto  ">
 <h1 class="text-center">Login</h1>
 <form method=post ">
 
  <div class="mb-2  ">
     
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control"  name="text1"  placeholder="Enter Username" required>
  </div>
  <div class="mb-3  ">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"  name="pwd" placeholder="Enter Password" required>
  </div>
  
  <div class="d-grid gap-2 col-6 col-xl-4 mx-auto">
  <button type="submit" class="btn btn-primary"  value="SignIn" name="submit1">LOGIN</button>
  </div>
</form> 
 </div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>








