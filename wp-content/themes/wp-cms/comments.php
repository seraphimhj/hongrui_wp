<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
?>

<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>	
  <div class="error-tip">
  <?php _e('Enter your password to view comments.', 'newspoon'); ?>
  </div>
<?php return; endif; ?>

<?php
	$trackbacks = $wpdb->get_results($wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_approved = '1' AND (comment_type = 'pingback' OR comment_type = 'trackback') ORDER BY comment_date", $post->ID));
?>

<?php if ($comments || comments_open()) : ?>
<div class="l_left mT10">
    <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2 class="wh2">           <?php if(comments_open()) : ?>
<a href="#respond"><?php _e('赶快留言冒泡', 'newspoon'); ?></a>
 <?php endif; ?>

			  </h2>
          </span></span>
           <div class="iterm right" style="padding-right: 30px;">
		    <div class="comment-title">
            <ul>
            <li id="tabcomment1" onclick="setTab('tabcomment',1,2)" class="current"><?php _e('Comments', 'newspoon'); echo (' (' . (count($comments)-count($trackbacks)) . ')'); ?>
 </li>
 <li id="tabcomment2" onclick="setTab('tabcomment',2,2)"><?php _e('Trackbacks', 'newspoon'); echo (' (' . count($trackbacks) . ')'); ?></li>
            </ul>
	
 </div>	
 

			
          </div>
          </div>
      </div>
    </div>
    <div class="fcontent">
	
<div id="comments">

 <!-- end comment title -->
  <div id="contabcomment1">
  <?php if(have_comments()) : ?>
  <div id="comment-list">
  <ul class="parents">
  <?php wp_list_comments(array(
   'style' => 'ul',
   'type' => 'comment',
   'callback' => 'custom_comments',
   'end-callback' => 'custom_comments_end'
   )
   ); ?>
  </ul>
  </div>

  <?php
	if (get_option('page_comments')) {
		$comment_pages = paginate_comments_links('echo=0');
		if ($comment_pages) {
?>
	<div id="commentnavi">		
	   <em><?php _e('Comment pages', 'newspoon'); ?>:</em><span><?php echo $comment_pages; ?></span>
	</div>
<?php
		}
	}
?>

<!-- end commentpages -->
  <?php else : ?>
  <div class="error-tip">
  <?php _e('No comments yet.', 'newspoon'); ?>
  </div>
  <?php endif; ?>
  </div>
<!-- end commentlist -->
<div id="contabcomment2" class="nodis">
<?php if ($trackbacks) : ?>
<div id="trackback-list">
<ul>
<?php foreach ($trackbacks as $comment) : ?>
<li id="comment-<?php comment_ID( ); ?>">
<span><?php comment_author_link(); ?></span><?php comment_date('Y-m-d') ?>
</li>
<?php endforeach; ?>
</ul>
</div>
<?php else : ?>
<div class="error-tip">
<?php _e('No trackback yet.', 'newspoon'); ?>
</div>
<?php endif; ?>
</div>
<!-- end trackbacklist -->
</div>
<?php endif; ?>
<!-- end comments -->

<!-- begin postcomment -->
<?php if (!comments_open()) : // If comments are closed. ?>
<div class="error-tip">
<?php _e('Comments are closed.', 'newspoon'); ?>
</div>
<?php elseif ( get_option('comment_registration') && !$user_ID ) : // If registration required and not logged in. ?>
<div class="error-tip">
<?php if (function_exists('wp_login_url')) {$login_link = wp_login_url();} else { $login_link = site_url('wp-login.php', 'login'); } ?>
<?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'newspoon'), $login_link); ?>
</div>
<?php else : ?>

<div id="respond" class="post-comment">
 <div id="post-comment-title">
	<span id="comment-reply"><?php comment_form_title(__('吐个泡浮上去.','newspoon'), __('Leave a Reply to %s.','newspoon'), true); ?></span>
    <span id="cancel-comment-reply"><?php cancel_comment_reply_link(__('点击这里取消回复.','newspoon')) ?></span>
 </div>
 <div id="post-comment-body">
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	 <?php if ($user_ID) : ?>
	 <?php if (function_exists('wp_logout_url')) {$logout_link = wp_logout_url();} else { $logout_link = site_url('wp-login.php?action=logout', 'login'); } ?>
	 <div class="login-title">
	 <?php _e('Logged in as', 'newspoon'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><b><?php echo $user_identity; ?></b></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account', 'newspoon'); ?>"><?php _e('Logout &raquo;', 'newspoon'); ?></a>
	 </div>
	<?php else : ?>
	<?php if ( $comment_author != "" ) : ?>
	<div class="login-title">
	<?php printf(__('Welcome back <strong>%s</strong>.', 'newspoon'), $comment_author) ?>
	<span id="show_author_info">
	<a href="javascript:void(0);" onclick="newspoon.setStyleDisplay('author_info','');newspoon.setStyleDisplay('show_author_info','none');newspoon.setStyleDisplay('hide_author_info','');"><?php _e('Change &raquo;'); ?></a>
	</span>
	<span id="hide_author_info">
	<a href="javascript:void(0);" onclick="newspoon.setStyleDisplay('author_info','none');newspoon.setStyleDisplay('show_author_info','');newspoon.setStyleDisplay('hide_author_info','none');"><?php _e('Close &raquo;'); ?></a>
	</span>
	</div>
	<?php endif; ?>

	<div id="author_info">
	<div class="user-info">
	<ul>
	

	<li>
	<input type="text" name="author" id="author" class="text-field" value="<?php echo $comment_author; ?>" size="24" tabindex="1" />
	<label for="author" class="small"><?php _e('Name', 'newspoon'); ?> <?php if ($req) _e('(required)', 'newspoon'); ?></label>
	</li>
	<li>
	<input type="text" name="email" id="email" class="text-field" value="<?php echo $comment_author_email; ?>" size="24" tabindex="2" />
	<label for="email" class="small"><?php _e('E-Mail (will not be published)', 'newspoon');?> <?php if ($req) _e('(required)', 'newspoon'); ?></label>
	</li>
	<li>
	<input type="text" name="url" id="url" class="text-field" value="<?php echo $comment_author_url; ?>" size="24" tabindex="3" />
	<label for="url" class="small"><?php _e('Website', 'newspoon'); ?></label>
	</li>
	</ul>
	</div>
	</div>

	<a href='#' class="commentpic" onclick='comment_image(); return false;'></a></span> 
	
	<?php if ( $comment_author != "" ) : ?>
	<script type="text/javascript">newspoon.setStyleDisplay('hide_author_info','none');newspoon.setStyleDisplay('author_info','none');</script>
	<?php endif; ?>

	<?php endif; ?>

	<!-- comment input -->
	<div id="post-comment-text">
		<textarea name="comment" id="comment" tabindex="4" rows="8"></textarea>
	</div>

	<!-- comment submit and rss -->
	<div id="submit-box">
	<span>
	<input name="submit" type="submit" id="submit" class="post-comment-button" tabindex="5" value="<?php _e('', 'newspoon'); ?>" />
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	<?php comment_id_fields(); ?>
	</span>
<a href='#' class="commentpic" onclick='comment_image(); return false;'></a>
	</div>
	<?php do_action('comment_form', $post->ID); ?>
 </form>
 </div>
</div>
<?php endif; ?>
<!-- end postcomment -->


    </div> 
    <div class="bg_buttom">
      <div class="bg_buttom_r"></div>
    </div>
</div>






