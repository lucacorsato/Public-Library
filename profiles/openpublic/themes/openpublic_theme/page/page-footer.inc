<?php
// $Id$
/**
 * @file page.footer.inc
 * Footer template.
 * @ingroup page
 */
?>


</div><!--/wrap-inner-->
</div><!--/wrap-->


  <div id="footer" class="clearfix clear">
  <div id="footer-inner" class="center-on-page clearfix">

  <div class="clearfix" id="footer-logo-subscribe">

        <?php // print $footer_logo ?>
        <?php if ($site_name) : ?>
          <div class = 'site-name'><?php print l($site_name, $front_page) ?></div>
        <?php endif; ?>

    <div id="footer-subscribe">
    <form method=post action="https://app.icontact.com/icp/signup.php" name="icpsignup" id="icpsignup3691" accept-charset="UTF-8" onsubmit="return verifyRequired3691();" >
	<input type=hidden name=redirect value="http://santaclaritalibrary.com/email-confirm" />
	<input type=hidden name=errorredirect value="http://santaclaritalibrary.com/email-error" />

	<label for="edit-submitted-email">Subscribe</label>
    <input type=text class="email form-text required" id="edit-submitted-email" name="fields_email" value="enter email address" onfocus="this.value=''">
    <input type="submit" class="form-submit" name="Submit" value="Submit">
    
    <input type=hidden name="listid" value="44365">
    <input type=hidden name="specialid:44365" value="WE2T">
    <input type=hidden name=clientid value="194087">
    <input type=hidden name=formid value="3691">
    <input type=hidden name=reallistid value="1">
    <input type=hidden name=doubleopt value="1">
	</form>
	<script type="text/javascript">
    
    var icpForm3691 = document.getElementById('icpsignup3691');
    
    if (document.location.protocol === "https:")
    
      icpForm3691.action = "https://app.icontact.com/icp/signup.php";
    function verifyRequired3691() {
    if (icpForm3691["fields_email"].value == "") {
      icpForm3691["fields_email"].focus();
      alert("The Email field is required.");
      return false;
    }
    
    return true;
    }
    </script>
	<p>&nbsp;</p>
    <?php //print drupal_render($subscribe_form)  ?>
    </div><!--/footer-subscribe-->
  
  </div>

    <div id="footer-nav">
      <?php print drupal_render($footer_menu); ?>
    </div>
    <?php print $footer_utility ?>
  </div><!--/footer inner-->
    
  </div><!--/#footer-->

</div><!--/page wrapper-->
<?php print render($page['footer']); ?>
