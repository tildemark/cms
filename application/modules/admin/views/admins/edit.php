<!-- [Left menu] start -->
<div class="leftmenu">

	<h1 id="pageinfo"><?=__("Navigation")?></h1>
	
	
	<div class="quickend"></div>

</div>
<!-- [Left menu] end -->

<!-- [Content] start -->
<div class="content slim">

<h1 id="dashboard"><?=__("Add an administrator")?></h1>



<form class="settings" action="<?=site_url('admin/admins/save')?>" method="post" accept-charset="utf-8">
		<input type="hidden" name="id" value="<?=$admin['id']?>" />
		<ul>
			<li><input type="submit" name="submit" value="<?=__("Save")?>" class="input-submit" /></li>
			<li><a href="<?=site_url('admin/admins')?>" class="input-submit last"><?=__("Cancel")?></a></li>
		</ul>
		
		<br class="clearfloat" />

		<hr />
		
		<div id="one">
		
			<label for="username"><?=__("Username")?>: </label>
			<input name="username" type='text'  value='<?=$admin['username']?>'  class="input-text" />
			<br />
			
			<label for="module"><?=__("Module")?>: </label>
			<select name="module" class="input-select" />
			<?php foreach ($this->system->modules as $module) : ?>
			<option value='<?=$module['name']?>' <?=($admin['module'] == $module['name'])?'selected':''?>/><?=ucfirst($module['name'])?></option>
			<?php endforeach; ?>
			</select>
			<br />
			
			<label for="level"><?=__("Level")?>: </label>
			<select name="level" class="input-select" />
			<?php for ($i = 0; $i <= 4; $i++) : ?>
			<option value='<?=$i?>' <?=($admin['level'] == $i)?'selected':''?>/><?=$levels[$i] ?></option>
			<?php endfor; ?>
			</select>
			
			<br />
		</div>
	</form>
</div>
<!-- [Content] end -->