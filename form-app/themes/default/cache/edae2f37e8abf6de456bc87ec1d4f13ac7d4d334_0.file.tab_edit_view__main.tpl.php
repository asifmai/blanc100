<?php
/* Smarty version 3.1.31, created on 2019-11-22 08:50:39
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_view__main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dd7934fac4a96_55863268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edae2f37e8abf6de456bc87ec1d4f13ac7d4d334' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_view__main.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd7934fac4a96_55863268 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_form_fields_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.form_fields_dropdown.php';
?>
<table cellspacing="0" cellpadding="0" width="100%" class="margin_bottom_large">
    <tr>
        <td width="180" class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_name'];?>
</td>
        <td>
            <input type="text" maxlength="100" style="width: 300px;" name="view_name"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_info']->value['view_name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
        </td>
    </tr>
    <tr>
        <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_submissions_per_page'];?>
</td>
        <td><input type="text" size="3" name="num_submissions_per_page" value="<?php echo $_smarty_tpl->tpl_vars['view_info']->value['num_submissions_per_page'];?>
"/>
        </td>
    </tr>
    <tr>
        <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_default_sort_order'];?>
</td>
        <td>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <?php echo smarty_function_form_fields_dropdown(array('name_id'=>"default_sort_field",'form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'view_id'=>$_smarty_tpl->tpl_vars['view_id']->value,'default'=>$_smarty_tpl->tpl_vars['view_info']->value['default_sort_field']),$_smarty_tpl);?>

                    </td>
                    <td>
                        <select name="default_sort_field_order">
                            <option value="asc"
                                    <?php if ($_smarty_tpl->tpl_vars['view_info']->value['default_sort_field_order'] == "asc") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_asc'];?>
</option>
                            <option value="desc"
                                    <?php if ($_smarty_tpl->tpl_vars['view_info']->value['default_sort_field_order'] == "desc") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_desc'];?>
</option>
                        </select>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="pad_left" width="180" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_access'];?>
</td>
        <td>
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <input type="radio" name="access_type" id="at1" value="admin"
                               <?php if ($_smarty_tpl->tpl_vars['view_info']->value['access_type'] == 'admin') {?>checked<?php }?> />
                        <label for="at1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_admin_only'];?>
</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="float:right;margin-left: 20px">
                            <input type="button" id="client_omit_list_button"
                                   value="Manage Client Omit List<?php if ($_smarty_tpl->tpl_vars['view_info']->value['access_type'] == 'public') {?> (<?php echo $_smarty_tpl->tpl_vars['num_clients_on_omit_list']->value;?>
)<?php }?>"
                                   onclick="window.location='?page=public_view_omit_list&view_id=<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
'"
                                   <?php if ($_smarty_tpl->tpl_vars['view_info']->value['access_type'] != 'public') {?>disabled<?php }?> />
                        </div>
                        <input type="radio" name="access_type" id="at2" value="public"
                               <?php if ($_smarty_tpl->tpl_vars['view_info']->value['access_type'] == 'public') {?>checked<?php }?> />
                        <label for="at2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_public'];?>
 <span
                                    class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_all_clients_have_access'];?>
</span></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="access_type" id="at3" value="private"
                               <?php if ($_smarty_tpl->tpl_vars['view_info']->value['access_type'] == 'private') {?>checked<?php }?> />
                        <label for="at3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_private'];?>
 <span
                                    class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_only_specific_clients_have_access'];?>
</span></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="access_type" id="at4" value="hidden"
                               <?php if ($_smarty_tpl->tpl_vars['view_info']->value['access_type'] == 'hidden') {?>checked<?php }?> />
                        <label for="at4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_hidden'];?>
</label>
                    </td>
                </tr>
            </table>

            <?php if ($_smarty_tpl->tpl_vars['form_info']->value['access_type'] == "admin" || $_smarty_tpl->tpl_vars['form_info']->value['access_type'] == "private") {?>
                <div class="hint">
                    <?php if ($_smarty_tpl->tpl_vars['form_info']->value['access_type'] == "admin") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_form_view_permission_info_admin'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['form_info']->value['access_type'] == "private") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_form_view_permission_info_private'];?>

                    <?php }?>
                    <a href="?page=main"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_edit_form_access_type_b'];?>
</a>
                </div>
            <?php }?>

            <div id="custom_clients" <?php if ($_smarty_tpl->tpl_vars['view_info']->value['access_type'] != 'private') {?>style="display:none"<?php }?>
                 class="margin_top">
                <table cellpadding="1" cellspacing="0" class="list_table">
                    <tr>
                        <td class="medium_grey pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_available_clients'];?>
</td>
                        <td></td>
                        <td class="medium_grey pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_selected_clients'];?>
</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="available_user_ids[]" multiple size="4" style="width: 180px">
                                <?php echo $_smarty_tpl->tpl_vars['available_users']->value;?>

                            </select>
                        </td>
                        <td align="center" valign="center" width="100">
                            <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add_uc_rightarrow'];?>
"
                                   onclick="ft.move_options(this.form['available_user_ids[]'], this.form['selected_user_ids[]']);"/><br/>
                            <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_remove_uc_leftarrow'];?>
"
                                   onclick="ft.move_options(this.form['selected_user_ids[]'], this.form['available_user_ids[]']);"/>
                        </td>
                        <td>
                            <select id="selected_user_ids" name="selected_user_ids[]" multiple size="4"
                                    style="width: 180px">
                                <?php echo $_smarty_tpl->tpl_vars['selected_users']->value;?>

                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="margin_bottom_large"></div>
        </td>
    </tr>
    <tr>
        <td class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_may_add_submissions'];?>
</td>
        <td valign="top">
            <input type="radio" name="may_add_submissions" value="yes" id="cmas1"
                   <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_add_submissions'] == "yes") {?>checked<?php }?> />
            <label for="cmas1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
            <input type="radio" name="may_add_submissions" value="no" id="cmas2"
                   <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_add_submissions'] == "no") {?>checked<?php }?> />
            <label for="cmas2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
        </td>
    </tr>

    <tbody id="add_submission_default_values" <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_add_submissions'] == "no") {?>style="display: none"<?php }?>>
    <tr>
        <td width="180" valign="top" class="pad_left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_default_values_new_submissions'];?>
</td>
        <td>
            <div class="hint margin_bottom">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_default_values_in_view'];?>

            </div>
            <div id="no_new_submission_default_values" <?php if (count($_smarty_tpl->tpl_vars['new_view_submission_defaults']->value) > 0) {?>class="hidden"<?php }?>
                style="margin-bottom: 8px">
                <a href=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_default_settings_rightarrow'];?>
</a>
            </div>

            <div id="new_submission_default_values" <?php if (count($_smarty_tpl->tpl_vars['new_view_submission_defaults']->value) == 0) {?>class="hidden"<?php }?>>
                <table cellspacing="1" cellpadding="0" class="list_table" width="100%" id="new_view_default_submission_vals">
                    <tbody>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field'];?>
</th>
                        <th width="200"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_default_value'];?>
</th>
                        <th class="del" width="18"></th>
                    </tr>
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_view_submission_defaults']->value, 'filter', false, NULL, 'row', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
?>
                        <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
                        <?php $_smarty_tpl->_assignInScope('field_id', $_smarty_tpl->tpl_vars['filter']->value['field_id']);
?>
                        <?php $_smarty_tpl->_assignInScope('curr_val', $_smarty_tpl->tpl_vars['filter']->value['default_value']);
?>
                        <tr id="standard_row_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
                            <td>
                                <select name="new_submissions[]" class="new_submission_default_val_fields"
                                        onchange="view_ns.change_standard_filter_field(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_fields']->value, 'field', false, NULL, 'field_row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                                        <?php $_smarty_tpl->_assignInScope('curr_field_id', $_smarty_tpl->tpl_vars['field']->value['field_id']);
?>
                                        <?php if ($_smarty_tpl->tpl_vars['field_id']->value == $_smarty_tpl->tpl_vars['curr_field_id']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('selected', "selected");
?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('selected', '');
?>
                                        <?php }?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['curr_field_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['field']->value['field_title'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </select>
                            </td>
                            <td>
                                <input type="text" name="new_submissions_vals[]" class="new_submission_default_vals"
                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curr_val']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </td>
                            <td class="del"><a href="#"
                                               onclick="return view_ns.delete_new_view_submission_vals(this)"></a></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>

                <div style="margin-bottom: 8px">
                    <a href="#" onclick="return view_ns.add_default_values_for_submission()"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_row'];?>
</a>
                </div>
            </div>

        </td>
    </tr>
    </tbody>
    <tr>
        <td class="pad_left" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_may_copy_submissions'];?>
</td>
        <td valign="top">
            <input type="radio" name="may_copy_submissions" value="yes" id="cmds1"
                   <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_copy_submissions'] == "yes") {?>checked<?php }?> />
            <label for="cmds1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
            <input type="radio" name="may_copy_submissions" value="no" id="cmds2"
                   <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_copy_submissions'] == "no") {?>checked<?php }?> />
            <label for="cmds2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
        </td>
    </tr>
    <tr>
        <td class="pad_left" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_may_delete_submissions'];?>
</td>
        <td valign="top">
            <input type="radio" name="may_delete_submissions" value="yes" id="cmds1"
                   <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_delete_submissions'] == "yes") {?>checked<?php }?> />
            <label for="cmds1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
            <input type="radio" name="may_delete_submissions" value="no" id="cmds2"
                   <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_delete_submissions'] == "no") {?>checked<?php }?> />
            <label for="cmds2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
        </td>
    </tr>
</table>
<?php }
}
