<div class="post<?php sticky_class(); ?>"  id="post-<?php the_ID(); ?>">
		<div class="post-data">
			<div class="title">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<h3><span>分类：<?php the_category(', '); ?></span><span>评论：<?php comments_popup_link(__('0条'), __('1条'), __('%条'), '', __('已关闭评论')); ?></span><span>作者：<?php the_author(); ?></span><span>日期：<?php the_time('Y-m-d'); ?></span><?php if (function_exists('the_views')) : ?><span>阅读：<?php the_views(); ?></span><?php endif; ?>
			</h3>
			</div>
		</div>
		<div class="post-txt"><?php echo cut_str(strip_tags(apply_filters('the_content', $post->post_content)),500,"…"); ?></div>
	    <?php the_tags('<div class="tags">Tags: ', ' , ', '</div>'); ?>
</div>