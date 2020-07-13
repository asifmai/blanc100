<?php
/* Smarty version 3.1.31, created on 2019-04-10 10:14:02
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_fields.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5cada5ca5c5228_01988605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4e82fd3c67403dfb25eda40ac0099c376dd19ce' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_fields.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cada5ca5c5228_01988605 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_display_field_types_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.display_field_types_dropdown.php';
if (!is_callable('smarty_function_field_sizes_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.field_sizes_dropdown.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.template_hook.php';
?>
<div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_fields'], 'UTF-8');?>
</div>

<?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


<div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['text_fields_tab_summary']->value;?>

</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
    <div class="underline pad_bottom margin_bottom_large">
        <div style="float:right"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</div>
        <span class="margin_right_large medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_show'];?>
</span>
        <select name="num_fields_per_page">
            <option value="all"<?php if ($_smarty_tpl->tpl_vars['num_fields_per_page']->value == "all") {?> selected<?php }?>><?php echo mb_strtolower($_smarty_tpl->tpl_vars['LANG']->value['phrase_all_fields'], 'UTF-8');?>
</option>
            <option value="10"<?php if ($_smarty_tpl->tpl_vars['num_fields_per_page']->value == "10") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_10_per_page'];?>
</option>
            <option value="15"<?php if ($_smarty_tpl->tpl_vars['num_fields_per_page']->value == "15") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_15_per_page'];?>
</option>
            <option value="20"<?php if ($_smarty_tpl->tpl_vars['num_fields_per_page']->value == "20") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_20_per_page'];?>
</option>
            <option value="25"<?php if ($_smarty_tpl->tpl_vars['num_fields_per_page']->value == "25") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_25_per_page'];?>
</option>
            <option value="50"<?php if ($_smarty_tpl->tpl_vars['num_fields_per_page']->value == "50") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_50_per_page'];?>
</option>
            <option value="100"<?php if ($_smarty_tpl->tpl_vars['num_fields_per_page']->value == "100") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_100_per_page'];?>
</option>
        </select>
        <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
"/>
    </div>
</form>

<form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" name="display_form" id="display_form" method="post">
    <input type="hidden" name="page" value="fields"/>

    <div class="scroll-pane ui-corner-all" style="border: 0px; margin-left: 239px; margin-bottom: -2px">
        <div class="scroll-bar-wrap ui-widget-content ui-corner-top"
             style="border: 1px solid #aaaaaa; border-bottom: 1px solid white; margin: 0px">
            <div class="scroll-bar-top"></div>
        </div>
    </div>

    <div class="clear"></div>
    <div class="sortable groupable scrollable edit_fields" id="<?php echo $_smarty_tpl->tpl_vars['sortable_id']->value;?>
"><input type="hidden" class="tabindex_col_selectors" value=".rows .col2 input|.rows .col3 .sub_col1 input|.rows .col3 .sub_col2 select|.rows .col3 .sub_col3 input|.rows .col3 .sub_col4 select|.rows .col3 .sub_col5 select|.rows .col3 .sub_col6 input"/><input type="hidden" class="sortable__edit_tooltip" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_edit_field'];?>
"/><input type="hidden" class="sortable__delete_tooltip" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_delete_field'];?>
"/><input type="hidden" class="sortable__custom_delete_handler" value="fields_ns.delete_field"/><input type="hidden" name="sortable_row_offset" class="sortable__row_offset" value="<?php echo $_smarty_tpl->tpl_vars['order_start_number']->value;?>
"/><ul class="header_row"><li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li><li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_display_text'];?>
</li><li class="col3 scrollable"><ul><li class="splitter"></li><li class="subcol_header"><ul class="scroll-content"><li class="sub_col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_field'];?>
</li><li class="sub_col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_type'];?>
</li><li class="sub_col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_pass_on'];?>
</li><li class="sub_col4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_size'];?>
</li><li class="sub_col5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_sort_as'];?>
</li><li class="sub_col6"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_db_column'];?>
<span class="pad_right">&nbsp;</span><input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_smart_fill'];?>
"onclick="return fields_ns.smart_fill()" class="bold"/></li></ul></li><li class="splitter"></li></ul></li><li class="col4 edit"></li><li class="col5 colN del"></li></ul><div class="clear"></div><ul class="rows check_areas" id="rows"><?php $_smarty_tpl->_assignInScope('previous_item', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_fields']->value, 'field', false, NULL, 'row', array (
  'index' => true,
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
$_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index'] : null));
$_smarty_tpl->_assignInScope('field_id', $_smarty_tpl->tpl_vars['field']->value['field_id']);
if ($_smarty_tpl->tpl_vars['field']->value['is_new_sort_group'] == "yes" || $_smarty_tpl->tpl_vars['count']->value == 0) {
if ($_smarty_tpl->tpl_vars['previous_item']->value != '') {?></div><div class="clear"></div></li><?php }?><li class="sortable_row"><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {
$_smarty_tpl->_assignInScope('next_item_is_new_sort_group', "yes");
} else {
$_smarty_tpl->_assignInScope('next_item_is_new_sort_group', $_smarty_tpl->tpl_vars['form_fields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null)]['is_new_sort_group']);
}?><div class="row_content<?php if ($_smarty_tpl->tpl_vars['next_item_is_new_sort_group']->value == 'no') {?> grouped_row<?php }?>"><?php }
$_smarty_tpl->_assignInScope('previous_item', $_smarty_tpl->tpl_vars['field']->value);
?><div class="row_group<?php if ($_smarty_tpl->tpl_vars['field']->value['is_system_field'] == "yes") {?> system_field<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>"><input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
"/><ul><li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['count']->value+$_smarty_tpl->tpl_vars['order_start_number']->value;?>
</li><li class="col2"><input type="text" name="field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_display_name" id="field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_display_name"value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_title'], ENT_QUOTES, 'UTF-8', true);?>
" class="display_text" maxlength="100" /></li><li class="splitter"></li><li class="col3 scrollable"><ul class="scroll-content"><li class="sub_col1"><?php if ($_smarty_tpl->tpl_vars['field']->value['is_system_field'] == "yes") {?><span class="pad_left_small medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</span><?php } else { ?><input type="text" name="field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_name" id="field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_name"value="<?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
" maxlength="255"class="field_names"/><?php }?></li><li class="sub_col2"><input type="hidden" name="old_field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_type_id"id="old_field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_type_id" class="system_field_type_id"value="<?php echo $_smarty_tpl->tpl_vars['field']->value['field_type_id'];?>
"/><?php if ($_smarty_tpl->tpl_vars['field']->value['is_system_field'] == "yes") {?><span class="pad_left_small medium_grey system_field_type_label"><?php if ($_smarty_tpl->tpl_vars['field']->value['col_name'] == "ip_address") {
echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_ip_address'];
} elseif ($_smarty_tpl->tpl_vars['field']->value['col_name'] == "submission_date") {
echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_submission_date'];
} elseif ($_smarty_tpl->tpl_vars['field']->value['col_name'] == "last_modified_date") {
echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_last_modified_date'];
} elseif ($_smarty_tpl->tpl_vars['field']->value['col_name'] == "submission_id") {
echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_submission_id'];
}?></span><input type="hidden" name="system_fields[]" value="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
"/><?php } else {
echo smarty_function_display_field_types_dropdown(array('name'=>"field_".((string)$_smarty_tpl->tpl_vars['field_id']->value)."_type_id",'id'=>"field_".((string)$_smarty_tpl->tpl_vars['field_id']->value)."_type_id",'default'=>$_smarty_tpl->tpl_vars['field']->value['field_type_id'],'class'=>"field_types"),$_smarty_tpl);
}?></li><li class="sub_col3 check_area"><input type="checkbox" name="field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_include_on_redirect"id="field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_include_on_redirect"<?php if ($_smarty_tpl->tpl_vars['field']->value['include_on_redirect'] == "yes") {?>checked="checked"<?php }?> class="pass_on"/></li><li class="sub_col4"><?php if ($_smarty_tpl->tpl_vars['field']->value['is_system_field'] == "yes") {?><span class="pad_left_small medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</span><?php } else { ?><input type="hidden" name="old_field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_size"id="old_field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_size" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['field_size'];?>
"/><div class="field_sizes_div"><?php echo smarty_function_field_sizes_dropdown(array('name'=>"field_".((string)$_smarty_tpl->tpl_vars['field_id']->value)."_size",'id'=>"field_".((string)$_smarty_tpl->tpl_vars['field_id']->value)."_size",'default'=>$_smarty_tpl->tpl_vars['field']->value['field_size'],'field_type_id'=>$_smarty_tpl->tpl_vars['field']->value['field_type_id'],'class'=>"field_sizes"),$_smarty_tpl);?>
</div><?php }?></li><li class="sub_col5"><?php if ($_smarty_tpl->tpl_vars['field']->value['is_system_field'] == "yes") {?><span class="pad_left_small medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</span><?php } else { ?><select name="field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_data_type" id="field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_data_type"class="data_types"><option <?php if ($_smarty_tpl->tpl_vars['field']->value['data_type'] == "string") {?>selected<?php }?>value="string"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_string'];?>
</option><option <?php if ($_smarty_tpl->tpl_vars['field']->value['data_type'] == "number") {?>selected<?php }?>value="number"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_number'];?>
</option></select><?php }?></li><li class="sub_col6"><?php if ($_smarty_tpl->tpl_vars['field']->value['is_system_field'] == "yes") {?><span class="pad_left_small medium_grey system_field_db_column"><?php echo $_smarty_tpl->tpl_vars['field']->value['col_name'];?>
</span><?php } else { ?><input type="hidden" name="old_col_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_name" id="old_col_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_name"value="<?php echo $_smarty_tpl->tpl_vars['field']->value['col_name'];?>
" /><input type="text" name="col_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_name" id="col_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_name"class="db_column" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['col_name'];?>
" maxlength="64"/><?php }?></li></ul></li><li class="splitter"></li><li class="col4 edit"></li><li class="col5 colN <?php if ($_smarty_tpl->tpl_vars['field']->value['is_system_field'] == "no") {?>del<?php }?>"></li></ul><div class="clear"></div></div><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?></div><div class="clear"></div></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div><div class="scroll-pane ui-corner-all" style="border: 0px; margin-left: 239px; margin-top: -2px"><div class="scroll-bar-wrap ui-widget-content ui-corner-bottom" style="border: 1px solid #aaaaaa; border-top: 0px; margin: 0px; height:20px"><div class="scroll-bar-bottom"></div></div></div>

    <div class="clear"></div>

    <div class="margin_top_large">
        <input type="submit" name="update_fields" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
"/>
        <?php echo smarty_function_template_hook(array('location'=>"admin_edit_form_fields_tab_button_row"),$_smarty_tpl);?>

    </div>
</form>

<form onsubmit="return fields_ns.add_fields()">
    <table cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-top: -23px">
        <tr>
            <td align="right">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add'];?>
 <input type="text" id="add_num_fields" size="3" value="1"/> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field_sp'];?>

                <select id="new_field_position">
                    <option value="end"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_at_end'];?>
</option>
                    <option value="start"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_at_start'];?>
</option>
                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_after'];?>
" id="add_fields_list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_fields']->value, 'field', false, NULL, 'row', array (
  'index' => true,
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['field_title'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </optgroup>
                </select>
                <input type="checkbox" id="group_new_fields"/>
                <label for="group_new_fields"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_group_rows'];?>
</label>
                <input type="submit" name="add_field" id="add_field" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add'];?>
"/>
            </td>
        </tr>
    </table>
    <?php if ($_smarty_tpl->tpl_vars['limit_fields']->value) {?>
        <div class="right medium_grey italic"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_limit_fields_info'];?>
</div>
    <?php }?>
    <div class="clear"></div>

</form>

<div class="hidden" id="new_row_template">
    <div class="row_group">
        <input type="hidden" class="sr_order" value="%%ROW%%"/>
        <ul>
            <li class="col0"></li>
            <li class="col1 sort_col"></li>
            <li class="col2"><input type="text" name="field_%%ROW%%_display_name" id="field_%%ROW%%_display_name"
                                    value="" class="display_text"/></li>
            <li class="splitter"></li>
            <li class="col3 scrollable">
                <ul class="scroll-content">
                    <li class="sub_col1">
                        <input type="text" name="field_%%ROW%%_name" id="field_%%ROW%%_name" value=""
                               class="field_names"/>
                    </li>
                    <li class="sub_col2">
                        <?php echo smarty_function_display_field_types_dropdown(array('name'=>"field_%%ROW%%_type_id",'id'=>"field_%%ROW%%_type_id",'class'=>"field_types"),$_smarty_tpl);?>

                    </li>
                    <li class="sub_col3 check_area">
                        <input type="checkbox" name="field_%%ROW%%_include_on_redirect"
                               id="field_%%ROW%%_include_on_redirect" class="pass_on"/>
                    </li>
                    <li class="sub_col4">
                        <div class="field_sizes_div">
                            <?php echo smarty_function_field_sizes_dropdown(array('name'=>"field_%%ROW%%_size",'id'=>"field_%%ROW%%_size",'field_type_id'=>'','default'=>"medium",'class'=>"field_sizes"),$_smarty_tpl);?>

                        </div>
                    </li>
                    <li class="sub_col5">
                        <select name="field_%%ROW%%_data_type" class="data_types">
                            <option value="string"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_string'];?>
</option>
                            <option value="number"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_number'];?>
</option>
                        </select>
                    </li>
                    <li class="sub_col6">
                        <input type="text" name="col_%%ROW%%_name" id="col_%%ROW%%_name" class="db_column" value=""
                               maxlength="64"/>
                    </li>
                </ul>
            </li>
            <li class="splitter"></li>
            <li class="col4 edit"></li>
            <li class="col5 colN del"></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

<div class="hidden tabbed_dialog" id="edit_field_template">
    <div id="edit_field_template_message" class="margin_bottom_small hidden"></div>
    <div id="edit_field_template_new_field" class="margin_bottom_small notify hidden">
        <div style="padding: 8px">
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notify_edit_field_new_field'];?>

        </div>
    </div>
    <div class="inner_tabset ft_dialog" id="edit_field">
        <div class="tab_row threeCols">
            <div class="inner_tab1 selected"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_main_settings'];?>
</div>
            <div class="inner_tab2"></div>
            <div class="inner_tab3">Validation</div>
        </div>
        <div class="inner_tab_content">
            <div class="inner_tab_content1">
                <form id="edit_field_form_tab1">
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="180"><label for="edit_field__display_text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_display_text'];?>
</label>
                            </td>
                            <td>
                                <input type="text" id="edit_field__display_text" name="edit_field__display_text" maxlength="100" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="edit_field__field_name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_field'];?>
</label></td>
                            <td>
                                <div class="edit_field__non_system"><input type="text" id="edit_field__field_name"
                                                                           name="edit_field__field_name" maxlength="255" /></div>
                                <div class="edit_field__system medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="edit_field__field_type"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_type'];?>
</label></td>
                            <td>
                                <div class="edit_field__non_system">
                                    <?php echo smarty_function_display_field_types_dropdown(array('id'=>"edit_field__field_type",'name'=>"edit_field__field_type",'default'=>$_smarty_tpl->tpl_vars['field']->value['field_type_id']),$_smarty_tpl);?>

                                </div>
                                <div id="edit_field__field_type_system" class="edit_field__system medium_grey"></div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="edit_field__pass_on"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_pass_on'];?>
</label></td>
                            <td>
                                <input type="checkbox" id="edit_field__pass_on" name="edit_field__pass_on"/>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_size'];?>
</td>
                            <td>
                                <div class="edit_field__non_system" id="edit_field__field_size_div"></div>
                                <div class="edit_field__system medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</div>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_data_type'];?>
</td>
                            <td>
                                <div class="edit_field__non_system">
                                    <select id="edit_field__data_type" name="edit_field__data_type">
                                        <option value="string"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_string'];?>
</option>
                                        <option value="number"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_number'];?>
</option>
                                    </select>
                                </div>
                                <div class="edit_field__system medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="edit_field__db_column"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_db_column'];?>
</label></td>
                            <td>
                                <div class="edit_field__non_system" id="edit_field__db_column_div">
                                    <input type="text" id="edit_field__db_column" name="edit_field__db_column"
                                           maxlength="64"/>
                                </div>
                                <div id="edit_field__db_column_div_system" class="edit_field__system medium_grey"></div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="inner_tab_content2" style="display:none">
                <form id="edit_field_form_tab2">
                    <div id="edit_field__field_settings_loading"
                         class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_loading_ellipsis'];?>
</div>
                    <div id="edit_field__field_settings"></div>
                </form>
            </div>
            <div class="inner_tab_content3" style="display:none">
                <form id="edit_field_form_tab3">
                    <div class="edit_field__non_system" id="validation_table"></div>
                    <div class="edit_field__system medium_grey"><i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_system_fields_no_validation'];?>
</i></div>
                </form>
            </div>
        </div>
    </div>
    <a class="prev_field field_nav"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_field'];?>
</a>
    <a class="next_field field_nav"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_next_field'];?>
</a>
</div>
<?php }
}
