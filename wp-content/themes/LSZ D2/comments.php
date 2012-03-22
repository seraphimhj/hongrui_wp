<?php defined('ABSPATH') or die('This file can not be loaded directly.'); ?>

<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>	
  <div class="tip">此日志已设置密码，请向博主索要密码！</div>
<?php return; endif; ?>

<?php
$trackbacks = $wpdb->get_results($wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_approved = '1' AND (comment_type = 'pingback' OR comment_type = 'trackback') ORDER BY comment_date", $post->ID));
?>

<?php if ($comments || comments_open()) : ?>
<div id="comments">
  <div id="coms-title"><?php  echo count($comments)-count($trackbacks); ?>条评论</div>

	<?php if(have_comments()) : ?>
		<ol class="coms-list"><?php wp_list_comments(array('style' => 'ul', 'type' => 'comment', 'callback' => 'custom_comments', 'end-callback' => 'custom_comments_end')); ?></ol>
		<div class="pagenavi"><?php paginate_comments_links('prev_next=0');?></div><!-- end comment pages -->
	<?php else : ?>
		<p class="tip">暂时没有评论！</p>
	<?php endif; ?>

</div><!-- end comments -->
<?php endif; ?>

<!-- begin comments-post -->
<?php if (!comments_open()) : // If comments are closed. ?>
	<div class="tip">此日志已关闭评论！</div>

<?php elseif ( get_option('comment_registration') && !$user_ID ) : // If registration required and not logged in. ?>
	<div class="tip">
	<?php if (function_exists('wp_login_url')) {$login_link = wp_login_url();} else { $login_link = site_url('wp-login.php', 'login'); } ?>
	<?php printf(__('你必须 <a href="%s">登陆后</a> 才可以发表评论！.'), $login_link); ?>
	</div>

<?php else : ?>

<div class="post-coms" id="respond">
	 <div id="post-coms-title">
		 <span id="comment-reply">发表评论</span>
		 <span id="cancel-comment-reply"><?php cancel_comment_reply_link(__('点击取消评论.')) ?></span>
	 </div><!-- end title -->

	 <div id="post-coms-body">
	  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ($user_ID) : ?>
		<?php if (function_exists('wp_logout_url')) {$logout_link = wp_logout_url();} else { $logout_link = site_url('wp-login.php?action=logout', 'login'); } ?>
			<div class="login-tip">欢迎你!<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><b><?php echo $user_identity; ?></b></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>">注销</a></div>
		<?php elseif ( $comment_author != "" ) : ?>
		  <div class="login-tip"><?php printf(__('<strong>%s</strong>，欢迎你回来！'), $comment_author) ?><em class="switch">修改资料</em></div>
		  <div class="user-form hide">
		  <fieldset>
		    <p>
			<label for="author">你的大名</label>
            <input type="text" name="author" id="author" class="txt" value="<?php echo $comment_author; ?>" size="24" tabindex="1" /><span><?php if ($req) _e('(必填)'); ?></span>
			</p>
			<p>
			<label for="email">电子邮箱</label>
			<input type="text" name="email" id="email" class="txt" value="<?php echo $comment_author_email; ?>" size="24" tabindex="2" /><span><?php if ($req) _e('(必填)'); ?></span>
			</p>
			<p>
			<label for="url">个人网站</label>
			<input type="text" name="url" id="url" class="txt" value="<?php echo $comment_author_url; ?>" size="24" tabindex="3" />
			</p>
		  </fieldset>
		  </div>
		<?php else : ?>
		  <div class="user-form">
		  <fieldset>
		    <p>
			<label for="author">你的大名</label>
            <input type="text" name="author" id="author" class="txt" value="<?php echo $comment_author; ?>" size="24" tabindex="1" /><span><?php if ($req) _e('*必填'); ?></span>
			</p>
			<p>
			<label for="email">电子邮箱</label>
			<input type="text" name="email" id="email" class="txt" value="<?php echo $comment_author_email; ?>" size="24" tabindex="2" /><span><?php if ($req) _e('*必填'); ?></span>
			</p>
			<p>
			<label for="url">个人网站</label>
			<input type="text" name="url" id="url" class="txt" value="<?php echo $comment_author_url; ?>" size="24" tabindex="3" />
			</p>
		  </fieldset>
		  </div>
		<?php endif; ?>
		<div class="post-content">
			<div id="post-coms-txt"><textarea name="comment" id="comment" class="txt"  tabindex="4"></textarea></div>
            <?php do_action('comment_form', $post->ID); ?>
			<div id="post-coms-btn">
			<input name="submit" type="submit" id="submit" class="btn" tabindex="5" value="发表评论" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
            <?php comment_id_fields(); ?>
			</div>
		</div>
	  </form>
	 </div><!-- end body -->
</div>

<?php endif; ?>