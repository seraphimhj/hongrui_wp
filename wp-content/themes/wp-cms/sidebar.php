  <div class="l_right">
    <div id="product">
      <div class="stitle"> 订阅本站内容 </div>
      <div class="scontent">
        <div class="sliterm">
   <p>
                <a class="feedme" href="http://www.newspoon.com/feed" rel="RSS">RSS Feed</a>
                Subscribe me via <a class="rssli" href="http://www.newspoon.com/feed" title="Rss Feed">Rss Feed</a>. Choose a Reader: <a class="xgli" href="http://www.xianguo.com/subscribe.php?url=http://www.newspoon.com/feed" title="Xianguo Reader" rel="nofollow">鲜果</a>, <a class="grli" href="http://fusion.google.com/add?feedurl=http://www.newspoon.com/feed" title="Google Reader" rel="nofollow">Google Reader</a>, <a class="zxli" href="http://www.zhuaxia.com/add_channel.php?url=http://www.newspoon.com/feed" title="Zhuaxia Reader" rel="nofollow">抓虾</a>, <a class="ydli" href="http://reader.yodao.com/#url=http://www.newspoon.com/feed" title="Yodao Reader" rel="nofollow">有道</a>, or E-mail...</p>	
					
				
        </div>
      </div>
      <div class="stitle_buttom"> </div>
    </div>
    
    <div id="buyguide" style="margin-top:5px;">
      <div class="lh3">
        <div class="rh3">
          <div class="title"><span class="title_t left"><span class="title_t_i left">
            <h2>随机推荐</h2>
            </span></span></div>
        </div>
      </div>
      <div class="fcontent">
		   <div id="top10">
<ul>
<?php
$rand_posts = get_posts('numberposts=9&orderby=rand');
foreach( $rand_posts as $post ) :
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>          
        </div>
      </div>
      <div class="bg_buttom">
        <div class="bg_buttom_r"></div>
      </div>
    </div>
   
 <div id="buyguide" style="margin-top:5px;">
      <div class="lh3">
        <div class="rh3">
          <div class="title"><span class="title_t left"><span class="title_t_i left">
            <h2><a href="#" style="color:#FFF">点击最多</a></h2>
            </span></span></div>
        </div>
      </div>
      <div class="fcontent">
 
     
		   <div id="top10">	
			<ul>
<?php if (function_exists('get_most_viewed')): ?> 
<?php get_most_viewed('post',9); ?> 
<?php endif; ?>
</ul>
          
        </div>
      </div>
      <div class="bg_buttom">
        <div class="bg_buttom_r"></div>
      </div>
    </div>
   
   
    <div id="buyguide" style="margin-top:5px;">
      <div class="lh3">
        <div class="rh3">
          <div class="title"><span class="title_t left"><span class="title_t_i left">
            <h2><a href="#" style="color:#FFF">最新文章</a></h2>
            </span></span></div>
        </div>
      </div>
      <div class="fcontent">
 
     
		   <div id="top10">
<?php if ( function_exists('akpc_most_popular') ) : ?>
<ul><?php akpc_most_popular($limit=9); ?></ul>
<?php endif; ?>
          
        </div>
      </div>
      <div class="bg_buttom">
        <div class="bg_buttom_r"></div>
      </div>
    </div>
   
  </div>
   
</div>  
