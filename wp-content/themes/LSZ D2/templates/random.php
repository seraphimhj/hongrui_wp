<ul>
<?php  
		 global $post;
		 $postid = $post->ID;
		 $args = array( 'orderby' => 'rand', 'post__not_in' => array($post->ID), 'showposts' => 10);
		 $query_posts = new WP_Query(); 
		 $query_posts->query($args); 
	?>
<?php while ($query_posts->have_posts()) : $query_posts->the_post(); ?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>