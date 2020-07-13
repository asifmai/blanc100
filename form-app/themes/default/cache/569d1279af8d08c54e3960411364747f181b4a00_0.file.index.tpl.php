<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:11:59
  from "/home/blanc100/public_html/form-app/themes/default/admin/settings/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b68f21e1c0_56588136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '569d1279af8d08c54e3960411364747f181b4a00' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/settings/index.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b68f21e1c0_56588136 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" height="35" class="margin_bottom_large">
  <tr>
    <td width="45"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_settings.gif" width="34" height="34" /></td>
    <td class="title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_settings'];?>
</td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_open.tpl'),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['page']->value == "main") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/settings/tab_main.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "accounts") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/settings/tab_accounts.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "files") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/settings/tab_files.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "menus") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/settings/tab_menus.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "add_menu") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/settings/tab_add_menu.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "edit_client_menu") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/settings/tab_edit_client_menu.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "edit_admin_menu") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/settings/tab_edit_admin_menu.tpl'),$_smarty_tpl);?>

    <?php } else { ?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/settings/tab_main.tpl'),$_smarty_tpl);?>

    <?php }?>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_close.tpl'),$_smarty_tpl);?>


<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);
}
}
