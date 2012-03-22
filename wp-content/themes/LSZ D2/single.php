<?php get_header(); ?>
<div id="content">
<div id="content-inner">
	<?php if (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<div class="post-data">
			<div class="title">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<h3><span>分类：<?php the_category(', '); ?></span><span>日期：<?php the_time('Y-m-d'); ?></span><span>作者：<?php the_author(); ?></span><?php if (function_exists('the_views')) : ?><span>阅读：<?php the_views(); ?></span><?php endif; ?>
			</h3>
			</div>
		</div>
		<div class="post-txt post-single"><?php the_content(); ?></div>
    </div>
	<?php the_tags('<div class="tags">Tags: ', ' , ', '</div>'); ?>
	<div class="navigation">
	   <ul>
		 <?php previous_post_link('<li><b>上一篇:</b>%link</li>') ?>
		 <?php next_post_link('<li><b>下一篇:</b>%link</li>') ?> 
	   </ul>
	 </div><!--end navigation-->
	 <?php comments_template(); ?>
	 <?php else : ?>
	 <?php include('templates/notmatch.php'); ?>
	 <?php include('templates/searchform.php'); ?>
	<?php endif; ?>
</div>
</div>
<?php include('sidebar2.php'); ?>
<?php get_footer(); ?>
