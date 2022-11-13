


<?php
 
                          $query = "select * from seo  order by id desc";
                          $post = $db->select($query);
                          if ($post) {
                           $result= $post -> fetch_assoc();
                            ?>

<meta charset="UTF-8">
<link rel="icon" type="image/x-icon" href="images/Logo.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="User Market">

<title><?php echo $result[$lang.'_meta_titile']; ?></title>

<meta name="description" content="<?php echo $result[$lang.'_meta_dec']; ?>">
<meta name="keywords" content="<?php echo $result[$lang.'_meta_keword']; ?>" />

<?php } ?>


