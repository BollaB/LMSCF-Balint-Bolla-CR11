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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Pet</title>

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
	      <li class="nav-item">
	        <a class="nav-link" href="general.php">Large & Small Pets</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="senior.php">Our Seniors</a>
	      </li>
	    </ul>
	    <form class="form-inline">
		    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
		    <a class="btn btn-primary my-2 my-sm-0" href="logout.php?logout">Sign Out</a>
		</form>
		
	  </div>
	</nav>

		

		<div class="container">
			<form action="actions/a_create.php" method="post">
			  <div class="form-group">
			    <label for="nameInput">Name</label>
			    <input type="text" class="form-control" id="nameInput" name="name">
			  </div>
			  <div class="form-group">
			    <label for="imageInput">Image</label>
			    <input type="text" class="form-control" id="imageInput" name="image" aria-describedby="imageHelp">
			    <small id="imageHelp" class="form-text text-dark">*Please add the http link to the image.</small>
			  </div>
			  <div class="form-group">
			    <label for="ageInput">Age</label>
			    <input type="text" class="form-control" id="ageInput" name="age">
			  </div>
			  <div class="form-group">
			    <label for="descriptionTextarea">Description</label>
			    <textarea class="form-control" id="descriptionTextarea" name="description" rows="5"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="type">Pet size</label>
			    <select class="form-control" id="type" name="type">
			      <option>small</option>
			      <option>large</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="hobbiesInput">Hobbies</label>
			    <input type="text" class="form-control" id="hobbiesInputInput" name="hobbies">
			  </div>
			  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
			</form>
		</div>

	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>