    <!--footer section start-->   
    <footer>
      <div class="footer-top">
        <div class="container">










        </div>  
      </div>  
      <div class="footer-bottom text-center">
      <div class="container">
        <div class="footer-logo">
          <a href="index.php"> <img class="fotter_logo" src="../images/Logo_text.png"> </a>
        </div>


          <div class="foo-grids fotter_inner_new">
            <div class="col-md-3 footer-grid">
               <?php
 
                          $query = "select * from footer  order by id desc";
                          $post = $db->select($query);
                          if ($post) {
                           $result= $post -> fetch_assoc();
                            ?>
              <h4 class="footer-head"><?php echo $result[$lang.'_titile']; ?></h4>
              <p><?php echo $result[$lang.'_dec']; ?></p>

            <?php } ?>
            </div>
            <div class="col-md-3 footer-grid">
               <?php
 
                          $query = "select * from footer2  order by id desc";
                          $post = $db->select($query);
                          if ($post) {
                           $result= $post -> fetch_assoc();
                            ?>
              <h4 class="footer-head"><?php echo $result[$lang.'_titile']; ?></h4>
              <p><?php echo $result[$lang.'_dec']; ?></p>

            <?php } ?>
            </div>
            <div class="col-md-3 footer-grid">
              <h4 class="footer-head">User Markt</h4>
            </div>
            <div class="col-md-3 footer-grid">
               <?php
 
                          $query = "select * from footer3  order by id desc";
                          $post = $db->select($query);
                          if ($post) {
                           $result= $post -> fetch_assoc();
                            ?>
              <h4 class="footer-head"><?php echo $result[$lang.'_titile']; ?></h4>
              <p><?php echo $result[$lang.'_dec']; ?></p>

            <?php } ?>
            </div>

            
            <div class="clearfix"></div>
          </div> 














         <div class="footer-social-icons">
          <ul>
            <li><a class="facebook" href="#"><span>Facebook</span></a></li>
            <li><a class="twitter" href="#"><span>Twitter</span></a></li>
            <li><a class="instagram" href="#"><span>instagram</span></a></li>
            
            
          </ul>
        </div>
        <!-- <div class="copyrights">
          <p><?php // echo $language["All_Rights_Reserved"]; ?> © <?php // print(date("Y")) ?> . </p>
        </div> -->
        <div class="clearfix"></div>
      </div>
    </div>
    </footer>
        <!--footer section end-->


</body>

 <?php
 
                          $query = "select * from snipet_code  order by id desc";
                          $post = $db->select($query);
                          if ($post) {
                           $result= $post -> fetch_assoc();
                            ?>

<?php echo $result['snipet_code']; ?>

<?php } ?>

</html>
