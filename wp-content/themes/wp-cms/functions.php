<?php

/** newspoon options */
class newspoonOptions {

	function getOptions() {
		$options = get_option('newspoon_options');
		if (!is_array($options)) {
			$options['description'] = '';
			$options['keywords'] = '';
			$options['google_cse'] = false;
			$options['google_cse_cx'] = '';
			$options['notice'] = false;
			$options['notice_content'] = '';
            $options['link-list'] = false;
			$options['link-list_content'] = '';

			$options['colun1'] = false;
			$options['colun1_registered'] = false;
			$options['colun1_commentator'] = false;
			$options['colun1_visitor'] = false;
            $options['colun2'] = false;
				$options['colun2_registered'] = false;
			$options['colun2_commentator'] = false;
			$options['colun2_visitor'] = false;
            $options['colun3'] = false;
				$options['colun3_registered'] = false;
			$options['colun3_commentator'] = false;
			$options['colun3_visitor'] = false;
            $options['colun4'] = false;
				$options['colun4_registered'] = false;
			$options['colun4_commentator'] = false;
			$options['colun4_visitor'] = false;

			$options['feed'] = false;
			$options['feed_url'] = '';
	
			$options['analytics'] = false;
			$options['analytics_content'] = '';
			update_option('newspoon_options', $options);
		}
		return $options;
	}

	function add() {
		if(isset($_POST['newspoon_save'])) {
			$options = newspoonOptions::getOptions();

			// meta
			$options['description'] = stripslashes($_POST['description']);
			$options['keywords'] = stripslashes($_POST['keywords']);
			
			// google custom search engine
			if ($_POST['google_cse']) {
				$options['google_cse'] = (bool)true;
			} else {
				$options['google_cse'] = (bool)false;
			}
			$options['google_cse_cx'] = stripslashes($_POST['google_cse_cx']);

			// notice
			if ($_POST['notice']) {
				$options['notice'] = (bool)true;
			} else {
				$options['notice'] = (bool)false;
			}
			$options['notice_content'] = stripslashes($_POST['notice_content']);
			// link-list
			if ($_POST['link-list']) {
				$options['link-list'] = (bool)true;
			} else {
				$options['link-list'] = (bool)false;
			}
			$options['link-list_content'] = stripslashes($_POST['link-list_content']);


			// colun1
			if ($_POST['colun1']) {
				$options['colun1'] = (bool)true;
			} else {
				$options['colun1'] = (bool)false;
			}
			if (!$_POST['colun1_registered']) {
				$options['colun1_registered'] = (bool)false;
			} else {
				$options['colun1_registered'] = (bool)true;
			}
			if (!$_POST['colun1_commentator']) {
				$options['colun1_commentator'] = (bool)false;
			} else {
				$options['colun1_commentator'] = (bool)true;
			}
			if (!$_POST['colun1_visitor']) {
				$options['colun1_visitor'] = (bool)false;
			} else {
				$options['colun1_visitor'] = (bool)true;
			}
			
			// colun2
			if ($_POST['colun2']) {
				$options['colun2'] = (bool)true;
			} else {
				$options['colun2'] = (bool)false;
			}
			
						if (!$_POST['colun2_registered']) {
				$options['colun2_registered'] = (bool)false;
			} else {
				$options['colun2_registered'] = (bool)true;
			}
			if (!$_POST['colun2_commentator']) {
				$options['colun2_commentator'] = (bool)false;
			} else {
				$options['colun2_commentator'] = (bool)true;
			}
			if (!$_POST['colun2_visitor']) {
				$options['colun2_visitor'] = (bool)false;
			} else {
				$options['colun2_visitor'] = (bool)true;
			}
			
			// colun3
			if ($_POST['colun3']) {
				$options['colun3'] = (bool)true;
			} else {
				$options['colun3'] = (bool)false;
			}
						if (!$_POST['colun3_registered']) {
				$options['colun3_registered'] = (bool)false;
			} else {
				$options['colun3_registered'] = (bool)true;
			}
			if (!$_POST['colun3_commentator']) {
				$options['colun3_commentator'] = (bool)false;
			} else {
				$options['colun3_commentator'] = (bool)true;
			}
			if (!$_POST['colun3_visitor']) {
				$options['colun3_visitor'] = (bool)false;
			} else {
				$options['colun3_visitor'] = (bool)true;
			}
			// colun4
			if ($_POST['colun4']) {
				$options['colun4'] = (bool)true;
			} else {
				$options['colun4'] = (bool)false;
			}
						if (!$_POST['colun4_registered']) {
				$options['colun4_registered'] = (bool)false;
			} else {
				$options['colun4_registered'] = (bool)true;
			}
			if (!$_POST['colun4_commentator']) {
				$options['colun4_commentator'] = (bool)false;
			} else {
				$options['colun4_commentator'] = (bool)true;
			}
			if (!$_POST['colun4_visitor']) {
				$options['colun4_visitor'] = (bool)false;
			} else {
				$options['colun4_visitor'] = (bool)true;
			}
	
			// feed
			if ($_POST['feed']) {
				$options['feed'] = (bool)true;
			} else {
				$options['feed'] = (bool)false;
			}
			$options['feed_url'] = stripslashes($_POST['feed_url']);
			if (!$_POST['feed_readers']) {
				$options['feed_readers'] = (bool)false;
			} else {
				$options['feed_readers'] = (bool)true;
			}
			
			// analytics
			if ($_POST['analytics']) {
				$options['analytics'] = (bool)true;
			} else {
				$options['analytics'] = (bool)false;
			}
			$options['analytics_content'] = stripslashes($_POST['analytics_content']);

			update_option('newspoon_options', $options);

		} else {
			newspoonOptions::getOptions();
		}

		add_theme_page(__('Current Theme Options', 'newspoon'), __('Current Theme Options', 'newspoon'), 'edit_themes', basename(__FILE__), array('newspoonOptions', 'display'));
	}

	function display() {
		$options = newspoonOptions::getOptions();
?>

<form action="#" method="post" enctype="multipart/form-data" name="newspoon_form" id="newspoon_form">
<div class="wrap">
<h2><?php _e('Current Theme Options', 'newspoon'); ?></h2>

<table class="form-table">
<tbody>
<tr valign="top">
<th scope="row"><?php _e('Meta', 'newspoon'); ?></th>
<td>
<?php _e('Description:', 'newspoon'); ?>
<br/>
<input type="text" name="description" id="description" class="code" style="width:98%;" value="<?php echo($options['description']); ?>">
<br/>
<?php _e('Keywords:', 'newspoon'); ?> <small><?php _e('( Separate keywords with commas )', 'newspoon'); ?></small>
<br/>
<input type="text" name="keywords" id="keywords" class="code" style="width:98%;" value="<?php echo($options['keywords']); ?>">
</td>
</tr>
</tbody>
</table>

	<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row"><?php _e('Search', 'newspoon'); ?></th>
					<td>
						<label>
							<input name="google_cse" type="checkbox" value="checkbox" <?php if($options['google_cse']) echo "checked='checked'"; ?> />
							 <?php _e('Using google custom search engine.', 'newspoon'); ?>
						</label>
						<br/>
						<?php _e('CX:', 'newspoon'); ?>
						 <input type="text" name="google_cse_cx" id="google_cse_cx" class="code" size="40" value="<?php echo($options['google_cse_cx']); ?>">
						<br/>
						<?php printf(__('Find <code>name="cx"</code> in the <strong>Search box code</strong> of <a href="%1$s">Google Custom Search Engine</a>, and type the <code>value</code> here.<br/>For example: <code>014782006753236413342:1ltfrybsbz4</code>', 'inove'), 'http://www.google.com/coop/cse/'); ?>
					</td>
				</tr>
			</tbody>
		</table>


<table class="form-table">
<tbody>
<tr valign="top">
<th scope="row">
<?php _e('Notice', 'newspoon'); ?>
<br/>
<small style="font-weight:normal;"><?php _e('HTML enabled', 'newspoon'); ?></small>
</th>
<td>
<!-- notice START -->
<label>
<input name="notice" type="checkbox" value="checkbox" <?php if($options['notice']) echo "checked='checked'"; ?> />
<?php _e('This notice bar will display at the top of posts on homepage.', 'newspoon'); ?>
</label>
<br />
<label>
<textarea name="notice_content" id="notice_content" cols="50" rows="10" style="width:98%;font-size:12px;" class="code"><?php echo($options['notice_content']); ?></textarea>
</label>
<!-- notice END -->
</td>
</tr>
</tbody>
</table>


<table class="form-table">
<tbody>
<tr valign="top">
<th scope="row">
<?php _e('colun1', 'newspoon'); ?>

</th>
<td>
<!-- colun1 START -->
<label>
<input name="colun1" type="checkbox" value="checkbox" <?php if($options['colun1']) echo "checked='checked'"; ?> />
<?php _e('Whether the column one is displayed in the Home', 'newspoon'); ?>
</label>
------<?php _e('Who can see?', 'newspoon'); ?>
						<label style="margin-left:10px;">
							<input name="colun1_registered" type="checkbox" value="checkbox" <?php if($options['colun1_registered']) echo "checked='checked'"; ?> />
							 <?php _e('Registered Users', 'newspoon'); ?>
						</label>
						<label style="margin-left:10px;">
							<input name="colun1_commentator" type="checkbox" value="checkbox" <?php if($options['colun1_commentator']) echo "checked='checked'"; ?> />
							 <?php _e('Commentator', 'newspoon'); ?>
						</label>
						<label style="margin-left:10px;">
							<input name="colun1_visitor" type="checkbox" value="checkbox" <?php if($options['colun1_visitor']) echo "checked='checked'"; ?> />
							 <?php _e('Visitors', 'newspoon'); ?>
						</label>
<!-- colun1 END -->
</td>
</tr>
</tbody>
</table>


<table class="form-table">
<tbody>
<tr valign="top">
<th scope="row">
<?php _e('colun2', 'newspoon'); ?>

</th>
<td>
<!-- colun2 START -->
<label>
<input name="colun2" type="checkbox" value="checkbox" <?php if($options['colun2']) echo "checked='checked'"; ?> />
<?php _e('Whether the column two is displayed in the Home', 'newspoon'); ?>
</label>
------<?php _e('Who can see?', 'newspoon'); ?>
						<label style="margin-left:10px;">
							<input name="colun2_registered" type="checkbox" value="checkbox" <?php if($options['colun2_registered']) echo "checked='checked'"; ?> />
							 <?php _e('Registered Users', 'newspoon'); ?>
						</label>
						<label style="margin-left:10px;">
							<input name="colun2_commentator" type="checkbox" value="checkbox" <?php if($options['colun2_commentator']) echo "checked='checked'"; ?> />
							 <?php _e('Commentator', 'newspoon'); ?>
						</label>
						<label style="margin-left:10px;">
							<input name="colun2_visitor" type="checkbox" value="checkbox" <?php if($options['colun2_visitor']) echo "checked='checked'"; ?> />
							 <?php _e('Visitors', 'newspoon'); ?>
						</label>
<!-- colun2 END -->
</td>
</tr>
</tbody>
</table>

<table class="form-table">
<tbody>
<tr valign="top">
<th scope="row">
<?php _e('colun3', 'newspoon'); ?>

</th>
<td>
<!-- colun3 START -->
<label>
<input name="colun3" type="checkbox" value="checkbox" <?php if($options['colun3']) echo "checked='checked'"; ?> />
<?php _e('Whether the column three is displayed in the Home', 'newspoon'); ?>
</label>
------<?php _e('Who can see?', 'newspoon'); ?>
						<label style="margin-left:10px;">
							<input name="colun3_registered" type="checkbox" value="checkbox" <?php if($options['colun3_registered']) echo "checked='checked'"; ?> />
							 <?php _e('Registered Users', 'newspoon'); ?>
						</label>
						<label style="margin-left:10px;">
							<input name="colun3_commentator" type="checkbox" value="checkbox" <?php if($options['colun3_commentator']) echo "checked='checked'"; ?> />
							 <?php _e('Commentator', 'newspoon'); ?>
						</label>
						<label style="margin-left:10px;">
							<input name="colun3_visitor" type="checkbox" value="checkbox" <?php if($options['colun3_visitor']) echo "checked='checked'"; ?> />
							 <?php _e('Visitors', 'newspoon'); ?>
						</label>
<!-- colun3 END -->
</td>
</tr>
</tbody>
</table>

<table class="form-table">
<tbody>
<tr valign="top">
<th scope="row">
<?php _e('colun4', 'newspoon'); ?>

</th>
<td>
<!-- colun4 START -->
<label>
<input name="colun4" type="checkbox" value="checkbox" <?php if($options['colun4']) echo "checked='checked'"; ?> />
<?php _e('Whether the column four is displayed in the Home', 'newspoon'); ?>
</label>
------<?php _e('Who can see?', 'newspoon'); ?>
						<label style="margin-left:10px;">
							<input name="colun4_registered" type="checkbox" value="checkbox" <?php if($options['colun4_registered']) echo "checked='checked'"; ?> />
							 <?php _e('Registered Users', 'newspoon'); ?>
						</label>
						<label style="margin-left:10px;">
							<input name="colun4_commentator" type="checkbox" value="checkbox" <?php if($options['colun4_commentator']) echo "checked='checked'"; ?> />
							 <?php _e('Commentator', 'newspoon'); ?>
						</label>
						<label style="margin-left:10px;">
							<input name="colun4_visitor" type="checkbox" value="checkbox" <?php if($options['colun4_visitor']) echo "checked='checked'"; ?> />
							 <?php _e('Visitors', 'newspoon'); ?>
						</label>
<!-- colun4 END -->
</td>
</tr>
</tbody>
</table>

<table class="form-table">
<tbody>
<tr valign="top">
<th scope="row">
<?php _e('link-list', 'newspoon'); ?>
<br/>
<small style="font-weight:normal;"><?php _e('HTML enabled', 'newspoon'); ?></small>
</th>
<td>
<!-- link-listSTART -->
<label>
<input name="link-list" type="checkbox" value="checkbox" <?php if($options['link-list']) echo "checked='checked'"; ?> />
<?php _e('Whether link coperation is displayed on the home page', 'newspoon'); ?>
</label>
<br />
<label>
<textarea name="link-list_content" id="link-list_content" cols="50" rows="10" style="width:98%;font-size:12px;" class="code"><?php echo($options['link-list_content']); ?></textarea>
</label>
<!-- link-list END -->
</td>
</tr>
</tbody>
</table>


<table class="form-table">
<tbody>
<tr valign="top">
<th scope="row"><?php _e('Feed', 'newspoon'); ?></th>
<td>
<label>
<input name="feed" type="checkbox" value="checkbox" <?php if($options['feed']) echo "checked='checked'"; ?> />
<?php _e('Custom feed.', 'newspoon'); ?>
</label>
<br/>
<?php _e('URL:', 'newspoon'); ?> <input type="text" name="feed_url" id="feed_url" class="code" size="60" value="<?php echo($options['feed_url']); ?>">
</td>
</tr>
</tbody>
</table>

		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						<?php _e('Web Analytics', 'newspoon'); ?>
						<br/>
						<small style="font-weight:normal;"><?php _e('HTML enabled', 'newspoon'); ?></small>
					</th>
					<td>
						<label>
							<input name="analytics" type="checkbox" value="checkbox" <?php if($options['analytics']) echo "checked='checked'"; ?> />
							 <?php _e('Add web analytics code to your site. (e.g. Google Analytics, Yahoo! Web Analytics, ...)', 'newspoon'); ?>
						</label>
						<label>
							<textarea name="analytics_content" cols="50" rows="10" id="analytics_content" class="code" style="width:98%;font-size:12px;"><?php echo($options['analytics_content']); ?></textarea>
						</label>
					</td>
				</tr>
			</tbody>
		</table>


<p class="submit">
<input class="button-primary" type="submit" name="newspoon_save" value="<?php _e('Save Changes', 'newspoon'); ?>" />
</p>
</div>

</form>

<?php
	}
}

// register functions
add_action('admin_menu', array('newspoonOptions', 'add'));
//Pagenavi 
  
function par_pagenavi($range = 9){ 
  // $paged - number of the current page 
  global $paged, $wp_query; 
  // How much pages do we have? 
  if ( !$max_page ) { 
    $max_page = $wp_query->max_num_pages; 
  } 
  // We need the pagination only if there are more than 1 page 
  if($max_page > 1){ 
    if(!$paged){ 
      $paged = 1; 
    } 
echo '<span><strong>&nbsp;&nbsp;&nbsp;</strong>'.$paged.' / '.$max_page.'</span>'; 
    // On the first page, don't put the First page link 
    if($paged != 1){ 
      echo "<a href='" . get_pagenum_link(1) . "' class='extend' > <?php _e('come back home page.', 'newspoon'); ?></a>"; 
    } 
    // To the previous page 
    previous_posts_link(' ? '); 
    // We need the sliding effect only if there are more pages than is the sliding range 
    if($max_page > $range){ 
      // When closer to the beginning 
      if($paged < $range){ 
        for($i = 1; $i <= ($range + 1); $i++){ 
          echo "<a href='" . get_pagenum_link($i) ."'"; 
          if($i==$paged) echo " class='current'"; 
          echo ">$i</a>"; 
        } 
      } 
      // When closer to the end 
      elseif($paged >= ($max_page - ceil(($range/2)))){ 
        for($i = $max_page - $range; $i <= $max_page; $i++){ 
          echo "<a href='" . get_pagenum_link($i) ."'"; 
          if($i==$paged) echo " class='current'"; 
          echo ">$i</a>"; 
        } 
      } 
      // Somewhere in the middle 
      elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){ 
        for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){ 
          echo "<a href='" . get_pagenum_link($i) ."'"; 
          if($i==$paged) echo " class='current'"; 
          echo ">$i</a>"; 
        } 
      } 
    } 
    // Less pages than the range, no sliding effect needed 
    else{ 
      for($i = 1; $i <= $max_page; $i++){ 
        echo "<a href='" . get_pagenum_link($i) ."'"; 
        if($i==$paged) echo " class='current'"; 
        echo ">$i</a>"; 
      } 
    } 
    // Next page 
    next_posts_link(' ? '); 
    // On the last page, don't put the Last page link 
    if($paged != $max_page){ 
      echo "<a href='" . get_pagenum_link($max_page) . "' class='extend'> <?php _e('slip to last page.', 'newspoon'); ?> </a>"; 
    } 
  } 
}


/** l10n */
function theme_init(){
	load_theme_textdomain('newspoon', get_template_directory() . '/languages');
}
add_action ('init', 'theme_init');

/** widgets */
if( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'single_sidebar',
		'before_widget' => '<dl class="widget %2$s">',
		'after_widget' => '</dd></dl>',
		'before_title' => '<dt><h3>',
		'after_title' => '</h3></dt><dd>'
	));
	register_sidebar(array(
		'name' => 'normal_sidebar',
		'before_widget' => '<dl class="widget %2$s">',
		'after_widget' => '</dd></dl>',
		'before_title' => '<dt><h3>',
		'after_title' => '</h3></dt><dd>'
	));
}




/* recent comments*/
function get_recent_comments() {
	$before = '<li> ';
	$after = '</li>';
	global $wpdb;
	$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID,
    comment_post_ID, comment_author, comment_date_gmt, comment_approved,
    comment_type,comment_author_url,comment_author_email,
    SUBSTRING(comment_content,1,32) AS com_excerpt
    FROM $wpdb->comments
    LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =
    $wpdb->posts.ID)
    WHERE comment_approved = '1' AND comment_type = '' AND
    post_password = ''
    AND comment_author != 'admin'
    AND comment_author != 'newspoon'
    ORDER BY comment_date_gmt DESC
    LIMIT 8";
	$comments = $wpdb->get_results($sql);
	$output = '';
	foreach ($comments as $comment) {
		$comment_author = strip_tags($comment->comment_author);
		$comment_content = strip_tags($comment->com_excerpt);
		$permalink = get_permalink($comment->ID)."#comment-".$comment->comment_ID;
		$post_title = $comment->post_title;
		$email = $comment->comment_author_email;
		$output .= $before .get_avatar($email, 16). $comment_author.':'.'<a href="' . $permalink . '" title="on ' . $post_title . '">'. $comment_content .'</a>' . $after;
	}
	echo $output;
}

/*custom_comments*/
function custom_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	$GLOBALS['comment_depth'] = $depth;
	global $commentcount;
	if(!$commentcount) {
		$commentcount = 0;
	}
?>
<li id="comment-<?php comment_ID(); ?>" class="<?php newspoon_comment_class(); ?>">
 <dl>
 <dt><?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 36); } ?></dt>
 <dd>
 <h3>
 <span class="num"><?php printf(++$commentcount); ?><?php _e('floor', 'newspoon'); ?></span><span><?php newspoon_comment_author(); ?></span>

 <?php
 if((get_option('thread_comments')) && ($args['type'] == 'all' || get_comment_type() == 'comment')) :
 $max_depth = get_option('thread_comments_depth');
 echo comment_reply_link(array(
 'reply_text' => __('Reply','newspoon'),
 'login_text' => __('Login to reply.','newspoon'),
 'depth' => $depth,
 'max_depth' => $max_depth,
 'before' => '<span class="comment-reply-link">',
 'after' => '</span>'
 ));
 endif;
 ?>
 <?php
 if (function_exists("qc_comment_edit_link")) {
 qc_comment_edit_link(__('Edit', 'newspoon'), '<span class="comment-ajax-edit-link"> ', '</span>');
 }
 edit_comment_link(__('Advanced edit', 'newspoon'), '<span class="comment-admin-edit-link"> ', '</span>');
 ?>

 </h3>
 <h4><?php _e('Post:', 'newspoon'); ?> <?php comment_date('Y-m-d') ?> <?php comment_time('H:i') ?></h4>
 <div class="comment-text">
 <?php if ($comment->comment_approved == '0') : ?>
 <div class="error-tip"><?php _e('Your comment is awaiting moderation.', 'newspoon'); ?></div>
 <?php endif; ?>
 <div id="comment-msg-<?php comment_ID() ?>"><?php comment_text() ?></div>
 </div>
 </dd>
 </dl>
<?php
}
function custom_comments_end() {
	echo '</li>';
}


function newspoon_comment_class() {
	global $comment;
	static $comment_alt;
	$classes = array();

	if(function_exists('get_comment_class'))
		$classes = get_comment_class();

	$classes[] = get_comment_type();;

	if($comment->user_id > 0 && $user = get_userdata($comment->user_id)) :

		$classes[] = 'user user-' . $user->user_nicename;

		if($post = get_post($post_id)) :
			if($comment->user_id === $post->post_author)
				$classes[] = 'author author-' . $user->user_nicename;
		endif;
	else :
		$classes[] = 'reader';
	endif;

	if($comment_alt++ % 2) :
		$classes[] = 'even';
		$classes[] = 'alt';
	else :
		$classes[] = 'odd';
	endif;

	$email = get_comment_author_email();
	$url = get_comment_author_url();
	if(!empty($email) && !empty($url)) {
		$microid = 'microid-mailto+http:sha1:' . sha1(sha1('mailto:'.$email).sha1($url));
		$classes[] = $microid;
	}


	$classes = join(' ', $classes);

	echo $classes;
}

function newspoon_comment_author() {
	global $comment;

	$author = get_comment_author();
	$url = get_comment_author_url();

	if($url == 'http://')
		$url = false;

	if($comment->user_id > 0) :
		$user = get_userdata($comment->user_id);
		if($user->display_name)
			$author = $user->display_name;
		elseif($user->user_nickname)
			$author = $user->nickname;
		elseif($user->user_nicename)
			$author = $user->user_nicename;
		else
			$author = $user->user_login;
	endif;

	if($url) :
		$output .= '<a href="' . $url . '" title="' . $author . '" class="external nofollow">' . $author . '</a>';
	else :
		$output .= $author;
	endif;

	echo $output;
}
/*
Comment Image Embedder
*/
function embed_images($content) {
$content = preg_replace('/\[img=?\]*(.*?)(\[\/img)?\]/e', '"<img src=\"$1\" alt=\"" . basename("$1") . "\" />"', $content);
return $content;
}
add_filter('comment_text', 'embed_images');
// -- END ---------------------------------------- 


?>
