
<?php
$id="";

if (isset($id)) {

  $id= 3;

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


<?php 

 } 




  
}else{
 

  $query = "select * from category where cat_id= $cat_id";
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


<?php 

 } } 


?>