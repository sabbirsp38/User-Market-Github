

<?php
    $servername = 'localhost';
    $username   = 'root'; // Username
    $password   = ''; // Password
    $dbname     = "usermarket";
    $conn       = mysqli_connect($servername,$username,$password,"$dbname");
    
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
    }
?>

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

<!DOCTYPE html>
<html>
<head>
<title>User Markt | Home </title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-select.css">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/dassbord.css" rel="stylesheet" type="text/css" media="all" />


<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../css/jquery-ui1.css">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->  
<!-- js -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap-select.js"></script>
<script src="/js/script.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="../js/jquery.leanModal.min.js"></script>
<link href="../css/jquery.uls.css" rel="stylesheet"/>
<link href="../css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="../css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="../js/jquery.uls.data.js"></script>
<script src="../js/jquery.uls.data.utils.js"></script>
<script src="../js/jquery.uls.lcd.js"></script>
<script src="../js/jquery.uls.languagefilter.js"></script>
<script src="../js/jquery.uls.regionfilter.js"></script>
<script src="../js/jquery.uls.core.js"></script>
<script>
      $( document ).ready( function() {
        $( '.uls-trigger' ).uls( {
          onSelect : function( language ) {
            var languageName = $.uls.data.getAutonym( language );
            $( '.uls-trigger' ).text( languageName );
          },
          quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
        } );
      } );
    </script>
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>

<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
  $('#viewcontrols a').on('click',function(e) {
    if ($(this).hasClass('gridview')) {
      elem.fadeOut(1000, function () {
        $('#container ul').removeClass('list').addClass('grid');
        $('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
        $('#viewcontrols .gridview').addClass('active');
        $('#viewcontrols .listview').removeClass('active');
        elem.fadeIn(1000);
      });           
    }
    else if($(this).hasClass('listview')) {
      elem.fadeOut(1000, function () {
        $('#container ul').removeClass('grid').addClass('list');
        $('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
        $('#viewcontrols .gridview').removeClass('active');
        $('#viewcontrols .listview').addClass('active');
        elem.fadeIn(1000);
      });                 
    }
  });
});


  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
</head>
<body>
  <div class="header">
    <div class="container">
      <div class="logo">
        <a href="../index.php"><span>User</span>Markt</a>
      </div>
      <div class="header-right">
        <ul class="hader-list-itam">
          <li>
            <a class="account" href="profile/index.php">My Account</a>
          </li>
          <li>

            <div class="dropdown lang-dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select language
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="?lang=en"
            <?php if($lang == 'en'){?> style="color: #ff9900;"
            <?php } ?>>English</a><br>
               
                <a class="dropdown-item"
            href="?lang=de" <?php if($lang == 'de'){?>
            style="color: #ff9900;" <?php } ?>>Deutsche</a>
              </div>
            </div>


          </li>

          <?php 
if (isset($_GET['action']) && $_GET['action']=="logout" ) {
    Session::destroy();
  }
 ?>
                      <li><a class="btn btn-secondary logout-but" href="post-ad.php">Post Ads</a></li>
                      <li><a class="btn btn-secondary logout-but" href="?action=logout"><span class="ti-power-off"></span>Log Out</a></li>
        </ul>
      

      
  
    </div>
    </div>
  </div>