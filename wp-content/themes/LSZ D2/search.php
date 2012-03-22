<?php get_header(); ?>
<div id="content">
<div id="content-inner">
	<?php if (have_posts()) : ?>
	<div class="cat-title"><?php printf( __( '搜索结果：%s'), get_search_query() ); ?></div>
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
