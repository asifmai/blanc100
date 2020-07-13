<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:12:18
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b6a2d589e8_16760424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f673e371d0bff380767bd9317b37130b6618a06e' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/index.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b6a2d589e8_16760424 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_modifier_hook_call_defined')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/modifier.hook_call_defined.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.template_hook.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" width="100%" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="./"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_forms.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_forms'];?>
</a> <span class="joiner">&raquo;</span>
      <?php echo $_smarty_tpl->tpl_vars['form_info']->value['form_name'];?>
 (<span class="identifier"><?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
</span>)
    </td>
    <td align="right" valign="top">
      <div style="float:right; padding-left: 4px;">
	      <a href="<?php echo $_smarty_tpl->tpl_vars['view_submissions_link']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/admin_edit.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_submissions'];?>
"
	        title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_submissions'];?>
" /></a>
	    </div>
    </td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_open.tpl'),$_smarty_tpl);?>


  <?php if ($_smarty_tpl->tpl_vars['page']->value == "main") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_main.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "public_form_omit_list") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_public_form_omit_list.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "fields") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_fields.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "field_options") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_field_options.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "files") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_files.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "emails") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_emails.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "email_settings") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_email_settings.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "edit_email") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_edit_email.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "views") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_views.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "edit_view") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_edit_view.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "public_view_omit_list") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_public_view_omit_list.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "add_view") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_add_view.tpl'),$_smarty_tpl);?>

  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "database") {?>
    <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_database.tpl'),$_smarty_tpl);?>

  <?php } else { ?>
    <?php if (smarty_modifier_hook_call_defined("admin_edit_form_content")) {?>
      <?php echo smarty_function_template_hook(array('location'=>"admin_edit_form_content"),$_smarty_tpl);?>

    <?php } else { ?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/forms/edit/tab_main.tpl'),$_smarty_tpl);?>

    <?php }?>
  <?php }?>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_close.tpl'),$_smarty_tpl);?>


<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);?>

<?php }
}
