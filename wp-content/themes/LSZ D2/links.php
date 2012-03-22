<?php
/*
Template Name: 友情链接
*/
?>
<?php get_header(); ?>
<div id="content">
<div id="content-inner">
	<?php if (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<div class="post-data-page"><h2><?php the_title(); ?></h2></div>
		<div class="post-txt post-single">
			<?php the_content(); ?>
            <div class="linkpage">
            	<ul><?php wp_list_bookmarks('categorize=1&category_orderby=id&before=<li>&after=</li>
        &show_images=0&show_description=0&orderby=id&title_before=<h3>&title_after=</h3>'); ?></ul>
            </div>
        </div>
    </div>
	 <?php comments_template(); ?>
	 <?php else : ?>
	 <?php include('templates/notmatch.php'); ?>
	 <?php include('templates/searchform.php'); ?>
	<?php endif; ?>
</div>
</div>
<?php include('sidebar2.php'); ?>
<?php get_footer(); ?>
