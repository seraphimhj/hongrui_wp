<div class="wrapper" style="margin-bottom:5px;">
  <div style="margin: 0pt auto; width: 100%; height: auto;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>       
		<td><div class="bg_top"><div id="new"></div>
              <div class="bg_top_r"></div>
            </div>
            <div id="bg_center2">
              <div id="down">
          <div id="hot">
			<div id="hot_title"><?php query_posts('showposts=1'); while (have_posts()) : the_post(); ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="link01"  rel="bookmark"><?php the_title(); ?></a> 	
			</div>
			<div id="hot_summary">	<?php the_excerpt(); ?>		
				<?php endwhile; ?></div>
			<div class="line01"></div>
			     <ul>               
	   <?php query_posts('showposts=5&offset=1'); while (have_posts()) : the_post(); ?>
	   
       <li><span class="news"></span><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="a_blue"><?php the_title(); ?></a></li>
	   
	   <?php endwhile; ?>
      </ul>
	  
		
		</div>
                <div class="clear"></div>
              </div>
              <div class="bg_buttom" style="width: 289px;">
                <div class="bg_buttom_r"></div>
              </div>
            </div></td>
      
          <td>
		  <div style="width: 386px; margin:0 5px;">
      <div class="bg_top">
              <div class="bg_top_r"></div>
            </div>

			     <div class="fcontent">
     <?php include(TEMPLATEPATH."/templates/huandeng.php");?> 
    </div>
 
              <div class="bg_buttom" style="width: 383px;">
                <div class="bg_buttom_r"></div>
              </div>
            </div>
     
     </div>
			</td>
          <td><div class="bg_top">
              <div class="bg_top_r"></div>
            </div>
            <div id="bg_center">
              <div id="down3">
			   <div id="top10">
         	<ul>
<?php if (function_exists('get_most_viewed')): ?> 
<?php get_most_viewed('post',8); ?> 
<?php endif; ?>
		

		</ul>
</div>
                <div class="clear"></div>
              </div>
              <div class="bg_buttom" style="width: 269px;">
                <div class="bg_buttom_r"></div>
              </div>
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
