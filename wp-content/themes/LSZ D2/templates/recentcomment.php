<ul>
<?php
global $wpdb;
$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, 
			comment_author, comment_date_gmt, comment_date, comment_approved,comment_author_email, 
			comment_type,comment_author_url, 
			SUBSTRING(comment_content,1,12) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' 
			AND comment_type = '' 
			AND comment_author != 'admin'
			AND user_id != '1'
			AND user_id != '2' 
			AND post_password = '' 
			ORDER BY comment_date_gmt DESC LIMIT 8";

$comments = $wpdb->get_results($sql);
$output = $pre_HTML;
			foreach ($comments as $comment) {
			$comment_author = strip_tags($comment->comment_author);
			$comment_content = strip_tags($comment->com_excerpt);
			$permalink = get_permalink($comment->ID)."#comment-".$comment->comment_ID;
			$post_title = $comment->post_title;
			$comment_date = $comment->comment_date;
			$email = $comment->comment_author_email;
			$output .= '<li><dl><dt>'.get_avatar($email, 24).'</dt><dd><h5>'.'<a href="'.$permalink.'" title="'.$post_title.'">'.$comment_content.'&raquo;'.'</a></h5><small class="en">'.'Post: '.$comment_date.'</small></dd></dl></li>'  ;
			}
$output .= $post_HTML;
$output = convert_smilies($output);
echo $output;
?>
</ul>
