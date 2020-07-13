<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:12:25
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_email_tab4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b6a959ef23_22133914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49fab061c81b65e3eb374d7dc66fdddece7e07f2' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_email_tab4.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b6a959ef23_22133914 (Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['num_submissions']->value == 0) {?>
            <div class="margin_top margin_bottom_large">
              <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_test_email_templates_no_submissions'];?>

            </div>
          <?php } else { ?>

            <div class="margin_top margin_bottom_large">
              <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_test_email'];?>

            </div>

            <table cellpadding="0" cellspacing="1" class="list_table margin_bottom_large" width="100%">
            <tr>
              <td width="150" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_email_format'];?>
</td>
              <td>
                <select name="test_email_format" id="test_email_format">
                  <option value="both" <?php if ($_smarty_tpl->tpl_vars['test_email_format']->value == "both") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_text_and_html'];?>
</option>
                  <option value="text" <?php if ($_smarty_tpl->tpl_vars['test_email_format']->value == "text") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_text'];?>
</option>
                  <option value="html" <?php if ($_smarty_tpl->tpl_vars['test_email_format']->value == "html") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_html'];?>
</option>
                </select>
              </td>
              <td rowspan="3" width="120" class="subpanel" align="center">
                <input type="button" name="send_test_email" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_send_test_email'];?>
"
                  onclick="return emails_ns.send_test_email(this.form, 'send')" /><br />
                <input type="button" name="display_email" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_display_email'];?>
"
                  onclick="return emails_ns.send_test_email(this.form, 'display')" /><br />

                <div id="ajax_activity" style="padding:3px; display:none"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/ajax_activity_grey.gif" /></div>
                <div id="ajax_no_activity" style="padding:3px;"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/ajax_no_activity_grey.gif" /></div>
              </td>
            </tr>
            <tr>
              <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_your_email_address'];?>
</td>
              <td>
                <input type="text" name="test_email_recipient" id="test_email_recipient" style="width:390px" value="<?php echo $_smarty_tpl->tpl_vars['test_email_recipient']->value;?>
" />
              </td>
            </tr>
            <tr>
              <td class="pad_left_small" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_submission'];?>
</td>
              <td>
                <input type="radio" name="test_email_data_source" id="test_email_data_random_submission"
                  value="random_submission" <?php if ($_smarty_tpl->tpl_vars['test_email_data_source']->value == "random_submission") {?>checked<?php }?> />
                  <label for="test_email_data_random_submission"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_random_form_submission'];?>
</label><br />
                <input type="radio" name="test_email_data_source" id="test_email_data_submission_id"
                  value="submission_id" <?php if ($_smarty_tpl->tpl_vars['test_email_data_source']->value == "submission_id") {?>checked<?php }?> />
                  <label for="test_email_data_submission_id"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_submission_id'];?>
</label>
                  <input type="input" id="test_email_submission_id" name="test_email_submission_id" size="5" value="<?php echo $_smarty_tpl->tpl_vars['test_email_submission_id']->value;?>
" />
              </td>
            </tr>
            </table>

            <div id="display_text" class="hidden" style="padding: 8px; margin-bottom: 6px; background-color: #f9f9f9; border: 1px solid #666666;">
              <div class="bold"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_text_email'];?>
</div>
              <div id="display_text_content"></div>
            </div>

            <div id="display_html" class="hidden" style="padding: 8px; margin-bottom: 6px; background-color: #f9f9f9; border: 1px solid #666666;">
              <div class="bold"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_html_email'];?>
</div>
              <div id="display_html_content"></div>
            </div>

          <?php }
}
}
