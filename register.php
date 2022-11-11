
<?php

   
	$msg = "";
	
    
	if (isset($_POST['submit'])) {
		$con = new mysqli('localhost', 'root', '', 'usermarket');

		$name = $con->real_escape_string($_POST['name']);
		$email = $con->real_escape_string($_POST['email']);
		$password = $con->real_escape_string($_POST['password']);
		$cPassword = $con->real_escape_string($_POST['cPassword']);
		$city = $con->real_escape_string($_POST['city']);
		$county = $con->real_escape_string($_POST['county']);
		$zip_code = $con->real_escape_string($_POST['zip_code']);
		//$uni_id = $con->real_escape_string($_POST['uni_id']);
        
        
		if ($name == "" || $email == "" || $password == ""){
			$msg = "One or more field has empty !";
		}elseif ( $password != $cPassword) {
		 	$msg = "Your password not match!";
		 }else{
			$sql = $con->query("SELECT id FROM users WHERE email='$email'");
			if ($sql->num_rows > 0) {
				$msg = "You already have an account!";
			} else {
				
				$uni_id = substr(md5(time()), 0, 38);
                  
				$hashedPassword = $password;
                
				$con->query("INSERT INTO users (name,email,password,uni_id,city,county,zip_code)
					VALUES ('$name', '$email', '$hashedPassword', '$uni_id', '$city', '$county', '$zip_code');
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
	
	<div class="container" style="margin:200px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<center><h1>Create an account</h1></center>
                 <center><p class="colrtext">Already Have Account <a href="UProfile/index.php">Log In</a></p></center>

				<br><br>

				<?php if ($msg != "") echo $msg . "<br><br>" ?>

				<form method="post" action="register.php">

					<input class="form-control" name="name" placeholder="Name..."><br>
					<input class="form-control" name="email" type="email" placeholder="Email..."><br>
					<input class="form-control" name="password" type="password" placeholder="Password..."><br>
					<input class="form-control" name="cPassword" type="password" placeholder="Confirm Password..."><br>
					<div class="autocomplete">
					    <input id="CityInput" class="form-control" name="city" type="text" placeholder="City"><br>
					</div>
					<div class="autocomplete">
					    <input id="zip_codeInput" class="form-control" name="zip_code" type="text" placeholder="zip code"><br>
					</div>
					<div class="autocomplete">
					    <input id="countyInput" class="form-control" name="county" type="text" placeholder="county"><br>
					</div>
					<input class="loginbut" type="submit" name="submit" value="Create">

            </form>







          </div>
       </div>
   </div>
					

              




<?php include 'inc/auto-part/city.php'; ?>
<?php include 'inc/auto-part/zip_code.php'; ?>
<?php include 'inc/auto-part/county.php'; ?>

<?php include 'inc/foter.php'; ?>