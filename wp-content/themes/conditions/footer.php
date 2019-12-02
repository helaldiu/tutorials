<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package conditions
 */

?>

	</div><!-- #content -->
	
    <footer class="footer">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-6">
                    <span class="copyright"><?php echo ot_get_option('copy_right');?></span>
                </div>
                <div class="col-md-6">
                   <!--  <ul class="foo-socials justify-content-md-end">
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul> -->
                    <ul class="foo-socials justify-content-md-end">
                         <?php if(ot_get_option('url-facebook') != ''): ?>
                         <li><a target="_blank" href="<?php echo ot_get_option('url-facebook'); ?>"><i class="fab fa-facebook-square"></i></a></li>
                         <?php endif; if(ot_get_option('url-youtube') != ''): ?>
                         <li><a target="_blank" href="<?php echo ot_get_option('url-youtube'); ?>"><i class="fab fa-youtube-square"></i></a></li>
                         <?php endif; if(ot_get_option('url-linkedin') != ''): ?>
                         <li><a target="_blank" href="<?php echo ot_get_option('url-linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                         <?php endif; if(ot_get_option('url-twitter') != ''): ?>
                         <li><a target="_blank" href="<?php echo ot_get_option('url-twitter'); ?>"><i class="fab fa-twitter-square"></i></a></li>
                         <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade modal-contact" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="modal-body-header">
                <h5 class="modal-title" id="contactModalLabel">Get in touch</h5>
                <p>
                    Contacting us often helps us to better understand you
                </p>
            </div>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control cf-name" placeholder="Name *">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email *">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Company *">
                </div>
                <div class="form-group">
                    <textarea rows="3" class="form-control" placeholder="Your message *"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>
