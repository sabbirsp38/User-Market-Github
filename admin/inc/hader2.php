<?php 
 include '../lib/Session.php';
 Session::checkSession();
?>

<?php include '../config/config.php'; ?>
<?php include '../lib/view.php'; ?>
<?php include '../helpers/Formet.php'; ?>

<?php 
$db = new Database();
$fm = new Formet();
$uni_id = $_SESSION['uni_id'];
$con = new mysqli('localhost', 'root', '', 'usermarket');
 // include language configuration file based on selected language
$lang = "en";
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}
require_once ("../inc/translet/lang." . $lang . ".php");
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>User Markt</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css" />
    <link rel="stylesheet" href="../assets/css/et-line.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="../assets/css/plyr.css" />
    <link rel="stylesheet" href="../assets/css/flag.css" />
    <link rel="stylesheet" href="../assets/css/slick.css" /> 
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/css/jquery.nstSlider.min.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="../images/favicon.png">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/icon-114x114.png">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
      
    <header class="header-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
                <a href="#"><img src="images/logo-2.png" alt=""></a>
              </div>
              <div class="header-top-toggler">
                <div class="header-top-toggler-button"></div>
              </div>
             
            </div>
            <nav class="navbar navbar-expand-lg cp-nav-2">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="menu-item active"><a title="Home" href="index.php">Home</a></li>
                  <li class="menu-item dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Jobs</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="../job-listing.php">Job Listing</a></li>
                      <li class="menu-item"><a  href="post-job.php">Post Job</a></li> 
                    </ul>
                  </li>
                 <li class="menu-item dropdown"><a href="employer-dashboard.php">Employer Dashboard</a></li>
                  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a href="../about-us.php">About Us</a></li>
                      <li class="menu-item"><a href="../terms-and-condition.php">Terms And Condition</a></li>
                    </ul>
                  </li>
                  <li class="menu-item"><a href="../contact.php">Contact Us</a></li>
                  
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
