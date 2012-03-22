<?php get_header(); ?>
<div id="content">
<div id="content-inner">
	<div class="cat-title">
	<?php if ( is_day() ) : ?>
				<?php printf( __( '日历存档: <span>%s</span>'), get_the_date() ); ?>
	<?php elseif ( is_month() ) : ?>
					<?php printf( __( '按月存档: <span>%s</span>'), get_the_date('Y/m') ); ?>
	<?php elseif ( is_year() ) : ?>
					<?php printf( __( '按年存档: <span>%s</span>'), get_the_date('Y') ); ?>
	<?php else : ?>
					Blog 存档
	<?php endif; ?>
	</div>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php include('templates/loop.php'); ?>
	<?php endwhile; ?>
	<?php include('templates/pagenavi.php'); ?>
	<?php else : ?>
	<?php include('templates/notmatch.php'); ?>
	<?php include('templates/searchform.php'); ?>
	<?php endif; ?>
</div>
</div>
<?php include('sidebar2.php'); ?>
<?php get_footer(); ?>
