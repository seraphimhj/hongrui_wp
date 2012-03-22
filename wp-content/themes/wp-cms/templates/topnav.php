<div class="dedetoolbar"><div class="commtopNav"><div id="topleft">
      <ul>
       <li class="time"><?php print date('Y年m月d日'); ?></li>
			<li class="login">
			<?php if (get_option('login_form') == "yes" || get_option('login_form') == "") { ?>	
			<?php global $user_ID; if ( $user_ID ) : ?> 		
			<?php global $current_user; get_currentuserinfo(); ?>		
			<?php _e('welcome back:','newspoon'); ?><?php echo $current_user->user_login; ?></a> <?php wp_loginout(); ?>
       		<?php else : ?> 	   
			<?php _e('You are not logged in!','newspoon'); ?>&nbsp;&nbsp[ <a href="<?php echo get_option('home'); ?>/wp-login.php?action=register"><?php _e('register','newspoon'); ?></a> | <a href="<?php echo get_option('home'); ?>/wp-login.php"><?php _e('login','newspoon'); ?></a> ]
			<?php endif; ?>
			<?php } ?>			
			</li>
      </ul>
    </div>
	<div class="commtopNav_right">
	<div style="left: 0px; top: 0px; visibility: visible;" id="webfx-menu-object-30" class="webfx-menu-bar">
<span><a id="webfx-menu-object-31" href="http://www.newspoon.com/" title="网站首页"><img class="buttonico" src="<?php bloginfo('template_directory');?>/images/home.gif"/>网站首页</a></span><span><a id="webfx-menu-object-32" href="http://www.newspoon.com/" title="站长作品"><img class="buttonico" src="<?php bloginfo('template_directory');?>/images/dede.gif"/>站长作品 </a></span><span><a id="webfx-menu-object-33" href="http://www.newspoon.com/" title="网站服务 " ><img class="buttonico" src="<?php bloginfo('template_directory');?>/images/service.gif"/>网站服务 </a></span><span><a id="webfx-menu-object-34" href="http://www.newspoon.com/" title="留言交流" ><img class="buttonico" src="<?php bloginfo('template_directory');?>/images/bbs.gif"/>留言交流 </a></span><span><a id="webfx-menu-object-35" href="http://www.newspoon.com/" title="建议提交" ><img class="buttonico" src="<?php bloginfo('template_directory');?>/images/help.gif"/>建议提交 </a></span></div>
	</div></div></div>

<!--topnav-->