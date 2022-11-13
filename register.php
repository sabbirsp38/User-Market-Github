
<?php


 
$lang = "en";
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}
require_once ("inc/translet/lang." . $lang . ".php");

   
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
			$msg =  $language['One_or_more_field_has_empty'];
		}elseif ( $password != $cPassword) {
		 	$msg =$language['Your_password_not_match'];
		 }else{
			$sql = $con->query("SELECT id FROM users WHERE email='$email'");
			if ($sql->num_rows > 0) {
				$msg =$language['You_already_have_an_account'];
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

	<style>
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
}

/* Style the container for inputs */
.container {
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
	
	<div class="container" style="margin:200px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<center><h1><?php echo $language["Create_an_account"]; ?></h1></center>
                 <center><p class="colrtext"><?php echo $language["Already_Have_Account"]; ?> <a href="profile/index.php"><?php echo $language["Log_in"]; ?></a></p></center>

				<br><br>

				<h5 style="color:red;"><?php if ($msg != "") echo $msg . "<br><br>" ?></h5>

				<form method="post" action="register.php">

					<input class="form-control" name="name" placeholder="<?php echo $language["Name"]; ?>..." required><br>
					<input class="form-control" name="email" type="email" placeholder="<?php echo $language["Email"]; ?>..." required><br>
					<input class="form-control" name="password" type="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder="<?php echo $language["Password"]; ?>..." required><br>
					<div id="message">
					  <h3><?php echo $language["Password_must_contain_the_following"]; ?>:</h3>
					  <p id="letter" class="invalid"><?php echo $language["A_lowercase_letter"]; ?></p>
					  <p id="capital" class="invalid"><?php echo $language["A_capital_uppercase_letter"]; ?></b> letter</p>
					  <p id="number" class="invalid"><?php echo $language["A_number"]; ?></p>
					  <p id="length" class="invalid"><?php echo $language["Minimum_8_characters"]; ?></p>
					</div>






					<input class="form-control" name="cPassword" type="password" placeholder="<?php echo $language["Confirm_Password"]; ?>..." required><br>
					<div class="autocomplete">
					    <input id="CityInput" class="form-control" name="city" type="text" placeholder="<?php echo $language["City"]; ?>" required><br>
					</div>
					<div class="autocomplete">
					    <input id="zip_codeInput" class="form-control" name="zip_code" type="text" placeholder="<?php echo $language["zip_code"]; ?>" required><br>
					</div>
					<div class="autocomplete">
					    <input id="countyInput" class="form-control" name="county" type="text" placeholder="<?php echo $language["county"]; ?>" required><br>
					</div>
					<div id="subbutneed"> 
						<input   class="loginbut" type="submit" name="submit" value="<?php echo $language["Submit"]; ?>">
					</div>
					

            </form>







          </div>
       </div>
   </div>
					

 <script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");             



// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }

  if (myInput.value.match(lowerCaseLetters) && myInput.value.match(upperCaseLetters) && myInput.value.match(numbers) && myInput.value.length >= 8) {
     document.getElementById("message").style.display = "none";
     	 document.getElementById("subbutneed").style.display = "block";
  }else{
  	 document.getElementById("message").style.display = "block";
  document.getElementById("subbutneed").style.display = "none";
  }
}
</script>



<?php include 'inc/auto-part/city.php'; ?>
<?php include 'inc/auto-part/zip_code.php'; ?>
<?php include 'inc/auto-part/county.php'; ?>

<?php include 'inc/foter.php'; ?>