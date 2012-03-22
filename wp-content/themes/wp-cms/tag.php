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

<div class="wrapper" style="margin-top:5px;">
 <div class="l_left">
    <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2 class="wT1"><?php single_tag_title(); ?></h2>
          </span></span>
          <div class="iterm right" style="padding-right: 20px;">
                     
             POP Keywords: <?php wp_tag_cloud('smallest=10&largest=10&number=3&'); ?>
         
          </div>
        </div>
      </div>
    </div>
    <div class="fcontent">
<div id="listcat2" class="clear">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>	
      <ul class="addlist">
  <?php if ( get_post_meta($post->ID, 'pre_image', true) ) : ?>
					<?php $image = get_post_meta($post->ID, 'pre_image', true); ?>
					<div class="litimg">	<img width="150" height="120" src="<?php echo $image; ?>" alt="<?php the_title() ?>" /></div>
				<?php else: ?>
						<div class="litimg"><img width="150" height="120" src="<?php bloginfo('template_directory'); ?>/images/blank.jpg" /></div>
                   <?php endif; ?>

          <div class="techdes">
            <div class="addinfo"><?php _e('Post time:', 'newspoon'); ?><?php the_time('Y-m-d'); ?> </div>
            <ul>
              <li class="dtitle"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
              <li><?php _e('Technical score:', 'newspoon'); ?><img src="http://www.dedecms.com/img/star/star_8.gif" width="91" height="19" /></li>
              <li><?php _e('views:', 'newspoon'); ?><?php if(function_exists('the_views')) { the_views(); } ?></li>
              <li> <?php the_excerpt(); ?></li>
            </ul>
          </div>
          <div class="clear"></div>
        </ul><?php endwhile; ?>	
		
<?php else : ?>
<div class="error-tip">
<?php _e('Sorry, no posts matched your criteria.', 'newspoon'); ?>
</div>
<?php endif; ?>
      </div>
</div>
	  <div class="bg_buttom">
      <div class="bg_buttom_r"></div>
    </div>
    <div class="mT5">
      <div class="title_top">
        <div class="title_top_i"></div>
      </div>
      <div class="fcontent">
        <div class="pagelist">
<?php par_pagenavi(9); ?>
        </div>
      </div>
      <div class="bg_buttom">
        <div class="bg_buttom_r"></div>
      </div>
    </div>
  </div>
<?php get_sidebar(); ?>
<div class="clear">
	  </div>
 </div>

<?php get_footer(); ?>