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

    <div class="widget blogroll">
		<h3>左邻右舍(随机20名)</h3>
		<ul><?php wp_list_bookmarks('title_li=&categorize=0&category=2&orderby=rand&limit=20'); ?></ul>
	</div>

	<div class="widget calendar">
		<?php get_calendar(); ?>
	</div>

	<div class="widget archives">
		<h3>日志存档</h3>
		<ul><?php wp_get_archives('type=monthly'); ?></ul>
	</div>
    <div class="widget archives">
		<h3>博客统计</h3>
		<ul><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a> 目前已生存<?php echo floor((time()-strtotime("2009-07-05"))/86400); ?>天 . 日志:<?php $count_posts = wp_count_posts(); echo $published_posts = $count_posts->publish; ?> . 评论:<?php $total_comments = get_comment_count(); echo $total_comments['approved'];?> . 标签:<?php echo $count_tags = wp_count_terms('post_tag'); ?> . 访问:<?php get_totalviews(true, true, true); ?></ul>
	</div>
<?php endif; ?>


</div>

