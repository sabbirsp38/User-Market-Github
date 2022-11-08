    <!--footer section start-->   
    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="foo-grids">
            <div class="col-md-3 footer-grid">
              <h4 class="footer-head">Who We Are</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              <p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
            </div>
            <div class="col-md-3 footer-grid">
              <h4 class="footer-head">Help</h4>
              <ul>
                <li><a href="howitworks.php">How it Works</a></li>           
                <li><a href="sitemap.php">Sitemap</a></li>
                <li><a href="faq.php">Faq</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="typography.php">Shortcodes</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-grid">
              <h4 class="footer-head">Information</h4>
              <ul>
                <li><a href="regions.php">Locations Map</a></li> 
                <li><a href="terms.php">Terms of Use</a></li>
                <li><a href="popular-search.php">Popular searches</a></li> 
                <li><a href="privacy.php">Privacy Policy</a></li>  
              </ul>
            </div>
            <div class="col-md-3 footer-grid">
              <h4 class="footer-head">Contact Us</h4>
              <span class="hq">Our headquarters</span>
              <address>
                <ul class="location">
                  <li><span class="glyphicon glyphicon-map-marker"></span></li>
                  <li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
                  <div class="clearfix"></div>
                </ul> 
                <ul class="location">
                  <li><span class="glyphicon glyphicon-earphone"></span></li>
                  <li>+0 561 111 235</li>
                  <div class="clearfix"></div>
                </ul> 
                <ul class="location">
                  <li><span class="glyphicon glyphicon-envelope"></span></li>
                  <li><a href="mailto:info@example.com">mail@example.com</a></li>
                  <div class="clearfix"></div>
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
        <div class="footer-social-icons">
          <ul>
            <li><a class="facebook" href="#"><span>Facebook</span></a></li>
            <li><a class="twitter" href="#"><span>Twitter</span></a></li>
            <li><a class="flickr" href="#"><span>Flickr</span></a></li>
            <li><a class="googleplus" href="#"><span>Google+</span></a></li>
            <li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
          </ul>
        </div>
        <div class="copyrights">
          <p>User Markt All Rights Reserved © <?php  print(date("Y")) ?> . </p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    </footer>
        <!--footer section end-->
</body>



</html>
<script>
            $(document).ready(function() {
                $('#category-dropdown').on('change', function() {
                    var category_id = this.value;
                    $.ajax({
                        url: "get-subcat.php",
                        type: "POST",
                        data: {
                            category_id: category_id
                        },
                        cache: false,
                        success: function(result) {
                            $("#sub-category-dropdown").html(result);
                        }
                    });
                });
            });
        </script>
