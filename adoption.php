<?php
	session_start();
	require_once "db_connect.php";

	if(isset($_POST["submit"])){
		$id  = $_GET["id"];
		$userId = $_SESSION["user"];
		$adoption_date = $_POST["adoption_date"];

		$sql = "INSERT INTO `adoption` (`adoption_date`, `fk_user_id`, `fk_animal_id`) VALUES ('$adoption_date','$userId','$id')";

		$sql2 = "UPDATE `animals` SET `available`='no' WHERE id = $id";

		if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)){
			echo "<div class=\"alert alert-success text-center\" role=\"alert\">
						<h4 class=\"alert-heading\">Thank you!</h4>
						<p>Adoption is successful.</p>
						<hr>
						<a href='home.php'>Back to the Homepage</a></p>
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
	<title>Adoption</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="form-group">
				<label for="adoptionDate">Date of Adoption</label>
				<input type="date" class="form-control" id="adoptionDate" name="adoption_date">
			</div>
				<button type="submit" class="btn-btn-primary" name="submit">Submit</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>