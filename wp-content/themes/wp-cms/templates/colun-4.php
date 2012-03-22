	<?php
	$options = get_option('newspoon_options');
 ?>
<!-- Begin colun1 -->
<?php if ($options['colun4']&& (
		($options['colun4_registered'] && $user_ID) || 
		($options['colun4_commentator'] && !$user_ID && isset($_COOKIE['comment_author_'.COOKIEHASH])) || 
		($options['colun4_visitor'] && !$user_ID && !isset($_COOKIE['comment_author_'.COOKIEHASH]))
	) ) : ?>
<div class="wrapper " style="margin-top:5px; margin-bottom:5px;">

  
  <div class="postlist" class="left">
    <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2><a href="#" style="color:#FFF">热门教程</a></h2>
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
	  <ul>               <!--调取分类ID 6的(除最新一篇之外)最新10篇文章-->
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
          <h2><a href="#" style="color:#FFF">热门下载</a></h2>
          </span></span>
          <div class="iterm right">
            <ul>
              <li id="tab_t1" onmouseover="return ChangIterm(1)" class="thisiterm"><a href="#"><span>模板</span></a></li>
              <li id="tab_t2" onmouseover="return ChangIterm(2)"><a href="#"><span>插件</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fcontent">
      <div class="list-post clear" id="tab_5">
      <div class="list-post clear" id="tab_4" style="display: none;">
     <div class="showimg clear"><?php query_posts('showposts=1&cat=6'); while (have_posts()) : the_post(); ?>
	  <a href="template/trade/index.html"><img src="http://www.dedecms.com/uploads/091103/8-091103142613591.jpg" width="128" height="97" /></a><span class="iterm-name"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="link01"  rel="bookmark"><?php the_title(); ?></a></span> <span class="iterm-oth"> <?php the_excerpt(); ?>	</span><?php endwhile; ?>
          <div class="clear"></div>
        </div>
 <ul style="padding-bottom: 3px;">
               <!--调取分类ID 6的(除最新一篇之外)最新10篇文章-->
	   <?php query_posts('showposts=3&cat=114'); while (have_posts()) : the_post(); ?>
	   
       <li><span class="date"><?php the_time('m-d'); ?> </span><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></li>
	   
	   <?php endwhile; ?>
        </ul>
      </div>
      <ul style="padding-bottom: 3px;">
              <!--调取分类ID 6的(除最新一篇之外)最新10篇文章-->
	   <?php query_posts('showposts=3&cat=6'); while (have_posts()) : the_post(); ?>
	   
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
          <h2><a href="#" style="color:#FFF">常见问题</a></h2>
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
