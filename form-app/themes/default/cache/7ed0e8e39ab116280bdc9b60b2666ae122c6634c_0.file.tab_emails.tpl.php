<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:12:21
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_emails.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b6a53d3953_89694036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ed0e8e39ab116280bdc9b60b2666ae122c6634c' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_emails.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b6a53d3953_89694036 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
?>
  <div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_emails'], 'UTF-8');?>
</div>

  <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


  <div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_email_tab_summary'];?>

  </div>

  <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
    <input type="hidden" name="page" value="emails" />

    <?php if (count($_smarty_tpl->tpl_vars['form_emails']->value) == 0) {?>

      <div class="notify yellow_bg" style="width:100%">
        <div style="padding: 8px">
          <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notify_no_emails_defined'];?>

        </div>
      </div>

    <?php } else { ?>
      <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>


      <table class="list_table" cellspacing="1" cellpadding="1">
      <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_email_template'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_recipient_sp'];?>
</th>
        <th width="90"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_status'];?>
</th>
        <th class="edit"></th>
        <th class="del colN"></th>
      </tr>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_emails']->value, 'email', false, NULL, 'row', array (
  'index' => true,
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']++;
?>
        <?php $_smarty_tpl->_assignInScope('index', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index'] : null));
?>
        <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
        <?php $_smarty_tpl->_assignInScope('email_id', $_smarty_tpl->tpl_vars['email']->value['email_id']);
?>

         <tr>
           <td><?php echo $_smarty_tpl->tpl_vars['email']->value['email_template_name'];?>
</td>
           <td>
            <?php if (count($_smarty_tpl->tpl_vars['email']->value['recipients']) == 0) {?>
              <span class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_none'];?>
</span>
            <?php } elseif (count($_smarty_tpl->tpl_vars['email']->value['recipients']) == 1) {?>
              <?php echo $_smarty_tpl->tpl_vars['email']->value['recipients'][0]['final_recipient'];?>

            <?php } else { ?>
              <select>
                
                <?php $_smarty_tpl->_assignInScope('last_recipient_type', '');
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['email']->value['recipients'], 'recipient', false, NULL, 'user_row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['recipient']->value) {
?>

                  <?php if ($_smarty_tpl->tpl_vars['last_recipient_type']->value != $_smarty_tpl->tpl_vars['recipient']->value['recipient_type']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['last_recipient_type']->value != '') {?>
                      </optgroup>
                    <?php }?>
                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['recipient_type'];?>
">

                    <?php $_smarty_tpl->_assignInScope('last_recipient_type', $_smarty_tpl->tpl_vars['recipient']->value['recipient_type']);
?>
                  <?php }?>

                  <option><?php if ($_smarty_tpl->tpl_vars['recipient']->value['recipient_user_type'] == "form_email_field") {
echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_email_field_b_c'];
}?> <?php echo $_smarty_tpl->tpl_vars['recipient']->value['final_recipient'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                <?php if ($_smarty_tpl->tpl_vars['last_recipient_type']->value != '') {?>
                  </optgroup>
                <?php }?>
              </select>
            <?php }?>
           </td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['email']->value['email_status'] == "enabled") {?>
              <span class="light_green"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_enabled'];?>
</span>
            <?php } else { ?>
              <span class="red"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_disabled'];?>
</span>
            <?php }?>
          </td>
          <td class="edit"><a href="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?page=edit_email&email_id=<?php echo $_smarty_tpl->tpl_vars['email_id']->value;?>
"></a></td>
          <td class="del colN"><a href="#" onclick="page_ns.delete_email(<?php echo $_smarty_tpl->tpl_vars['email_id']->value;?>
)"></a></td>
        </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

      </table>

    <?php }?>

    <div class="margin_top_large">
      <?php if (count($_smarty_tpl->tpl_vars['all_form_emails']->value) > 0) {?>
        <select name="create_email_from_email_id">
          <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_new_blank_email'];?>
</option>
          <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_copy_email_settings_from'];?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_form_emails']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['email_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['email_template_name'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          </optgroup>
        </select>
      <?php }?>

      <input type="submit" name="add_email" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_new_email'];?>
" />
      <input type="submit" name="edit_email_user_settings" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_configure_form_email_fields'];?>
 (<?php echo $_smarty_tpl->tpl_vars['num_registered_form_emails']->value;?>
)" />
    </div>

  </form>
<?php }
}
