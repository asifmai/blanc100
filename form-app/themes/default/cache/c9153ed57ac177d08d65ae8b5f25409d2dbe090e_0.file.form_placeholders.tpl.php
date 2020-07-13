<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:13:31
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/form_placeholders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b6ebd90c85_68062412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9153ed57ac177d08d65ae8b5f25409d2dbe090e' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/form_placeholders.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b6ebd90c85_68062412 (Smarty_Internal_Template $_smarty_tpl) {
?>
          <div class="margin_top margin_bottom_large">
            <img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/placeholders.png" style="float: left; margin-right: 10px" />
            <?php echo $_smarty_tpl->tpl_vars['text_reference_tab_info']->value;?>

          </div>

          <p class="subtitle"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_global_placeholders'], 'UTF-8');?>
</p>

          <p>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_global_placeholder_info'];?>

          </p>

          <table cellpadding="1" cellspacing="1" class="list_table" width="100%">
          <tr>
            <td valign="top" class="blue" width="160">{$FORMNAME}</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_name_of_form'];?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue">{$LOGINURL}</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_form_tools_login_url'];?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue">{$FORMURL}</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_form_tools_form_url'];?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue">{$ADMINEMAIL}</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_admin_email_placeholder_info'];?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue">{$SUBMISSIONDATE}</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_form_submission_date_placeholder'];?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue">{$LASTMODIFIEDDATE}</td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_last_modified_date_explanation_c'];?>

              {$SUBMISSIONDATE}
            </td>
          </tr>
          <tr>
            <td valign="top" class="blue">{$SUBMISSIONID}</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_unique_submission_id'];?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue">{$IPADDRESS}</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_submission_ip_address'];?>
</td>
          </tr>
          </table>
          <br />

          <p class="subtitle"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_form_placeholders'], 'UTF-8');?>
</p>
          <p>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_form_placeholder_info'];?>

            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['file_field_text']->value)===null||$tmp==='' ? '' : $tmp);?>

          </p>

          <table cellpadding="1" cellspacing="1" class="list_table" width="100%">
          <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_label'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_field'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_label_response_placeholders'];?>
</th>
          </tr>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_fields']->value, 'field', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['field']->value['field_title'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
</td>
              <td>
                <table cellspacing="0" cellpadding="0">
                <tr>
                  <td nowrap class="margin_right_large">Field Label</td>
                  <td class="blue">{$QUESTION_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
}</td>
                </tr>
                <tr>
                  <td nowrap class="margin_right_large">Field Response</td>
                  <td class="blue">
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['is_file_field'] == "yes") {?>
                      {$FILENAME_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
}, {$FILEURL_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
}
                    <?php } else { ?>
                      {$ANSWER_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
}
                      <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] == "core__submission_id") {?>
                        / {$SUBMISSIONID}
                      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_name'] == "core__submission_date") {?>
                        / {$SUBMISSIONDATE}
                      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_name'] == "core__last_modified") {?>
                        / {$LASTMODIFIEDDATE}
                      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_name'] == "core__ip_address") {?>
                        / {$IPADDRESS}
                      <?php }?>
                    <?php }?>
                  </td>
                </tr>
                </table>
              </td>
            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          </table>

        </div>
<?php }
}
