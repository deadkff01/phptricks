<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">

	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">


          <table class="bordasimples" >
		 <thead>
		  <tr>
		     <th>Name</th>
             <th>Email Adress</th>
			<th>Action</th>
		  </tr>
		</thead>
		  
		<tbody>
		  <?php 
		  include 'database.php';
		  $pdo = Database::connect();
		  $sql = "SELECT * FROM customers ORDER BY id DESC";
		  
		  foreach($pdo->query($sql) as $row){
				echo 	'<tr>';
				echo 	'<td>'. $row['name'].'</td>';
				echo 	'<td>'. $row['email'].'</td>';
				echo 	'<td> <a class="btn" href="read.php?id='.$row['id'].'  ">Read </a> 
				<a class="btn updatebtn" href="update.php?id='.$row['id'].'  ">Update </a>
				<a class="btn deletebtn" href="delete.php?id='.$row['id'].'  ">Delete </a>
				</td>';
				echo	'</tr>';
		  }
		  Database::disconnect();
		  ?>
		 	</tbody>
		  </table>
   	<a href="insert.php" class="btn insertbtn">Insert</a>
   </div>
  </body>
</html>
