<html>

<head></head>

<body>
    <div class="info_contact">
    <h4>Change password regularly</h4>
    <div class="content">
            <form method="post" action="<?=site_url();?>change-password-save" >
    <table class="input"><tr><td>Old Password</td><tr>
    <tr><td class="input-width"><input type="password" name="old" value="<?php echo set_value('old');?>" required></td></tr>
    <tr><td>New Password</td><tr>
    <tr><td class="input-width"><input type="password" name="new" value="<?php echo set_value('new');?>"  required></td></tr>
    <tr><td>Re-type New Password</td><tr>
    <tr><td class="input-width"><input type="password" name="re_new" value="<?php echo set_value('re_new'); ?>" required></td></tr>
    <tr><td>
    <button type='submit' class='btn1' value='' >Save</button>
    <button type='text' class='btn2' value='' ><a href="<?=base_url('customer/account')?>">Cancel</a></button>
    </td></tr>
    </table>
    </form>
    </div>
    <div class="error">
    <?= validation_errors() ?>
    <?= $this->session->flashdata('error') ?>
    </div>
    </div>
</body>
</html>