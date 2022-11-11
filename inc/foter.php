    <!--footer section start-->   
    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="foo-grids">
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
              <h4 class="footer-head"><?php echo $language["Help"]; ?></h4>
              <ul>
                <li><a href="faq.php"><?php echo $language["Faq"]; ?></a></li>
                <li><a href="contact.php"><?php echo $language["Contact"]; ?></a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-grid">
              <h4 class="footer-head"><?php echo $language["Information"]; ?></h4>
              <ul>

                <li><a href="terms.php"><?php echo $language["Terms_of_Use"]; ?></a></li>
                <li><a href="privacy.php"><?php echo $language["Privacy_Policy"]; ?></a></li>  
              </ul>
            </div>
            <div class="col-md-3 footer-grid">
              <h4 class="footer-head">Contact_Us<?php echo $language["LIST_TITLE"]; ?></h4>
              <span class="hq"><?php echo $language["Our_headquarters"]; ?></span>
              <address>
                <ul class="location">
                  <?php
 
                          $query = "select * from contact_info  order by id desc";
                          $post = $db->select($query);
                          if ($post) {
                           $result= $post -> fetch_assoc();
                            ?>
                  <li><span class="glyphicon glyphicon-map-marker"></span></li>
                  <li><?php echo $result[$lang.'_location']; ?></li>
                  <div class="clearfix"></div>
                </ul> 
                <ul class="location">
                  <li><span class="glyphicon glyphicon-earphone"></span></li>
                  <li><?php echo $result[$lang.'_number']; ?></li>
                  <div class="clearfix"></div>
                </ul> 
                <ul class="location">
                  <li><span class="glyphicon glyphicon-envelope"></span></li>
                  <li><a href="mailto:<?php echo $result[$lang.'_email']; ?>"><?php echo $result[$lang.'_email']; ?></a></li>
                  <div class="clearfix"></div>
                  <?php } ?>
                </ul>           
              </address>
            </div>
            <div class="clearfix"></div>
          </div>            
        </div>  
      </div>  
      <div class="footer-bottom text-center">
      <div class="container">
        <div class="footer-logo">
          <a href="index.php"><span>User</span>Markt</a>
        </div>
        <!-- <div class="footer-social-icons">
          <ul>
            <li><a class="facebook" href="#"><span>Facebook</span></a></li>
            <li><a class="twitter" href="#"><span>Twitter</span></a></li>
            <li><a class="instagram" href="#"><span>instagram</span></a></li>
            
            
          </ul>
        </div> -->
        <div class="copyrights">
          <p><?php echo $language["All_Rights_Reserved"]; ?> © <?php  print(date("Y")) ?> . </p>
        </div>
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
