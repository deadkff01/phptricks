<?php

	require 'database.php';
	
	$id = null;
	
	if(!empty($_GET['id'])){
	$id = $_REQUEST['id'];
	}
	
	if($id == null){
	header("Location: index.php");
	
	}else{
	  $pdo = Database::connect();
	   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "SELECT* FROM customers WHERE id = ?";
	  $q = $pdo->prepare($sql);
	  $q->execute(array($id));
	  $data = $q->fetch(PDO::FETCH_ASSOC);
	
	Database::disconnect();
	}

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	<style>

 </style>
</head>

<body>
<div id="container">

       <label><b>Name: </b> <?php echo $data['name'];?></label>
   <label><b>Email: </b><?php echo $data['email'];?></label>
   
      <a href="index.php" class="btn ">Back</a>
   </div>
  </body>
</html>
