<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">		
	<title>Donation </title><!-- 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!-- jQuery library -->
	<script src="https://use.fontawesome.com/fefcf99aee.js"></script>
	<style>
		body{
			background-color: skyblue;
		}
		.jumbotron{
			background-color: #212121;
			color: white;
		}
		#header #quote{
			font-size: 250%;
		}
		
		
		
	</style>
</head>
<body>
<div class="jumbotron">
	<div id = "header" class="d-block container">
		<p id ="quote"class="text-center">Caring has the gift of making the ordinary special</p>
		<p class="text-center "><em>-George R Bach</em></p>
	</div>

</div>
<div class="container">
	<div class = "row justify-content-center mt-4">
		<div class="col-11 col-sm-6 shadow-lg p-3 m-5 bg-white rounded">
			<form method = "post" action = "pay.php">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name"name="name" placeholder="Enter name">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email"name="email" placeholder="Enter email">
					<small class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="amount">Amount</label>
					<input type="number" class="form-control" id="amount"name="amount" placeholder="Enter Amount" min="1">
				</div>
				<button type="submit" class="btn btn-success">Donate</button>
			</form>
		</div>
	</div>
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	 integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	 integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	 integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	  crossorigin="anonymous"></script>
</body>
</html>