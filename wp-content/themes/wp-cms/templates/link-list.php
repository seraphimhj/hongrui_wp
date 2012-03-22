	<?php
	$options = get_option('newspoon_options');
 ?>
<!-- Begin link-list -->
<?php if ($options['link-list'] && $options['link-list_content']) : ?>
<div class="wrapper mT5">
  <div id="partner">
    <div class="lh3">
      <div class="rh3">
        <div class="title"><span class="title_t left"><span class="title_t_i left">
          <h2><a href="#" style="color:#FFF">合作伙伴</a></h2>
          </span></span>
          <div class="title_text left mL10 mT13"><img src="<?php bloginfo('template_directory');?>/images/partner_text.gif" width="53" height="12" /></div>
        </div>
      </div>
    </div>
    <div class="fcontent">
<div class="partneri clear"> 	<?php echo($options['link-list_content']); ?></div>
    </div>
    <div class="bg_buttom">
      <div class="bg_buttom_r"></div>
    </div>
  </div>
</div>
<?php endif; ?><!-- End -->