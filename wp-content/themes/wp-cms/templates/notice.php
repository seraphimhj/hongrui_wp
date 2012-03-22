	<?php
	$options = get_option('newspoon_options');
 ?>
<!-- Begin notice -->
<?php if ($options['notice'] && $options['notice_content']) : ?>
<div class="wrapper" style="margin-top:5px;">
  <div id="infor">
    <div id="newtitle" class="left">最新动态：</div>
    <div id="news" class="left">
      <ul>
		<?php echo($options['notice_content']); ?>
      </ul>

    </div>
    <div id="newright" class="right"></div>
  </div>
</div>	  <?php endif; ?><!-- End notice -->