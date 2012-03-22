<?php get_header(); ?>
<div class="wrapper" style="margin-top:5px;">
  <div id="position"><?php /* If this is a category archive */ if (is_home()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> >&nbsp;&nbsp;\&nbsp;首页
          <?php /* If this is a tag archive */ } elseif(is_category()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp; <?php the_category(' / ') ?>
         <?php /* If this is a search result */ } elseif (is_search()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp; <?php echo $s; ?>>
        <?php /* If this is a tag archive */ } elseif(is_tag()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;<?php single_tag_title(); ?>
       <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;<?php the_time('Y, F jS'); ?> 时间内的文章
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;<?php the_time('Y, F'); ?> 时间内的文章
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;<?php the_time('Y'); ?> 时间内的文章
       <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp; 作者文章
      <?php /* If this is a single page */ } elseif (is_single()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;<?php the_category(', ') ?> &nbsp;&nbsp;\&nbsp;文章正文
        <?php /* If this is a page */ } elseif (is_page()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp; <?php the_title(); ?>s
          <?php /* If this is a 404 error page */ } elseif (is_404()) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp; 404 错误
          <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                当前位置: <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a> &nbsp;&nbsp;\&nbsp;存档
          <?php } ?> </div>
</div>
<!--nav-->

<div class="wrapper" style="margin-top:5px;">
 <div class="l_left">
    <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2 class="wT1"><a href="#" style="color:#FFF">模块&插件</a></h2>
          </span></span>
          <div class="iterm right" style="padding-right: 60px;">
            <ul>              
              <li class="thisiterm"><a href="../plus/list64f9.html?tid=6&amp;orderby=senddate"><span>发布时间</span></a></li>
              <li ><a href="../plus/listb58c.html?tid=6&amp;orderby=hot"><span>点击次数</span></a></li>
              <li ><a href="../plus/list07bb.html?tid=6&amp;orderby=goodpost"><span>评论</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fcontent">	

	       <div id="portheme"><div id="very"></div>
            <div class="porimg left">
                <a href="#" title="推荐主题"><img src="http://www.wopus.org/wp-content/themes/wopus/images/temp_theme1.png" /></a>
            </div>
            <div class="por_text left">
                <h2><a href="http://themes.wopus.org/themes/english-lanuage/1062.html">Revolution Two系列免费主题</a></h2>
                <span>主题作者：Brian Gardner</span>
                <p>插件简介：一套非常经典的开源主题，主题虽然是免费的，但使用价值和受欢迎程度绝对超过很多主题，而这也是Wopus推荐的主要原因。</p>
                <div>
                    <a href="http://themes.wopus.org/themes/english-lanuage/1062.html" title="查看DEMO"><img src="http://www.wopus.org/wp-content/themes/wopus/images/button_viewthemes.png" alt="查看DEMO" /></a>
                    <a href="http://themes.wopus.org/themes/english-lanuage/1062.html" title="主题下载"><img src="http://www.wopus.org/wp-content/themes/wopus/images/button_downloadthemes.png" alt="主题下载" /></a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
	
	<div id="verybg"></div>
    <div class="portfolio">
					<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>				
							<div class="card">
								<div class="thumb"><a href="user_portfolio_view.asp?PORT_ID=2427" title="插画"><img src="http://www.uirss.com/Users/badbpig_2010-1-16_18-53-38_IRtSg6nFyQ/Portfolio/Preview_BADBOY.jpg" width="200" height="150" /></a></div>
								<h5 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
								<p class="author"><b title="0" class="comment"></b><b title="0" class="liked"></b>
								<a href="user_home.asp?USER_ID=6436" title="badbpig">
								badbpig
								</a></p>
							</div>
								
			<?php endwhile; ?>
					<div class="clr"></div>
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
	
<?php if(function_exists('wp_pagenavi')) : ?>

<?php wp_pagenavi() ?>

<?php else : ?>

<?php endif; ?>

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
    </div>
  </div>
<?php get_sidebar(); ?>
<div class="clear">
	  </div>
 </div>

<?php get_footer(); ?>