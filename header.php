<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
		.nav-link{
			color: white
		}
		.active{
			 color: black;
		}
</style>
<script type="text/javascript">
	function search(){
		var keystr = document.getElementById('search').value;
		$.ajax({
			url: "searchpage.php",
			type: "POST",
			data: { key: keystr},
			success: function(res){
				window.location="searchpage.php?key="+keystr;
			}
		});
	}
</script>
</head>
<body style="background-image: url('assets/images/back.jpg'); background-size: cover; background-attachment: fixed;">
	<div class="container-fluid" style="width: 100%; height: 100%;">
		<nav class="navbar fixed-top navbar-dark" style="width: 100%; height: 80px; background-color: #00000085">
			<div class="container" style="width: 60%">
				<a href="#" class="navbar-brand" style="color: white">
					<img src="assets/images/icon.png" style="width: 25px; height: 25px">
					<strong>MoviesHD</strong>
				</a>
			</div>
			<div class="input-group" style="width: 20%; height: 40px; margin-right: 10%; border-radius: 20px">
				<input class="form-control" type="text" id="search" placeholder="search.." style="background-color: transparent; width: 80%">
				<button id="searchbtn" class="btn btn-dark" onclick="search()"><i class="fas fa-search"></i></button>
			</div>
		</nav>