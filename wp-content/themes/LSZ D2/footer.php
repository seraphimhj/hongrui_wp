</div><!--end container-->
<?php $options = get_option('wpbus_options'); ?>
<div id="footer">
		<div class="copyright">
		<?php
				global $wpdb;
				$post_datetimes = $wpdb->get_results("SELECT YEAR(min(post_date_gmt)) AS firstyear, YEAR(max(post_date_gmt)) AS lastyear FROM $wpdb->posts WHERE post_date_gmt > 1970");
				if ($post_datetimes) {
					$firstpost_year = $post_datetimes[0]->firstyear;
					$lastpost_year = $post_datetimes[0]->lastyear;

					$copyright = __('Copyright &copy; ') . $firstpost_year;
					if($firstpost_year != $lastpost_year) {
						$copyright .= '-'. $lastpost_year;
					}
					$copyright .= ' ';

					echo $copyright;
				}
			?>
		<em><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></em> All rights reserved.<br />
		<em><?php printf(__('Powered by <a href="%1$s">WordPress</a>. Theme by <a href="%2$s">WPBus</a>.'), 'http://wordpress.org/', 'http://www.wpbus.com'); ?></em> 
		<?php if ($options['analytics'] && $options['analytics_content']) : ?><?php echo($options['analytics_content']); ?><?php endif; ?>
		</div>
</div><!--end footer-->
</div><!--end wrap-->
<?php wp_footer(); ?>
</body>
</html>
