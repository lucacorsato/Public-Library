<?php
 /**
  * Custom vars defined in house_homepage_helper module
  *
  * $node_title - title linked to specified url
  * $rotator_nav - html for rotator nav 
  */
?>

<div class="home-services-buttons">
	<ul id="home-services-links">
		<li id="panel1"><a href="http://www.inlandlibrary.com/web2/tramp2.exe/log_in?server=1home&setting_key=scva&screen=SCRegister.html"></a></li>
    	<li id="panel2"><a href="service/online-services"></a></li>
    	<li id="panel3"><a href="site-page/ebooks-and-electronic-media"></a></li>
    	<li id="panel4"><a href="http://main.santaclarita.ca.brainfuse.com"></a></li>
    	<li id="panel5"><a href="http://catalog.santaclaritalibrary.com/uhtbin/cgisirsi.exe/x/SC-VA/x/1/1166/X/BLASTOFF"></a></li>
	</ul>
</div>
  
  <!--<div class="home-rotator-text-block">
    <!--<div class="home-top-intro">
      <h2><?php print l($title, $fields['entity_id_3']->content); ?></h2>
      <?php print $summary; ?>
    </div><!--/home top intro-->
    <!--<div id="home-top-read-more">
      <?php print l(t('Read More').' &raquo;', $read_more,  array('html' => true)); ?>
    </div><!--/home top read more-->    
  <!--</div>--><!--/home-rotator-text-block-->
  
  <div class="home-rotator-photo">  
	<?php print $main_image; ?>
  </div>
  <div id="home-top-numbers"><!--class="clearfix"-->
      <ul>
        <?php print $rotator_nav; ?>       
      </ul>            
  </div>