<h2 class="page-title" id="page_title"><?php echo lang('user:login_header') ?></h2>

<?php if (validation_errors()): ?>
    <div class="error-box">
        <?php echo validation_errors(); ?>
    </div>
<?php endif ?>

<?php echo form_open('users/login', array('id' => 'login'), array('redirect_to' => $redirect_to)) ?>


<div class="form-group">
    <label for="email"><?php echo lang('global:email') ?></label>
    <input type="email" name="email" value="" class="form-control"/>
    <?php echo form_input('email', $this->input->post('email') ? escape_tags($this->input->post('email')) : '') ?>
</div>

<div class="form-group">
    <label for="password"><?php echo lang('global:password') ?></label>
    <input type="password" class="form-control" id="password" name="password" maxlength="20" />
</div>

<div class="form-group" id="remember_me">
    <label><?php echo lang('user:remember') ?></label>
    <?php echo form_checkbox('remember', '1', false) ?>
</div>

<div class="form_buttons">
    <input type="submit" class="btn btn-success" value="<?php echo lang('user:login_btn') ?>" name="btnLogin" /> <span class="register"> | <?php echo anchor('register', lang('user:register_btn')); ?></span>
</div>
<div class="reset_pass">
    <?php echo anchor('users/reset_pass', lang('user:reset_password_link')); ?>
</div>

<?php echo form_close() ?>