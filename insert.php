<!DOCTYPE html>
<!-- saved from url=(0030)http://localhost/sod/login.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><title>Login Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
		}
		.container {
			max-width: 400px;
			margin: 100px auto;
			background: #fff;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		h1 {
			text-align: center;
		}
		form {
			text-align: center;
		}
		input[type="text"],
		input[type="text"],
		input[type="number"],
		input[type="address"],
		button {
			width: 100%;
			padding: 10px;
			margin: 10px 0;
			box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
		}
		button {
			background-color: #4CAF50;
			color: white;
			border: none;
			cursor: pointer;
		}
		button:hover {
			background-color: #45a049;
		}
		a {
    text-decoration: none;
    padding: 10px 20px;
    margin: 0 10px;
    background-color: #008CBA;
    color: white;
    border-radius: 5px;
}
@keyframes div {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  100% {background-color: green;}
}
	</style>
</head>
<body><h1>add students</h1>
  
<div class="container"><form action="" method="post">
 <label for="firstname">firstname</label><br><br>
 <input type="text" name="firstname" id="firstname" required=""><br><br>
 <label for="lastname">lastname</label> <br><br>
 <input type="text" name="lastname" id="lastname" required=""><br><br>
 <label for="age">age</label><br><br>
 <input type="number" name="age" id="age" required=""><br><br>
 <label for="addresss">address</label>
 <input type="address" name="addresss" id="addresss" required=""><br><br>
 <button type="submit" name="add">add_studens</button> 
</form><a href="list.php">select</a>
</div>
<?php

if(isset($_POST['add'])){
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $address=$_POST['addresss'];
  $age=$_POST['age'];
  $con=mysqli_connect("localhost","root","","saltel");
  $insert=mysqli_query($con,"insert into students values('null','$firstname','$lastname','$age','$addresss)");
  if ($insert==true) {
    echo " students is created";
  }else{
    echo "is not created";
  }
}

?>

</body></html>