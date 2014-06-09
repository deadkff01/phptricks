<?php
require "database.php";

	if(!empty($_POST)){
	$nameError = null;
	$emailError = null;
	
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$isValid = true;
	if(empty($name)){
	$nameError = "Please enter with your Name";
	$isValid = false;
	}
	if(empty($email)){
	$emailError = "Please enter with your Email ";
	$isValid = false;
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$emailError = "Enter whit a valid Email";
	$isValid = false;
	}

	if($isValid){
	
	  $pdo = Database::connect();
	   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "INSERT INTO customers(name, email) values(?, ?)";
	  $q = $pdo->prepare($sql);
	  $q->execute(array($name, $email));
		header("Location: index.php");
	}
	
	}


?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">

             <form action="insert.php" method="POST">
			 
			 Nome: <input type="text" name="name"/> 
			 <?php if (!empty($nameError)) : 
			                echo $nameError;
                            endif; ?>

			 Email: <input type="text" name="email"/> 
			 <?php if (!empty($emailError)) :  
			                  echo $emailError; 
			                  endif;?>
			 <input type="submit" value="Enviar" />
			 </form>
   <center>
       <a href="index.php" class="btn ">Back</a>
   </center>
   </div>
  
  </body>
</html>
