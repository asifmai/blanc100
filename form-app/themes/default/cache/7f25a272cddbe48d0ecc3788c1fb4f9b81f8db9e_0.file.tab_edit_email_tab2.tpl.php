<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:12:25
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_email_tab2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b6a90df688_15897616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f25a272cddbe48d0ecc3788c1fb4f9b81f8db9e' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_email_tab2.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b6a90df688_15897616 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_eval_smarty_string')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.eval_smarty_string.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.template_hook.php';
?>
  <?php if (count($_smarty_tpl->tpl_vars['registered_form_emails']->value) == 0) {?>
    <div class="hint margin_bottom">
      <?php echo smarty_function_eval_smarty_string(array('placeholder_str'=>$_smarty_tpl->tpl_vars['LANG']->value['notify_no_user_email_fields_configured']),$_smarty_tpl);?>

    </div>
  <?php }?>

  <table cellpadding="2" cellspacing="1" width="100%">
  <tr>
    <td width="10" valign="top" class="red">*</td>
    <td width="160" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_recipient_sp'];?>
</td>
    <td>
      <table cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <div class="hint margin_bottom">
            <?php if ($_smarty_tpl->tpl_vars['form_info']->value['access_type'] == "admin") {?>
              <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notify_form_access_type_email_info'];?>

            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notify_edit_email_fields_link'];?>

          </div>

          <table cellspacing="0">
          <tr>
            <td>
              <select id="recipient_options" onchange="emails_ns.show_custom_email_field('recipients', this.value)"
                onkeyup="emails_ns.show_custom_email_field('recipients', this.value)">
                <option value="" selected><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_please_select'];?>
</option>
                <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_administrator'];?>
">
                  <option value="admin"><?php echo $_smarty_tpl->tpl_vars['admin_info']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['admin_info']->value['last_name'];?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['email'];?>
&gt;</option>
                </optgroup>
                <?php if ($_smarty_tpl->tpl_vars['clients']->value) {?>
                  <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_clients'];?>
">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client', false, NULL, 'row', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
?>
                    <option value="client_account_id_<?php echo $_smarty_tpl->tpl_vars['client']->value['account_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['client']->value['last_name'];?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
&gt;</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                  </optgroup>
                <?php }?>
                <?php if (count($_smarty_tpl->tpl_vars['registered_form_emails']->value) > 0) {?>
                  <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_email_fields'];?>
">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['registered_form_emails']->value, 'email_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['email_info']->value) {
?>
                    <option value="form_email_id_<?php echo $_smarty_tpl->tpl_vars['email_info']->value['form_email_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['email_info']->value['email_field_label'];?>
</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                  </optgroup>
                <?php }?>
                <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_other'];?>
">
                 <option value="custom"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_custom_recipient'];?>
</option>
                </optgroup>
              </select>
            </td>
            <td>
              <select id="recipient_type">
                <option value=""><?php echo mb_strtolower($_smarty_tpl->tpl_vars['LANG']->value['word_main'], 'UTF-8');?>
</option>
                <option value="cc">cc</option>
                <option value="bcc">bcc</option>
              </select>
            </td>
            <td><input type="button" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_add'], 'UTF-8');?>
" onclick="emails_ns.add_recipient(this.form)" /></td>
          </tr>
          </table>

          <div id="custom_recipients" class="box" style="display:none; margin-top: 2px;">
            <table cellspacing="0">
            <tr>
              <td>
                <table cellspacing="0">
                <tr>
                  <td></td>
                  <td class="pad_right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_name'];?>
</td>
                  <td><input type="text" id="custom_recipient_name" style="width:200px" /></td>
                </tr>
                <tr>
                  <td class="red">*</td>
                  <td class="pad_right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email'];?>
</td>
                  <td><input type="text" id="custom_recipient_email" name="custom_recipient_email" style="width:200px" /></td>
                </tr>
                <tr>
                  <td class="red">*</td>
                  <td class="pad_right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_recipient_type'];?>
</td>
                  <td>
                    <select id="custom_recipient_type">
                      <option value=""><?php echo mb_strtolower($_smarty_tpl->tpl_vars['LANG']->value['word_main'], 'UTF-8');?>
</option>
                      <option value="cc">cc</option>
                      <option value="bcc">bcc</option>
                    </select>
                  </td>
                </tr>
                </table>
              </td>
              <td>
                <input type="button" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_add'], 'UTF-8');?>
" onclick="emails_ns.add_custom_recipient(this.form)" />
              </td>
            </tr>
            </table>
          </div>

        </td>
      </tr>
      </table>

      <div id="email_recipients" style="padding: 6px; border:1px solid #336699">
        <div id="no_recipients" <?php if (count($_smarty_tpl->tpl_vars['template_info']->value['recipients']) > 0) {?>style="display:none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_no_recipients_added'];?>
</div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template_info']->value['recipients'], 'recipient', false, NULL, 'row', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['recipient']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
?>
          <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
          <?php $_smarty_tpl->_assignInScope('recipient_type', $_smarty_tpl->tpl_vars['recipient']->value['recipient_type']);
?>

          <?php if ($_smarty_tpl->tpl_vars['recipient_type']->value == "cc") {?>
            <?php $_smarty_tpl->_assignInScope('recipient_type_str', '&nbsp;<span class="bold">[cc]</span>');
?>
          <?php } elseif ($_smarty_tpl->tpl_vars['recipient_type']->value == "bcc") {?>
            <?php $_smarty_tpl->_assignInScope('recipient_type_str', '&nbsp;<span class="bold">[bcc]</span>');
?>
          <?php } elseif ($_smarty_tpl->tpl_vars['recipient_type']->value == "main") {?>
            <?php $_smarty_tpl->_assignInScope('recipient_type_str', '');
?>
          <?php }?>

          <div id="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
            <?php if ($_smarty_tpl->tpl_vars['recipient']->value['recipient_user_type'] == "admin") {?>
              <?php echo $_smarty_tpl->tpl_vars['admin_info']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['admin_info']->value['last_name'];?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['email'];?>
&gt;<?php echo $_smarty_tpl->tpl_vars['recipient_type_str']->value;?>
&nbsp;
              <a href="#" onclick="return emails_ns.remove_recipient(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)">[x]</a>
              <input type="hidden" name="recipients[]" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" />
              <input type="hidden" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_user_type" value="admin" />
              <input type="hidden" id="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_type" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_type" value="<?php echo $_smarty_tpl->tpl_vars['recipient_type']->value;?>
" />
            <?php } elseif ($_smarty_tpl->tpl_vars['recipient']->value['recipient_user_type'] == "form_email_field") {?>
              <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_email_field_b_c'];?>
 <?php echo $_smarty_tpl->tpl_vars['recipient']->value['final_recipient'];
echo $_smarty_tpl->tpl_vars['recipient_type_str']->value;?>
&nbsp;
              <a href="#" onclick="return emails_ns.remove_recipient(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)">[x]</a>
              <input type="hidden" name="recipients[]" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" />
              <input type="hidden" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_user_type" value="form_email_field" />
              <input type="hidden" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_form_email_id" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['form_email_id'];?>
" />
              <input type="hidden" id="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_type" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_type" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['recipient_type'];?>
" />
            <?php } elseif ($_smarty_tpl->tpl_vars['recipient']->value['recipient_user_type'] == "client") {?>
              <?php echo $_smarty_tpl->tpl_vars['recipient']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['recipient']->value['last_name'];?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['recipient']->value['email'];?>
&gt;<?php echo $_smarty_tpl->tpl_vars['recipient_type_str']->value;?>
&nbsp;
              <a href="#" onclick="return emails_ns.remove_recipient(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)">[x]</a>
              <input type="hidden" name="recipients[]" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" />
              <input type="hidden" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_user_type" value="client" />
              <input type="hidden" id="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_type" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_type" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['recipient_type'];?>
" />
              <input type="hidden" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_account_id" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['account_id'];?>
" />
            <?php } elseif ($_smarty_tpl->tpl_vars['recipient']->value['recipient_user_type'] == "custom") {?>
              <?php echo $_smarty_tpl->tpl_vars['recipient']->value['custom_recipient_name'];?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['recipient']->value['custom_recipient_email'];?>
&gt;<?php echo $_smarty_tpl->tpl_vars['recipient_type_str']->value;?>
&nbsp;
              <a href="#" onclick="return emails_ns.remove_recipient(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)">[x]</a>
              <input type="hidden" name="recipients[]" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" />
              <input type="hidden" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_user_type" value="custom" />
              <input type="hidden" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_type" id="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_type" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['recipient_type'];?>
" />
              <input type="hidden" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recipient']->value['custom_recipient_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
              <input type="hidden" name="recipient_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recipient']->value['custom_recipient_email'], ENT_QUOTES, 'UTF-8', true);?>
" />
            <?php }?>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

      </div>

    </td>
  </tr>
  <tr>
    <td class="red">*</td>
    <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_subject_line'];?>
</td>
    <td><input type="text" name="subject" class="lang_placeholder_field" style="width: 490px" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_info']->value['subject'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
  </tr>
  <tr>
    <td valign="top" class="red">*</td>
    <td valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_from'];?>
</td>
    <td>
      <select name="email_from" id="email_from" onchange="emails_ns.show_custom_email_field('from', this.value)"
        onchange="emails_ns.show_custom_email_field('from', this.value)">
        <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_please_select'];?>
</option>
        <option value="none" <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_from'] == "none") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_none_not_recommended'];?>
</option>
        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_administrator'];?>
">
          <option value="admin" <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_from'] == "admin") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['admin_info']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['admin_info']->value['last_name'];?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['email'];?>
&gt;</option>
        </optgroup>
        <?php if ($_smarty_tpl->tpl_vars['clients']->value) {?>
          <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_clients'];?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client', false, NULL, 'row', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
?>
            <option value="client_account_id_<?php echo $_smarty_tpl->tpl_vars['client']->value['account_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_from_account_id'] == $_smarty_tpl->tpl_vars['client']->value['account_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['client']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['client']->value['last_name'];?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
&gt;</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          </optgroup>
        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['registered_form_emails']->value) > 0) {?>
          <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_email_fields'];?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['registered_form_emails']->value, 'email_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['email_info']->value) {
?>
            <option value="form_email_id_<?php echo $_smarty_tpl->tpl_vars['email_info']->value['form_email_id'];?>
"
            <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_from_form_email_id'] == $_smarty_tpl->tpl_vars['email_info']->value['form_email_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_email_field_b_c'];?>
 <?php echo $_smarty_tpl->tpl_vars['email_info']->value['email_field_label'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          </optgroup>
        <?php }?>
        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_other'];?>
">
          <option value="custom" <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_from'] == "custom") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_custom'];?>
</option>
        </optgroup>
      </select>

      <div id="custom_from" class="box" style="margin-top: 4px;<?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_from'] != "custom") {?>display:none<?php }?>" >
        <table>
        <tr>
          <td></td>
          <td class="pad_right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_name_c'];?>
</td>
          <td><input type="text" name="custom_from_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_info']->value['custom_from_name'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:200px" /></td>
        </tr>
        <tr>
          <td class="red">*</td>
          <td class="pad_right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email_c'];?>
</td>
          <td><input type="text" name="custom_from_email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_info']->value['custom_from_email'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:200px" /></td>
        </tr>
        </table>
      </div>

    </td>
  </tr>
  <tr>
    <td valign="top" class="red"> </td>
    <td valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_reply_to'];?>
</td>
    <td>

      <select name="email_reply_to" id="email_reply_to" onchange="emails_ns.show_custom_email_field('reply_to', this.value)"
        onchange="emails_ns.show_custom_email_field('reply_to', this.value)">
        <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_please_select'];?>
</option>
        <option value="none" <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_reply_to'] == "none") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_none'];?>
</option>
        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_administrator'];?>
">
          <option value="admin" <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_reply_to'] == "admin") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['admin_info']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['admin_info']->value['last_name'];?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['email'];?>
&gt;</option>
        </optgroup>
        <?php if ($_smarty_tpl->tpl_vars['clients']->value) {?>
          <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_clients'];?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client', false, NULL, 'row', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
?>
            <option value="client_account_id_<?php echo $_smarty_tpl->tpl_vars['client']->value['account_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_reply_to_account_id'] == $_smarty_tpl->tpl_vars['client']->value['account_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['client']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['client']->value['last_name'];?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
&gt;</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          </optgroup>
        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['registered_form_emails']->value) > 0) {?>
          <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_email_fields'];?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['registered_form_emails']->value, 'email_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['email_info']->value) {
?>
            <option value="form_email_id_<?php echo $_smarty_tpl->tpl_vars['email_info']->value['form_email_id'];?>
"
            <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_reply_to_form_email_id'] == $_smarty_tpl->tpl_vars['email_info']->value['form_email_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_email_field_b_c'];?>
 <?php echo $_smarty_tpl->tpl_vars['email_info']->value['email_field_label'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          </optgroup>
        <?php }?>
        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_other'];?>
">
          <option value="custom" <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_reply_to'] == "custom") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_custom'];?>
</option>
        </optgroup>
      </select>

      <div id="custom_reply_to" class="box" style="margin-top: 4px;<?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_reply_to'] != "custom") {?>display:none<?php }?>">
        <table>
        <tr>
          <td></td>
          <td class="pad_right" width="60"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_name_c'];?>
</td>
          <td><input type="text" name="custom_reply_to_name" value="<?php echo $_smarty_tpl->tpl_vars['template_info']->value['custom_reply_to_name'];?>
" style="width:200px" /></td>
        </tr>
        <tr>
          <td class="red">*</td>
          <td class="pad_right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email_c'];?>
</td>
          <td><input type="text" name="custom_reply_to_email" style="width:200px" value="<?php echo $_smarty_tpl->tpl_vars['template_info']->value['custom_reply_to_email'];?>
" /></td>
        </tr>
        </table>
      </div>

    </td>
  </tr>
  <?php echo smarty_function_template_hook(array('location'=>"edit_template_tab2"),$_smarty_tpl);?>

  </table>

<?php }
}
