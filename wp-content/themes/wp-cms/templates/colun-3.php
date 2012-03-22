	<?php
	$options = get_option('newspoon_options');
 ?>
<!-- Begin colun3 -->
<?php if ($options['colun3']&& (
		($options['colun3_registered'] && $user_ID) || 
		($options['colun3_commentator'] && !$user_ID && isset($_COOKIE['comment_author_'.COOKIEHASH])) || 
		($options['colun3_visitor'] && !$user_ID && !isset($_COOKIE['comment_author_'.COOKIEHASH]))
	) ) : ?>
<div class="wrapper " style="margin-top:5px; margin-bottom:5px;">

  
  <div class="postlist" class="left">
    <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2><a href="http://www.newspoon.com/category/tool" style="color:#FFF">设计工具</a></h2>
          </span></span>
          <div class="iterm right">
            <ul>
              <li><a href="#"><span>更多...</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="fcontent">
      <div class="list-post clear" style="padding-bottom:8px">
	  <ul>            <!--调取分类ID 6的(除最新一篇之外)最新10篇文章-->
	   <?php query_posts('showposts=10&cat=6'); while (have_posts()) : the_post(); ?>
	   
       <li><span class="date"><?php the_time('m-d'); ?> </span><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></li>
	   
	   <?php endwhile; ?>
      </ul>
        
      </div>
    </div>
    <div class="bg_buttom">
      <div class="bg_buttom_r"></div>
    </div>
  </div>




  <div class="hotpost" class="left">
    <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2><a href="http://www.newspoon.com/category/blogku" style="color:#FFF">酷站推荐</a></h2>
          </span></span>
          <div class="iterm right">
            <ul>
              <li id="tab_t1" onmouseover="return ChangIterm(1)" class="thisiterm"><a href="#"><span>CSS酷站</span></a></li>
              <li id="tab_t2" onmouseover="return ChangIterm(2)"><a href="#"><span>FLASH酷站</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fcontent">
      <div class="list-post clear" id="tab_3">
     <div class="showimg clear"><?php query_posts('showposts=1&cat=6'); while (have_posts()) : the_post(); ?>
	  
	  <?php if ( get_post_meta($post->ID, 'pre_image', true) ) : ?>
					<?php $image = get_post_meta($post->ID, 'pre_image', true); ?>
						<img width="130" height="100" src="<?php echo $image; ?>" alt="<?php the_title() ?>" />
				<?php else: ?>
						<img width="130" height="100" src="<?php bloginfo('template_directory'); ?>/images/blank.jpg" />
                   <?php endif; ?>
	  <span class="iterm-name"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="link01"  rel="bookmark"><?php the_title(); ?></a></span> <span class="iterm-oth"> <?php the_excerpt(); ?>	</span><?php endwhile; ?>
          <div class="clear"></div>
        </div>
      <ul style="padding-bottom: 3px;">
               <!--调取分类ID 6的(除最新一篇之外)最新10篇文章-->
	   <?php query_posts('showposts=1&cat=6'); while (have_posts()) : the_post(); ?>
	   
       <li><span class="date"><?php the_time('m-d'); ?> </span><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></li>
	   
	   <?php endwhile; ?>
    
        </ul>
      </div>
   </div>
    <div class="bg_buttom">
      <div class="bg_buttom_r"></div>
    </div>
  </div>


  <div class="comfaq" class="right">
    <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2><a href="http://www.newspoon.com/category/resource" style="color:#FFF">资源分享</a></h2>
          </span></span>
          <div class="iterm right">
            <ul>
              <li><a href="http://www.newspoon.com/category/resource"><span>更多...</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fcontent">
       <div class="list-post clear" style="padding-bottom:8px">
	  <ul>               <!--调取分类ID 6的(除最新一篇之外)最新10篇文章-->
	   <?php query_posts('showposts=6&cat=6'); while (have_posts()) : the_post(); ?>
	   
       <li></span><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></li>
	   
	   <?php endwhile; ?>
      </ul>
        
      </div>
   <div class="bg_buttom">
      <div class="bg_buttom_r"></div>
    </div>
  </div>
</div>
<div class="clear"></div>
</div>
  <?php endif; ?><!-- End -->