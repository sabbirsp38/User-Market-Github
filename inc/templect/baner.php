
<?php
if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
            
  $query = "select * from category where cat_id= 43050";
  $post = $db->select($query);
  if ($post) {
  $result= $post -> fetch_assoc(); ?>

  <div class="main-banner banner text-center">
	  <div class="container">    
			<h1><?php echo $result[$lang.'_banner_title']; ?></h1>
			<p><?php echo $result[$lang.'_banner_dec']; ?></p>
			<a href="<?php echo $result['button_url']; ?>"><?php echo $result[$lang.'_botton_text']; ?></a>
	  </div>
	</div>
	<style type="text/css">
		.banner {
	background:url('uploads/<?php echo $result['banner_img'];?>') no-repeat 0px 0px;
}
.main-banner {
	background:url('uploads/<?php echo $result['banner_img'];?>') no-repeat 0px 0px;
}
	</style>
           
     <?php      }}else{
             $id= $_GET['$id'];
          


  $query = "select * from category where cat_id= $id";
  $post = $db->select($query);
  if ($post) {
  $result= $post -> fetch_assoc(); ?>

  <div class="main-banner banner text-center">
	  <div class="container">    
			<h1><?php echo $result[$lang.'_banner_title']; ?></h1>
			<p><?php echo $result[$lang.'_banner_dec']; ?></p>
			<a href="<?php echo $result['button_url']; ?>"><?php echo $result[$lang.'_botton_text']; ?></a>
	  </div>
	</div>

<style type="text/css">
		.banner {
	background:url('uploads/<?php echo $result['banner_img'];?>') no-repeat 0px 0px;
}
.main-banner {
	background:url('uploads/<?php echo $result['banner_img'];?>') no-repeat 0px 0px;
}
	</style>

<?php 

 } }


?>