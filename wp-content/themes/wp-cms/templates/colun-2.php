	<?php
	$options = get_option('newspoon_options');
 ?>
<!-- Begin colun2 -->
<?php if ($options['colun2']&& (
		($options['colun2_registered'] && $user_ID) || 
		($options['colun2_commentator'] && !$user_ID && isset($_COOKIE['comment_author_'.COOKIEHASH])) || 
		($options['colun2_visitor'] && !$user_ID && !isset($_COOKIE['comment_author_'.COOKIEHASH]))
	) ) : ?>
<div class="wrapper" style="margin-top:5px;">
  <div id="feature" class="left">
     <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2><a href="#" style="color:#FFF">最新模板</a></h2>
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
      
	  <div class="portfolio">	
	   <!--调取分类ID 6的(除最新一篇之外)最新10篇文章-->
	   <?php query_posts('showposts=3&cat=6'); while (have_posts()) : the_post(); ?>	   
							<div class="card">
							 <?php if ( get_post_meta($post->ID, 'pre_image', true) ) : ?>
					<?php $image = get_post_meta($post->ID, 'pre_image', true); ?>
						<div class="thumb"><img width="200" height="150" src="<?php echo $image; ?>" alt="<?php the_title() ?>" /></div>
				<?php else: ?>
						<div class="thumb"><img width="200" height="150" src="<?php bloginfo('template_directory'); ?>/images/blank.jpg" />
                   <?php endif; ?>
								<h5 class="title2"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" ><?php echo mb_strimwidth(get_the_title(), 0, 40, '...'); ?></a></h5>
								<p class="author"><b title="0" class="liked"><?php if(function_exists('the_views')) { the_views(); } ?></b>
								<?php the_author_posts_link(); ?></p>
							</div>
   <?php endwhile; ?>							
							
				
					
				
					<div class="clr"></div>
				</div>
    </div>
    <div class="bg_buttom">
      <div class="bg_buttom_r"></div>
    </div>
  </div>
  
  
  <!--图片演示 -->
  <div id="icommend" class="right">
    <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2><a href="http://www.newspoon.com" style="color:#FFF">最新留言</a></h2>
          </span></span>
          <div class="iterm right">
            <ul>
              <li class="thisiterm"><a href="#"><span>留言板</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fcontent">
      <div class="list-iterm clear" style="padding-top:5px">
        <div style="display: block;">
		<?php $comments = $wpdb->get_results("SELECT comment_author, comment_author_url, comment_ID, comment_post_ID, comment_content, comment_author_email, comment_date FROM $wpdb->comments WHERE comment_approved = '1' AND comment_type = '' ORDER BY comment_date_gmt DESC LIMIT 3") ?>
<?php if ( $comments ) : foreach ($comments as $comment) : ?>
        <dl>
     <?php if ( !empty( $comment->comment_author_email ) ) { $md5 = md5( $comment->comment_author_email ); echo "<img class='home-grav' src='http://www.gravatar.com/avatar.php?gravatar_id=$md5&amp;size=60' alt='' />"; } ?>
             <dt><?php comment_excerpt() ?></dt>
            <dd>评论时间<font color="red"><?php comment_date('Y-m-d'); ?></font></dd>
          </dl>
		  <?php endforeach; endif; ?>


        </div>
      </div>
    </div>
    <div class="bg_buttom">
      <div class="bg_buttom_r"></div>
    </div>
  </div>
</div>
<div class="clear"></div>

</div>
  <?php endif; ?><!-- End -->