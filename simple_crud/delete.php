<?php
require "database.php";

	$id = 0;
	if(!empty($_GET['id'])){
	 $id = $_REQUEST['id'];
	}
	if(!empty($_POST)){
	
	$id = $_POST['id'];
//delete data
  $pdo = Database::connect();
	   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "DELETE FROM customers where id = ?";
	  $q = $pdo->prepare($sql);
	  $q->execute(array($id));
	  Database::disconnect();
		header("Location: index.php");
}
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h2>Delete</h2>
<div id="container">

             <form action="delete.php" method="POST">
			 <input type="hidden" name="id" value="<?php echo $id;?>"/>
		<h3>Are you sure to delete?</h3>
			 <input type="submit" value="Yes" /><a href="index.php" class="btn ">Back</a>
			 </form>
 
   </div>
  
  </body>
</html>
