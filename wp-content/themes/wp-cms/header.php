<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	$options = get_option('newspoon_options');
	if($options['feed'] && $options['feed_url']) {
		if (substr(strtoupper($options['feed_url']), 0, 7) == 'HTTP://') {
			$feed = $options['feed_url'];
		} else {
			$feed = 'http://' . $options['feed_url'];
		}
	} else {
		$feed = get_bloginfo('rss2_url');
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php
		if (is_home()) { 
			$description = $options['description'];
			$keywords = $options['keywords'];
		} else if (is_single()) {
			$description =  $post->post_title;
			$keywords = "";
			$tags = wp_get_post_tags($post->ID);
			foreach ($tags as $tag ) {
				$keywords = $keywords . $tag->name . ", ";
			}
		} else if (is_category()) {
			$description = category_description();
		}
	?>
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="description" content="<?=$description?>" />
<title>
	<?php if ( is_home() ) { ?><? bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php } ?>
    <?php if ( is_search() ) { ?><?php _e('search : ', 'newspoon'); ?>“<?php echo $s; ?>” - <? bloginfo('name'); ?><?php } ?>
    <?php if ( is_404() ) { ?><?php _e('404 page: ', 'newspoon'); ?> - <? bloginfo('name'); ?><?php } ?>
    <?php if ( is_author() ) { ?><?php _e('post list : ', 'newspoon'); ?> - <? bloginfo('name'); ?><?php } ?>
    <?php if ( is_single() ) { ?><?php wp_title(''); ?> - <? bloginfo('name'); ?><?php } ?>
    <?php if ( is_page() ) { ?><?php wp_title(''); ?> - <? bloginfo('name'); ?><?php } ?>
    <?php if ( is_category() ) { ?><?php single_cat_title(); ?> - <? bloginfo('name'); ?><?php } ?>
    <?php if ( is_month() ) { ?><?php the_time('F, Y'); ?> - <? bloginfo('name'); ?><?php } ?>
    <?php if ( is_day() ) { ?><?php the_time('F j, Y'); ?> - <? bloginfo('name'); ?><?php } ?>
</title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tab.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/util.js"></script>
	
<script type="text/javascript">
<!--
    function ChangIterm(n) {
        for(var i=1;i<=2;i++){
            var curC=document.getElementById("tab_"+i);
            var curB=document.getElementById("tab_t"+i);
            if(n==i){
                curC.style.display="block";
                curB.className="thisiterm"
            }else{
                curC.style.display="none";
                curB.className=""
            }
        } 
    }
	
	function inputAutoClear(ipt)
	{
	 	ipt.onfocus=function()
	 	{if(this.value==this.defaultValue){this.value='';}};
	 	ipt.onblur=function()
	 	{if(this.value==''){this.value=this.defaultValue;}};
	 	ipt.onfocus();
	} 	
//-->
</script><?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<!-- Header begin -->
 <?php include('templates/topnav.php'); ?>
<div class="wrapper">
  <div id="header">
    <div id="logo">
       <h1> <a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span></a> </h1>
    </div>
    <div class="expand">
	
	 <!-- SiteSearch Google -->
<div class="search">
	<div id="searchbox">
		<?php if($options['google_cse'] && $options['google_cse_cx']) : ?>
			<form action="http://www.google.com/cse" method="get">
				  <div id="search">
					 <input id="is" name="q" class="s_text" type="text"  value="Search Here..." onblur="if(this.value=='') this.value='Search Here...';" onfocus="if(this.value=='Search Here...') this.value='';" size="10" tabindex="1" accesskey="S" value="<?php the_search_query() ?>" />
                    <input id="isearchsubmit" name="sa" class="btn1" type="submit" value="" tabindex="2" />
					<input type="hidden" name="cx" value="<?php echo $options['google_cse_cx']; ?>" />
					<input type="hidden" name="ie" value="UTF-8" />
				</div>
			</form>
		<?php else : ?>
			<form action="<?php bloginfo('home'); ?>" method="get">
			     <div id="search">
                    <input id="is" name="s" class="s_text" type="text"  value="Search Here..." onblur="if(this.value=='') this.value='Search Here...';" onfocus="if(this.value=='Search Here...') this.value='';" size="10" tabindex="1" accesskey="S" value="<?php the_search_query() ?>" />
                    <input id="isearchsubmit" class="btn1" name="searchsubmit" type="submit" value="" tabindex="2" />
                    </div>
			</form>
		<?php endif; ?>
	</div>
<script type="text/javascript">
//<![CDATA[
	var searchbox = MGJS.$("searchbox");
	var searchtxt = MGJS.getElementsByClassName("textfield", "input", searchbox)[0];
	var searchbtn = MGJS.getElementsByClassName("button", "input", searchbox)[0];
	var tiptext = "<?php _e('Type text to search here...', 'inove'); ?>";
	if(searchtxt.value == "" || searchtxt.value == tiptext) {
		searchtxt.className += " searchtip";
		searchtxt.value = tiptext;
	}
	searchtxt.onfocus = function(e) {
		if(searchtxt.value == tiptext) {
			searchtxt.value = "";
			searchtxt.className = searchtxt.className.replace(" searchtip", "");
		}
	}
	searchtxt.onblur = function(e) {
		if(searchtxt.value == "") {
			searchtxt.className += " searchtip";
			searchtxt.value = tiptext;
		}
	}
	searchbtn.onclick = function(e) {
		if(searchtxt.value == "" || searchtxt.value == tiptext) {
			return false;
		}
	}
//]]>
</script>
	<!-- searchbox END -->
				
				
				</div>
	</div>
  </div>
  
 <?php include('templates/mainnav.php'); ?>
  </div>

<!--nav-->