<?php
	ob_start();
	session_start();
	require_once 'db_connect.php';

	// if session is not set this will redirect to login page
	if( !isset($_SESSION['admin' ]) && !isset($_SESSION['user']) ) {
	 header("Location: index.php");
	 exit;
	}
if(isset($_SESSION['user'])){
	header("Location: home.php");
	exit;
}
	// select logged-in users details
	$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
	$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Adopt-a-Pet Agency</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Adopt-a-Pet Agency</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	    <a href="create.php" class="btn btn-info">Add a new Pet</a>
	    <form class="form-inline">
		    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
		    <a class="btn btn-primary my-2 my-sm-0" href="logout.php?logout">Sign Out</a>
		</form>
		
	  </div>
	</nav>


	<div class="container">
		<div class="row">
			
				<?php
					$sql = "SELECT * FROM animals";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					
					if ($resultCheck >0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<div class=\"col-lg-4 col-md-6 col-sm-12\">
									<div class=\"card\" style=\"width: 18rem;\">
		  								<img src=".$row["image"]. " class=\"card-img-top\" alt=\"itemIMG\">
		  								<div class=\"card-body\">
		    								<h5 class=\"card-title\">".$row["name"]. "</h5>
		    								<ul class=\"list-group list-group-flush\">
											    <li class=\"list-group-item small\">".$row["description"]. "</li>
											    <li class=\"list-group-item font-weight-bold\">Adoptable: ".$row["available"]. "</li>
											 </ul>
											 <a href='update.php?id=".$row["id"]." ' class=\"btn btn-info\">Edit</a>
											 <a href='delete.php?id=".$row["id"]." ' class=\"btn btn-danger\">Delete</a>
		  								</div>
		  								
									</div>
								</div>";
								
						}
					}

				?>
			
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>