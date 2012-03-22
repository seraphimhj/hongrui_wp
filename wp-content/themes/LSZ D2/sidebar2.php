<?php $options = get_option('wpbus_options'); ?>
<div id="sidebar">
    <div class="blog-master">
	    <p><?php $userface = $options['userface']; if ( ! empty( $userface ) ) echo '<img src="'.$userface.'" />' ; ?></p>
		<ul><?php wp_list_pages('title_li=0&sort_column=menu_order'); ?></ul>
	</div>

    <div class="widget_search">
		<form action="<?php bloginfo('home'); ?>" method="get">
		<input type="text" class="txt" id="s1" name="s" size="36" value="<?php the_search_query(); ?>" /><input type="submit" class="btn" id="searchsubmit" name="submit" value="Search" />
		</form>
	</div>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(('自定义侧栏')) ) : ?>

	<div class="topcomment">
    	<h3>本周口水榜</h3>
        <?php include('templates/topcommentors.php'); ?>
        <div style="clear:both;"></div>
    </div>
    
    <div class="recent-comments">
		<h3>最新评论</h3>
		<?php include('templates/recentcomment.php'); ?>
	</div>

	<div class="widget mostview">
		<h3>热门日志</h3>
		<?php include('templates/mostview.php'); ?>
	</div>

	<div class="widget random">
		<h3>随机推荐</h3>
		<?php include('templates/random.php'); ?>
	</div>


<?php endif; ?>


</div>

