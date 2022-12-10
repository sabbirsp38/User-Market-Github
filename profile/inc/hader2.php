<?php // include language configuration file based on selected language
$lang = "en";
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
        <a href="../index.php"><img class="logoimg" src="../images/Logo.png"></a>
      </div>
      <div class="header-right">
        <ul class="hader-list-itam">
          <li>
            <a class="account" href="profile/index.php"><?php echo $language["LoginRegistration"]; ?></a>
          </li>
          <li>
            <a class="laguageh" href="?lang=en">English</a>

            


          </li>
        </ul>
      

      
  
    </div>
    </div>
  </div>

  