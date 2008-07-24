<!-- [Left menu] start -->
<div class="leftmenu">

	<h1 id="pageinfo"><?=__("Quick menu")?></h1>
	
	<ul id="tabs" class="quickmenu">
		<li><a href="#one"><span><?php echo __("General settings")?></span></a></li>
		<li><a href="#two"><span><?php echo __("Comments settings")?></span></a></li>
	</ul>
	<div class="quickend"></div>

</div>
<!-- [Left menu] end -->

<!-- [Content] start -->
<div class="content slim">

<h1 id="settings">Settings</h1>
<form class="settings" action="<?=site_url('admin/news/settings/save')?>" method="post" accept-charset="utf-8">
		
		<ul>
			<li><input type="submit" name="submit" value="<?=__("Save Settings")?>" class="input-submit" /></li>
			<li><a href="<?=site_url('admin/news')?>" class="input-submit last"><?=__("Cancel")?></a></li>
		</ul>
		
		<br class="clearfloat" />

		<hr />
		
		<?php if ($notice = $this->session->flashdata('notification')):?>
		<p class="notice"><?=$notice;?></p>
		<?php endif;?>
		
		<p><?=__("Change the settings for the news module");?></p>
		
		<div id="one">
		
			
		</div>
		<div id="two">
			<label for="settings[allow_comments]"><?=__("Allow comments")?></label>
			<select name="settings[allow_comments]" class="input-select">
			<option value='1' <?=(($settings['allow_comments']==1)?"selected":"")?>><?=__("Yes")?></option>
			<option value='0' <?=(($settings['allow_comments']==0)?"selected":"")?>><?=__("No")?></option>
			</select>
			<br />

			<label for="settings[approve_comments]"><?=__("Approve comments")?></label>
			<select name="settings[approve_comments]" class="input-select">
			<option value='1' <?=(($settings['approve_comments']==1)?"selected":"")?>><?=__("Yes")?></option>
			<option value='0' <?=(($settings['approve_comments']==0)?"selected":"")?>><?=__("No")?></option>
			</select>
			
			
		</div>
	</form>

</div>
<script>

  $(document).ready(function(){
    $("#tabs").tabs();
  });

</script>
<!-- [Content] end -->
