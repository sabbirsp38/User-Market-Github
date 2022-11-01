
<?php

   
	$msg = "";
	
    
	if (isset($_POST['submit'])) {
		$con = new mysqli('localhost', 'root', '', 'usermarket');

		$name = $con->real_escape_string($_POST['name']);
		$email = $con->real_escape_string($_POST['email']);
		$password = $con->real_escape_string($_POST['password']);
		$cPassword = $con->real_escape_string($_POST['cPassword']);
		//$uni_id = $con->real_escape_string($_POST['uni_id']);
        
        
		if ($name == "" || $email == "" || $password != $cPassword)
			$msg = "Please check your inputs!";
		else {
			$sql = $con->query("SELECT id FROM users WHERE email='$email'");
			if ($sql->num_rows > 0) {
				$msg = "Email already exists in the database!";
			} else {
				
				$uni_id = substr(md5(time()), 0, 38);
                  
				$hashedPassword = $password;
                
				$con->query("INSERT INTO users (name,email,password,uni_id)
					VALUES ('$name', '$email', '$hashedPassword', '$uni_id');
				");
                   header("location: profile/index.php");




              
			}
		}
	}
?>
<!doctype html>
<html lang="en">
<?php include 'inc/hader.php'; ?>
<body>
	<section id="particles-js" ></section>
    <script type="text/javascript" src="js/particles.js"></script>
       <script type="text/javascript" src="js/app.js"></script>
	<div class="container" style="margin:200px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<center><h3 class="colrtext">Welcome To MFrame Family</h3></center>
                 <center><p class="colrtext">Already Have Account <a href="UProfile/index.php">Log In</a></p></center>

				<br><br>

				<?php if ($msg != "") echo $msg . "<br><br>" ?>

				<form method="post" action="register.php">

					<input class="form-control" name="name" placeholder="Name..."><br>
					<input class="form-control" name="email" type="email" placeholder="Email..."><br>
					<input class="form-control" name="password" type="password" placeholder="Password..."><br>
					<input class="form-control" name="cPassword" type="password" placeholder="Confirm Password..."><br>
					
					

               <div class="card-body">
						<div class="form-group">
							<label for="autocomplete"> Location/City/Address </label>
							<input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Select Location">
						</div>
						<div class="form-group" id="lat_area">
							<label for="latitude"> Latitude </label>
							<input type="text" name="latitude" id="latitude" class="form-control">
						</div>
						<div class="form-group" id="long_area">
							<label for="latitude"> Longitude </label>
							<input type="text" name="longitude" id="longitude" class="form-control">
						</div>
					</div>

<input class="loginbut" type="submit" name="submit" value="Register">






   <script src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&libraries=places&callback=initAutocomplete" type="text/javascript"></script>

   <script type="text/javascript">
   	{{-- javascript code --}}
$(document).ready(function() {
$("#lat_area").addClass("d-none");
$("#long_area").addClass("d-none");
});
google.maps.event.addDomListener(window, 'load', initialize);
function initialize() {
var input = document.getElementById('autocomplete');
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.addListener('place_changed', function() {
var place = autocomplete.getPlace();
$('#latitude').val(place.geometry['location'].lat());
$('#longitude').val(place.geometry['location'].lng());
// --------- show lat and long ---------------
$("#lat_area").removeClass("d-none");
$("#long_area").removeClass("d-none");
});
}
   </script>

<?php include 'inc/foter.php'; ?>