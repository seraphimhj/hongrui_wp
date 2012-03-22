<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link rel="alternate" type="application/rss+xml" title="<?php _e('RSS 2.0 - all posts', 'inove'); ?>" href="<?php echo $feed; ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php _e('RSS 2.0 - all comments', 'inove'); ?>" href="<?php bloginfo('comments_rss2_url'); ?>" />

	<!-- style START -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/404.css" type="text/css" media="screen" />
	<!-- style END -->

	<?php wp_head(); ?>
</head>
<BODY>
<DIV class=frame>
<DIV class="error-bg error-404"><SPAN>Sorry, 你访问的页面已经不存,建议返回首页看看看</SPAN> </DIV>
<DIV class=help-links>
<DIV class=title>你可以看看下面的导航链接是否有你想要查看的内容。</DIV>
<UL class=links>
  <LI><A href="http://www.newspoon.com/">首页</A> </LI>
  <LI><A href="http://www.newspoon.com/category/tutorials">设计教程</A> </LI>
  <LI><A href="http://www.newspoon.com/category/people">大话设计</A> </LI>
  <LI><A href="http://www.newspoon.com/category/tool">设计工具</A> </LI>
  <LI><A href="http://www.newspoon.com/category/resource">设计资源</A> </LI>
  <LI><A href="http://www.newspoon.com/category/blogku">酷站推荐</A> </LI>
  <LI><A href="http://www.newspoon.com/top10">排行榜</A> </LI>
  <LI><A href="http://www.newspoon.com/guestbook-html">留言</A> 
</LI></UL></DIV></DIV></BODY></HTML>
