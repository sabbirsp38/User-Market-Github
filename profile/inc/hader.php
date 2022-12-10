

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
$lang = "de";
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}
require_once ("../inc/translet/lang." . $lang . ".php");
?>

<!DOCTYPE html>
<html>
<head>
<?php 
      require_once ("../inc/templect/seo-tag.php")

      ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-select.css">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/dassbord.css" rel="stylesheet" type="text/css" media="all" />


<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../css/jquery-ui1.css">
<!-- for-mobile-apps -->

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





<!-- Load TinyMCE -->
    <script src="../admin/js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>
    <!-- /TinyMCE -->
    <style type="text/css">
        #tinymce{font-size:15px !important;}
    </style>







</head>
<body>
  <div class="header">
    <div class="container">
      <div class="logo">
         <a href="../index.php"><img class="logoimg" src="../images/Logo.png"></a>
      </div>
      <div class="header-right">
        <ul class="hader-list-itam">
          
          

          <?php 
if (isset($_GET['action']) && $_GET['action']=="logout" ) {
    Session::destroy();
  }
 ?>
                      <li><a class="btn btn-secondary logout-but account" href="post-ad.php"><?php echo $language["Post_Ads"]; ?></a></li>
                      <li><a class="btn btn-secondary logout-but account" href="?action=logout"><span class="ti-power-off"></span><?php echo $language["Logout"]; ?></a></li>

                      <li>

                        <a class="laguageh" href="?lang=en">English</a>


                       </li>
        </ul>
      

      
  
    </div>
    </div>
  </div>