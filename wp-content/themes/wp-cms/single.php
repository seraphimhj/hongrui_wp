<?php get_header(); ?>
<div class="wrapper" style="margin-top:5px;">
  <div id="position"><?php /* If this is a category archive */ if (is_home()) { ?>
               <?php _e('Position:', 'newspoon'); ?> <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> >&nbsp;&nbsp;\&nbsp;HOME
          <?php /* If this is a tag archive */ } elseif(is_category()) { ?>
               <?php _e('Position:', 'newspoon'); ?>  <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp; <?php the_category(' / ') ?>
         <?php /* If this is a search result */ } elseif (is_search()) { ?>
                <?php _e('Position:', 'newspoon'); ?> <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp; <?php echo $s; ?>>
        <?php /* If this is a tag archive */ } elseif(is_tag()) { ?>
              <?php _e('Position:', 'newspoon'); ?> <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;<?php single_tag_title(); ?>
       <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
               <?php _e('Position:', 'newspoon'); ?> <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;<?php the_time('Y, F jS'); ?>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <?php _e('Position:', 'newspoon'); ?> <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;<?php the_time('Y, F'); ?> 
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <?php _e('Position:', 'newspoon'); ?>  <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;<?php the_time('Y'); ?>
       <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <?php _e('Position:', 'newspoon'); ?>  <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp; author post
      <?php /* If this is a single page */ } elseif (is_single()) { ?>
               <?php _e('Position:', 'newspoon'); ?> <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;<?php the_category(', ') ?> &nbsp;&nbsp;\&nbsp;<?php _e('POST CONTENT:', 'newspoon'); ?>
        <?php /* If this is a page */ } elseif (is_page()) { ?>
               <?php _e('Position:', 'newspoon'); ?>  <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp; <?php the_title(); ?>
          <?php /* If this is a 404 error page */ } elseif (is_404()) { ?>
                <?php _e('Position:', 'newspoon'); ?>  <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp; 404 error page
          <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <?php _e('Position:', 'newspoon'); ?> <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;Archieve
          <?php } ?> </div>
</div>
<!--nav-->



<div class="wrapper" style="margin-top:5px; margin-bottom:20px;">

 <div class="l_left">

    <div class="lh3">
      <div class="rh3">
	  <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2 class="wh2">文章分类：<?php the_category(', ') ?></h2>
          </span></span>
           <div class="iterm right" style="padding-right: 60px;">
            <ul>
           <?php the_tags('', ', ', ''); ?>
              
            </ul>
          </div>
          </div>
      </div>
    </div>
    <div class="fcontent">
      <div class="postbody" id="post-<?php the_ID(); ?>">
        <h1><?php the_title(); ?></h1>
	
  <div class="times">作者：<font color="red">网络</font> 发表于：<font color="red"><?php the_time('Y-m-d'); ?> </font>　  点击：<font color="red"> <?php if(function_exists('the_views')) { the_views(); } ?></font></div>
        <div id="textbody" class="content">
          <div class="content">
<?php the_content('Continue reading &raquo;'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
          </div>
        </div>
    	
        <div class="linkes">
          <li style="overflow: hidden; white-space: nowrap;">上一篇：<?php previous_post_link('%link') ?> </li>
          <li style="overflow: hidden; white-space: nowrap;">下一篇：<?php next_post_link('%link') ?></li>
          <div class="clear"></div>
        </div>
      </div>
   	<?php endwhile; ?>
	<?php else : ?>
	
	<!-- Not found? -->
	<?php include TEMPLATEPATH. '/'. $comfy['widgets'] . '/404.html'; ?>

	<?php endif; ?>
	 </div>
    <div class="bg_buttom">
      <div class="bg_buttom_r"></div>
    </div>
	
	    <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2 class="wh2">相关文章</h2>
          </span></span>
           <div class="iterm right" style="padding-right: 260px;">
           <span class="title_t left"><span class="title_t_i left">
          <h2 class="wh2">相关文章</h2>
          </span></span>
          </div>
          </div>
      </div>
    </div>
      <div class="fcontent">
      <div class="likearcs">       
		    <?php wp23_related_posts(); ?>  
      </div>

	
	  <div class="ad">
		    <img width="250" height="250"  src="<?php bloginfo('template_directory'); ?>/images/ad.jpg" / alt="ad" />		
      </div>
	   <div class="clear"></div>
    </div>
 
  <div class="bg_buttom">
      <div class="bg_buttom_r"></div>
    </div>
  <?php comments_template(); ?>
</div>


<?php get_sidebar(); ?>
<div class="clear">
	  </div>
 </div>
<?php get_footer(); ?>