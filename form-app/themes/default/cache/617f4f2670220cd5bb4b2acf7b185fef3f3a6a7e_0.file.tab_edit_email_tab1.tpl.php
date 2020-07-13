<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:12:24
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_email_tab1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b6a8f28039_95850971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '617f4f2670220cd5bb4b2acf7b185fef3f3a6a7e' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_email_tab1.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b6a8f28039_95850971 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_template_hook')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_views_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.views_dropdown.php';
?>
<table cellpadding="2" cellspacing="1" width="100%" class="margin_bottom">
    <tr>
        <td width="10" class="red">*</td>
        <td width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_email_template_name'];?>
</td>
        <td><input type="text" name="email_template_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_info']->value['email_template_name'], ENT_QUOTES, 'UTF-8', true);?>
"
                   style="width:484px;" maxlength="100"/></td>
    </tr>
    <tr>
        <td class="red">*</td>
        <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_status'];?>
</td>
        <td>
            <input type="radio" name="email_status" id="status_enabled" value="enabled"
                   <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_status'] == "enabled") {?>checked="checked"<?php }?> />
            <label for="status_enabled" class="light_green"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_enabled'];?>
</label>
            <input type="radio" name="email_status" id="status_disabled" value="disabled"
                   <?php if ($_smarty_tpl->tpl_vars['template_info']->value['email_status'] == "disabled") {?>checked="checked"<?php }?> />
            <label for="status_disabled" class="red"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_disabled'];?>
</label>
        </td>
    </tr>
    <tr>
        <td valign="top" class="red"></td>
        <td valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_event_trigger'];?>
</td>
        <td>
            <input type="checkbox" name="email_event_trigger[]" id="eet1" value="on_submission"
                   <?php if (in_array("on_submission",$_smarty_tpl->tpl_vars['template_info']->value['email_event_trigger'])) {?>checked="checked"<?php }?> />
            <label for="eet1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_on_form_submission'];?>
</label><br/>
            <input type="checkbox" name="email_event_trigger[]" id="eet2" value="on_edit"
                   <?php if (in_array("on_edit",$_smarty_tpl->tpl_vars['template_info']->value['email_event_trigger'])) {?>checked="checked"<?php }?> />
            <label for="eet2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_when_submission_is_edited'];?>
</label><br/>
            <input type="checkbox" name="email_event_trigger[]" id="eet3" value="on_delete"
                   <?php if (in_array("on_delete",$_smarty_tpl->tpl_vars['template_info']->value['email_event_trigger'])) {?>checked="checked"<?php }?> />
            <label for="eet3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_when_submission_is_deleted'];?>
</label><br/>
        </td>
    </tr>
    <?php echo smarty_function_template_hook(array('location'=>"edit_template_tab1"),$_smarty_tpl);?>

</table>

<div class="grey_box">
    <div>
        <a href="#"
           onclick="return emails_ns.toggle_advanced_settings()"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_advanced_settings_rightarrow'];?>
</a>
    </div>

    <div <?php if ($_smarty_tpl->tpl_vars['edit_email_advanced_settings']->value == "false") {?>style="display:none"<?php }?> id="advanced_settings">
        <table cellpadding="2" cellspacing="1" width="100%">
            <tr>
                <td valign="top" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_when_sent'];?>
</td>
                <td>
                    <input type="radio" name="view_mapping_type" id="vmt1" value="all"
                           <?php if ($_smarty_tpl->tpl_vars['template_info']->value['view_mapping_type'] == "all") {?>checked="checked"<?php }?> />
                    <label for="vmt1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_for_any_form_submission'];?>
</label><br/>
                    <input type="radio" name="view_mapping_type" id="vmt2" value="specific"
                           <?php if ($_smarty_tpl->tpl_vars['template_info']->value['view_mapping_type'] == "specific") {?>checked="checked"<?php }?>
                            <?php if (count($_smarty_tpl->tpl_vars['filtered_views']->value) == 0) {?>disabled="disabled"<?php }?> />
                    <?php if (count($_smarty_tpl->tpl_vars['filtered_views']->value) == 0) {?>
                        <span class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_no_views_with_filters_p'];?>
</span>
                    <?php } else { ?>
                        <label for="vmt2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_for_view_submissions'];?>
</label>
                        <div id="when_sent_views"
                             <?php if ($_smarty_tpl->tpl_vars['template_info']->value['view_mapping_type'] != "specific") {?>style="display:none"<?php }?>>
                            <table width="100%">
                                <tr>
                                    <td>
                                        <select name="available_when_sent_views[]" id="available_when_sent_views"
                                                multiple size="4" style="width:190px">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filtered_views']->value, 'view_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view_info']->value) {
?>
                                                <?php $_smarty_tpl->_assignInScope('is_found', false);
?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template_info']->value['when_sent_view_ids'], 'curr_view_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_view_id']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['curr_view_id']->value == $_smarty_tpl->tpl_vars['view_info']->value['view_id']) {?>
                                                        <?php $_smarty_tpl->_assignInScope('is_found', true);
?>
                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                                <?php if (!$_smarty_tpl->tpl_vars['is_found']->value) {?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['view_info']->value['view_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['view_info']->value['view_name'];?>
</option>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </select>
                                    </td>
                                    <td valign="middle" align="center">
                                        <input type="button"
                                               onclick="return ft.move_options('available_when_sent_views', 'selected_when_sent_views')"
                                               value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add_uc_rightarrow'];?>
"/><br/>
                                        <input type="button"
                                               onclick="return ft.move_options('selected_when_sent_views', 'available_when_sent_views')"
                                               value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_remove_uc_leftarrow'];?>
"/>
                                    </td>
                                    <td>
                                        <select name="selected_when_sent_views[]" id="selected_when_sent_views" multiple
                                                size="4" style="width:190px">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_when_sent_views']->value, 'view_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view_info']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['view_info']->value['view_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['view_info']->value['view_name'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div class="medium_grey pad_top_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_list_views_with_filters'];?>
</div>
                        </div>
                    <?php }?>
                </td>
            </tr>
            <tr>
                <td valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_send_email_from_edit_submission_page'];?>
</td>
                <td>
                    <input type="radio" name="include_on_edit_submission_page" id="iesp1" value="no"
                           <?php if ($_smarty_tpl->tpl_vars['template_info']->value['include_on_edit_submission_page'] == "no") {?>checked="checked"<?php }?> />
                    <label for="iesp1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label><br/>
                    <input type="radio" name="include_on_edit_submission_page" id="iesp2" value="all_views"
                           <?php if ($_smarty_tpl->tpl_vars['template_info']->value['include_on_edit_submission_page'] == "all_views") {?>checked="checked"<?php }?> />
                    <label for="iesp2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_yes_for_all_views'];?>
</label><br/>
                    <input type="radio" name="include_on_edit_submission_page" id="iesp3" value="specific_views"
                           <?php if ($_smarty_tpl->tpl_vars['template_info']->value['include_on_edit_submission_page'] == "specific_views") {?>checked="checked"<?php }?> />
                    <label for="iesp3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_yes_for_specific_views'];?>
</label><br/>

                    <div id="include_on_edit_submission_page_views"
                         <?php if ($_smarty_tpl->tpl_vars['template_info']->value['include_on_edit_submission_page'] != "specific_views") {?>style="display:none"<?php }?>>
                        <table width="100%">
                            <tr>
                                <td>
                                    <select name="available_edit_submission_views[]"
                                            id="available_edit_submission_views" multiple size="4" style="width:190px">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'view_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view_info']->value) {
?>
                                            <?php $_smarty_tpl->_assignInScope('is_found', false);
?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template_info']->value['edit_submission_page_view_ids'], 'curr_view_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_view_id']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['curr_view_id']->value == $_smarty_tpl->tpl_vars['view_info']->value['view_id']) {?>
                                                    <?php $_smarty_tpl->_assignInScope('is_found', true);
?>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                            <?php if (!$_smarty_tpl->tpl_vars['is_found']->value) {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['view_info']->value['view_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['view_info']->value['view_name'];?>
</option>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </select>
                                </td>
                                <td valign="middle" align="center">
                                    <input type="button"
                                           onclick="return ft.move_options('available_edit_submission_views', 'selected_edit_submission_views')"
                                           value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add_uc_rightarrow'];?>
"/><br/>
                                    <input type="button"
                                           onclick="return ft.move_options('selected_edit_submission_views', 'available_edit_submission_views')"
                                           value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_remove_uc_leftarrow'];?>
"/>
                                </td>
                                <td>
                                    <select name="selected_edit_submission_views[]" id="selected_edit_submission_views"
                                            multiple size="4" style="width:190px">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_edit_submission_views']->value, 'view_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view_info']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['view_info']->value['view_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['view_info']->value['view_name'];?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>

                </td>
            </tr>
            <tr>
                <td valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_limit_email_content'];?>
</td>
                <td>
                    <?php echo smarty_function_views_dropdown(array('name_id'=>"limit_email_content_to_fields_in_view",'form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'show_empty_label'=>true,'selected'=>$_smarty_tpl->tpl_vars['template_info']->value['limit_email_content_to_fields_in_view']),$_smarty_tpl);?>

                    <div class="medium_grey">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_limit_email_content_desc'];?>

                    </div>
                </td>
            </tr>
        </table>

        <?php echo smarty_function_template_hook(array('location'=>"edit_template_tab1_advanced"),$_smarty_tpl);?>


    </div>
</div>
<?php }
}
