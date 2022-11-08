
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
        
        
		if ($name == "" || $email == "" || $password != $cPassword)
			$msg = "Please check your inputs!";
		else {
			$sql = $con->query("SELECT id FROM users WHERE email='$email'");
			if ($sql->num_rows > 0) {
				$msg = "Email already exists in the database!";
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
				<center><h3 class="colrtext">Welcome To MFrame Family</h3></center>
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
					<input class="loginbut" type="submit" name="submit" value="Register">

            </form>




        <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-up">
						<h1>Create an account</h1>
						<p class="creating">Having hands on experience in creating innovative designs,I do offer design 
							solutions which harness.</p>
						<h2>Personal Information</h2>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Email Address* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" "/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Password* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="password" placeholder=" " required=" "/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Confirm Password* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="password" placeholder=" " required=" "/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sub_home">
							<div class="sub_home_left">
								<form>
									<input type="submit" value="Create">
								</form>
							</div>
							<div class="sub_home_right">
								<p>Go Back to <a href="index.html">Home</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		
	</section>

          </div>
       </div>
   </div>
					

              




<?php include 'inc/auto-part/city.php'; ?>
<?php include 'inc/auto-part/zip_code.php'; ?>
<?php include 'inc/auto-part/county.php'; ?>

<?php include 'inc/foter.php'; ?>