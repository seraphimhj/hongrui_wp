<!-- 幻灯 把下面的('showposts=5&cat=80')括号里面cat=6�?#54改成你的幻灯分类代表的分类ID-->


<?php query_posts('showposts=5&cat=6'); ?>
<div id="fade_focus">
    <div class="loading"><br /><br />Loading...<br /><br /><img src="<?php bloginfo('template_url'); ?>/images/jiaz.gif" width="32" height="32" alt="loading"/></div>
    <ul>
    <?php while (have_posts()) : the_post(); ?>
      <li>
      <?php if( get_post_meta($post->ID, "thumbnail", true) ): ?>
      <a href="<?php the_permalink() ?>" target="_blank"><img src="<?php echo get_post_meta($post->ID, "thumbnail", true); ?>" alt="<?php the_title() ?>" width="280px" height="200px" /></a>
      <?php else: ?>
      <a href="<?php the_permalink() ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/moren.jpg" width="386" height="240" alt="<?php the_title() ?>" /></a>
      <?php endif; ?>
      </li>
    <?php endwhile;?> 
    </ul>
</div>

<script src="<?php bloginfo('template_url'); ?>/js/js.js" type="text/javascript"></script>
	<!-- /幻灯 -->