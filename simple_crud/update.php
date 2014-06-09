<?php
require "database.php";

	$id = null;
	if(!empty($_GET['id'])){
	 $id = $_REQUEST['id'];
	}
	if($id == null){
	header("Location: index.php");
	}

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
	  $sql = "UPDATE customers SET name = ?, email = ? where id = ?";
	  $q = $pdo->prepare($sql);
	  $q->execute(array($name, $email, $id));
		header("Location: index.php");
	}
	
	}else{
	$pdo = Database::connect();
	   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "SELECT * FROM customers WHERE id = ?";
	  $q = $pdo->prepare($sql);
	  $q->execute(array($id));
	  $data = $q-> fetch(PDO::FETCH_ASSOC);
	  $name = $data['name'];
	$email = $data['email'];
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

             <form action="update.php?id=<?php echo $id?>" method="POST">
			 
			 Nome: <input type="text" name="name" value=" <?php echo !empty($name)? $name: ' ';?>"/> 
			 <?php if (!empty($nameError)) : 
			                echo $nameError;
                            endif; ?>

			 Email: <input type="text" name="email" value="<?php echo !empty($email)? $email: ' ';?>"/> 
			 <?php if (!empty($emailError)) :  
			                  echo $emailError; 
			                  endif;?>
			 <input type="submit" value="Enviar" />       <a href="index.php" class="btn ">Back</a>
			 </form>

   </div>
  
  </body>
</html>
