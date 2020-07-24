
<?php

	ob_start();
	session_start();
	

	// if session is not set this will redirect to login page
	if( !isset($_SESSION['admin' ]) && !isset($_SESSION['user']) ) {
	 header("Location: index.php");
	 exit;
	}
if(isset($_SESSION['user'])){
	header("Location: home.php");
	exit;
}
	require_once "db_connect.php";

	if($_GET["id"]){
		$id = $_GET["id"];

		$sql = "DELETE FROM animals WHERE id = $id";

		if(mysqli_query($conn, $sql)) {
			echo "<div class=\"alert alert-success text-center\" role=\"alert\">
							  <h4 class=\"alert-heading\">Well done!</h4>
							  <p>You successfully deleted a pet from the list. You can check it out by clicking on the link below.</p>
							  <hr>
							  <a href='admin.php'>Back to the Homepage</a></p>
							</div>";
		}else {
			echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
							  <strong>Holy guacamole!</strong> Something went wrong.
							  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
							    <span aria-hidden=\"true\">&times;</span>
							  </button>
							</div>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>