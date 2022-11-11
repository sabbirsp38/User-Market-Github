
<?php 
 include '../lib/Session.php';
 Session::init();
?>

<?php include '../config/config.php'; ?>
<?php include '../lib/view.php'; ?>
<?php include '../helpers/Formet.php'; ?>

<?php 
$db = new Database();
$fm = new Formet();

?>



<?php
	$msg = "";

	if (isset($_POST['submit'])) {
		$con = new mysqli('localhost', 'root', '', 'usermarket');

		$email = $con->real_escape_string($_POST['email']);
		$password = $con->real_escape_string($_POST['password']);

		if ($email == "" || $password == "")
			$msg = "Please check your inputs!";
		else {
			$sql = $con->query("SELECT * FROM users WHERE email='$email'");
			if (!empty($sql) && $sql->num_rows > 0) {
                $data = $sql->fetch_array();
                
                if ($password == $data['password']) {
	                    Session::set("login", true);
				        Session::set("email", $value['email']);
				        Session::set("userId", $value['id']);
				        $_SESSION['uni_id'] = $data['uni_id'];
	                    header("Location:user-dashboard.php");
                    
                } else
	                $msg = "Please check your inputs!";
			} else {
				$msg = "Please check your inputs!";
			}
		}
	}
?>

<?php include 'inc/hader2.php' ?>

	

		 <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<h1>Log in</h1>
						</div>
						<div class="signin">
							<div class="signin-rit">
								<?php if ($msg != "") echo $msg . "<br><br>" ?>
							</div>
							<form method="post" action="index.php">
								<input class="form-control" name="email" type="email" placeholder="Email..."><br>
								<input class="form-control" name="password" type="password" placeholder="Password..."><br>
								<input class=" loginbut" type="submit" name="submit" value="Log In">
							</form>	 
						</div>
						<div class="new_people">
							<h2>For New People</h2>
							<p></p>
							<a href="../register.php">Register Now!</a>
						</div>
					</div>
				</div>
			</div>
		
	</section>

<?php include 'inc/foter.php'; ?>