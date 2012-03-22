<div id="footer">
<div class="wrapper" >
  <div class="title_top">
    <div class="title_top_i"></div>
  </div>
  <div class="fcontent">
    <div id="footer_c" class="clear">
      <div id="footer_logo"><img src="<?php bloginfo('template_directory'); ?>/images/buttom_logo.gif" width="149" height="25" /></div>
      <div id="footer_text"> <a href="http://www.newspoon.com" target="_blank"><?php _e('关于我们: ', 'newspoon'); ?></a> <a href="http://www.newspoon.com" target="_blank"><?php _e('招贤纳士: ', 'newspoon'); ?></a> <a href="http://www.newspoon.com" target="_blank"><?php _e('联系我们: ', 'newspoon'); ?></a><a href="http://www.newspoon.com"> <?php _e('帮助中心: ', 'newspoon'); ?></a> <a href="http://www.newspoon.com" target="_blank"><?php _e('协议说明: ', 'newspoon'); ?> </a> <a href="http://www.newspoon.com" target="_blank"><?php _e('网站地图: ', 'newspoon'); ?></a>
	  <?php
	wp_footer();

	$options = get_option('newspoon_options');
	if ($options['analytics']) {
		echo($options['analytics_content']);
	}
?>
 </div>
      <div id="footer_top"><a href="#top"><img src="<?php bloginfo('template_directory'); ?>/images/gto_top.gif" width="76" height="23" /></a></div>
      <div id="copyright">&copy; 2009  NEWSPOON Inc. All rights reserved Powered by <a target="_blank" href="index.html">WORDPRESS</a></div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="bg_buttom">
    <div class="bg_buttom_r"></div>
  </div>
</div>

</div>
</body>
</html>