<?php get_header(); ?>
<div id="content">
<div id="content-inner">
	<div class="cat-title">日志标签：<?php single_tag_title(); ?></div>
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>
