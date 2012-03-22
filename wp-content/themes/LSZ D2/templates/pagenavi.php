<?php if(function_exists('wp_pagenavi')) : ?>
<?php wp_pagenavi() ?>
<?php else : ?>
	<div id="normal-navi">
	<span class="prev"><?php previous_posts_link(__('上一页')); ?></span>
	<span class="next"><?php next_posts_link(__('下一页')); ?></span>
	</div>
<?php endif; ?>