<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:14:36
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_email_settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b72c737b11_30922079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4079e2c302d83102a56bd13df7e2bc1f6b246e2' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_email_settings.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b72c737b11_30922079 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.dropdown.php';
?>
  <div class="previous_page_icon">
    <a href="?page=emails&form_id=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/up.jpg" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_page'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_page'];?>
" border="0" /></a>
  </div>

  <div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_form_email_field_configuration'], 'UTF-8');?>
</div>

  <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


  <div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_email_settings_intro'];?>

  </div>

  <?php if (count($_smarty_tpl->tpl_vars['registered_form_emails']->value) > 0) {?>
    <table class="list_table margin_bottom_large" cellspacing="1" cellpadding="0">
    <tr>
      <th width="200" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email'];?>
</th>
      <th class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_first_name'];?>
</th>
      <th class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_name_or_last_name'];?>
</th>
      <th class="del"></th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['registered_form_emails']->value, 'email_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['email_info']->value) {
?>
      <tr>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['email_info']->value['email_field_label'];?>
</td>
        <td class="pad_left_small"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['email_info']->value['first_name_field_label'])===null||$tmp==='' ? '&#8212;' : $tmp);?>
</td>
        <td class="pad_left_small"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['email_info']->value['last_name_field_label'])===null||$tmp==='' ? '&#8212;' : $tmp);?>
</td>
        <td class="del"><a href="#" onclick="return emails_ns.delete_form_email_field_config(<?php echo $_smarty_tpl->tpl_vars['email_info']->value['form_email_id'];?>
)"></a></td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </table>
  <?php }?>

  <?php if (count($_smarty_tpl->tpl_vars['columns']->value) > 0) {?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" onsubmit="return rsv.validate(this, g.rules)">
      <input type="hidden" name="page" value="email_settings" />

      <table class="margin_bottom_large" cellspacing="1" cellpadding="0">
        <tr>
          <td width="140" class="pad_right_large"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email'];?>
</td>
          <td width="120"><?php echo smarty_function_dropdown(array('options'=>$_smarty_tpl->tpl_vars['columns']->value,'name'=>"email_field_id",'tabindex'=>"1"),$_smarty_tpl);?>
</td>
          <td rowspan="3" align="center" width="120">
            <input type="submit" name="update_email_settings" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_register_new_email'];?>
" tabindex="4" />
          </td>
        </tr>
        <tr>
          <td class="pad_right_large"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_first_name'];?>
</td>
          <td><?php echo smarty_function_dropdown(array('options'=>$_smarty_tpl->tpl_vars['columns']->value,'name'=>"first_name_field_id",'blank_option_text'=>$_smarty_tpl->tpl_vars['LANG']->value['word_na'],'tabindex'=>"2"),$_smarty_tpl);?>
</td>
        </tr>
        <tr>
          <td class="pad_right_large"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_name_or_last_name'];?>
</td>
          <td><?php echo smarty_function_dropdown(array('options'=>$_smarty_tpl->tpl_vars['columns']->value,'name'=>"last_name_field_id",'blank_option_text'=>$_smarty_tpl->tpl_vars['LANG']->value['word_na'],'tabindex'=>"3"),$_smarty_tpl);?>
</td>
        </tr>
      </table>

    </form>
  <?php }
}
}
