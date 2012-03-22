<?php get_header(); ?>
<div id="content">
<div id="content-inner">
	<?php if (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<div class="post-data-page"><h2><?php the_title(); ?></h2></div>
		<div class="post-txt post-single"><?php the_content(); ?></div>
    </div>
	 <?php comments_template(); ?>
	 <?php else : ?>
	 <?php include('templates/notmatch.php'); ?>
	 <?php include('templates/searchform.php'); ?>
	<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
