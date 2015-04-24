<h2 class="page-title" id="page_title"><?php echo lang('user:register_header') ?></h2>

<p>
	<span id="active_step"><?php echo lang('user:register_step1') ?></span> -&gt;
	<span><?php echo lang('user:register_step2') ?></span>
</p>

<?php if ( ! empty($error_string)):?>
<!-- Woops... -->
<div class="error-box">
	<?php echo $error_string;?>
</div>
<?php endif;?>

<?php echo form_open('register', array('id' => 'register')) ?>

	
	<?php if ( ! Settings::get('auto_username')): ?>
	<div class="form-group">
		<label for="username"><?php echo lang('user:username') ?></label>
                <input class="form-control" type="text" name="username" maxlength="100" value="<?php echo $_user->username ?>" />
	</div>
	<?php endif ?>
	
	<div class="form-group">
		<label for="email"><?php echo lang('global:email') ?></label>
                <input class="form-control" type="text" name="email" maxlength="100" value="<?php echo $_user->email ?>" />
		<?php echo form_input('d0ntf1llth1s1n', ' ', 'class="default-form" style="display:none"') ?>
	</div>
	
	<div class="form-group">
		<label for="password"><?php echo lang('global:password') ?></label>
		<input type="password" name="password" maxlength="100" />
	</div>

	<?php foreach($profile_fields as $field) { if($field['required'] and $field['field_slug'] != 'display_name') { ?>
	<div class="form-group">
		<label for="<?php echo $field['field_slug'] ?>"><?php echo (lang($field['field_name'])) ? lang($field['field_name']) : $field['field_name'];  ?></label>
		<div class="input"><?php echo $field['input'] ?></div>
	</div>
	<?php } } ?>

	
	<div class="form-group">
            <button class="btn btn-success" type="submit"><?php echo lang('user:register_btn') ?></button>
	</div>

<?php echo form_close() ?>