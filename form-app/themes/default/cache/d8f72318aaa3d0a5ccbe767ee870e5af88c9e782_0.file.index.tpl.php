<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:11:30
  from "/home/blanc100/public_html/form-app/themes/default/admin/account/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b672df2160_97728381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8f72318aaa3d0a5ccbe767ee870e5af88c9e782' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/account/index.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b672df2160_97728381 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_themes_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.themes_dropdown.php';
if (!is_callable('smarty_function_pages_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.pages_dropdown.php';
if (!is_callable('smarty_function_languages_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.languages_dropdown.php';
if (!is_callable('smarty_function_timezone_offset_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.timezone_offset_dropdown.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" height="35">
  <tr>
    <td width="45"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_login.gif" height="34" width="34" /></td>
    <td class="title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_your_account'];?>
</td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


  <?php echo smarty_function_template_hook(array('location'=>"admin_account_top"),$_smarty_tpl);?>


  <form method="post" name="login_info" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" onsubmit="return rsv.validate(this, rules)">

    <table class="list_table" cellpadding="0" cellspacing="1">
    <tr>
      <td class="pad_left" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_first_name'];?>
</td>
      <td><input type="text" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['first_name'];?>
" size="20" /></td>
    </tr>
    <tr>
      <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_last_name'];?>
</td>
      <td><input type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['last_name'];?>
" size="20" /></td>
    </tr>
    <tr>
      <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email'];?>
</td>
      <td><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['email'];?>
" size="50" /></td>
    </tr>
    <tr>
      <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_theme'];?>
</td>
      <td><?php echo smarty_function_themes_dropdown(array('name_id'=>"theme",'default'=>$_smarty_tpl->tpl_vars['admin_info']->value['theme'],'default_swatch'=>$_smarty_tpl->tpl_vars['admin_info']->value['swatch']),$_smarty_tpl);?>
</td>
    </tr>
    <tr>
      <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_login_page'];?>
</td>
      <td><?php echo smarty_function_pages_dropdown(array('menu_type'=>"admin",'name_id'=>"login_page",'default'=>$_smarty_tpl->tpl_vars['admin_info']->value['login_page'],'omit_pages'=>"custom_url,logout"),$_smarty_tpl);?>
</td>
    </tr>
    <tr>
      <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_logout_url'];?>
</td>
      <td><input type="text" name="logout_url" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['logout_url'];?>
" style="width:98%" /></td>
    </tr>
    <tr>
      <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_language'];?>
</td>
      <td>
        <?php echo smarty_function_languages_dropdown(array('name_id'=>"ui_language",'default'=>$_smarty_tpl->tpl_vars['admin_info']->value['ui_language']),$_smarty_tpl);?>

        <input type="hidden" name="old_ui_language" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['ui_language'];?>
" />
      </td>
    </tr>
    <tr>
      <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_system_time_offset'];?>
</td>
      <td><?php echo smarty_function_timezone_offset_dropdown(array('name_id'=>"timezone_offset",'default'=>$_smarty_tpl->tpl_vars['admin_info']->value['timezone_offset']),$_smarty_tpl);?>
</td>
    </tr>
    <tr>
      <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_sessions_timeout'];?>
</td>
      <td><input type="text" name="sessions_timeout" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['sessions_timeout'];?>
" style="width: 30px" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_minutes'];?>
</td>
    </tr>
    <tr>
      <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_date_format'];?>
</td>
      <td>
        <input type="text" name="date_format" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['date_format'];?>
" style="width: 80px" />
        <span class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['text_date_formatting_link']->value;?>
</span>
      </td>
    </tr>
    </table>

    <p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_change_login_info'];?>
</p>

    <table class="list_table" cellpadding="0" cellspacing="1">
    <tr>
      <td class="pad_left" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_username'];?>
</td>
      <td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['username'];?>
" size="20" /></td>
    </tr>
    <tr>
      <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_new_password'];?>
</td>
      <td><input type="password" name="password" value="" size="20" autocomplete="off" /></td>
    </tr>
    <tr>
      <td class="pad_left" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_new_password_reenter'];?>
</td>
      <td><input type="password" name="password_2" value="" size="20" autocomplete="off" /></td>
    </tr>
    </table>

    <?php echo smarty_function_template_hook(array('location'=>"admin_account_bottom"),$_smarty_tpl);?>


    <p>
      <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
    </p>

  </form>

<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);?>

<?php }
}
