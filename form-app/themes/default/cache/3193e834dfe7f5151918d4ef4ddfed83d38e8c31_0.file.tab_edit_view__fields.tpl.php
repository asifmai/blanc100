<?php
/* Smarty version 3.1.31, created on 2019-11-22 08:50:39
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_view__fields.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dd7934fd7fe44_16534356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3193e834dfe7f5151918d4ef4ddfed83d38e8c31' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_view__fields.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd7934fd7fe44_16534356 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="hint margin_bottom">
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_view_fields_info'];?>

    </div>

    <div id="no_view_fields_defined" class="margin_bottom" <?php if (count($_smarty_tpl->tpl_vars['grouped_fields']->value) > 0) {?>style="display:none"<?php }?>>
      <div class="error">
        <div style="padding: 6px">
          <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_no_fields_in_view'];?>

        </div>
      </div>
    </div>

    <div id="allow_editable_fields_toggle" class="margin_bottom_large" <?php if (count($_smarty_tpl->tpl_vars['grouped_fields']->value) == 0) {?>style="display:none"<?php }?>>
      <input type="checkbox" name="may_edit_submissions" id="cmes" value="yes"
        onchange="view_ns.toggle_editable_fields(this.checked)" <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_edit_submissions'] == "yes") {?>checked<?php }?> />
      <label for="cmes"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_allow_fields_edited'];?>
</label>
    </div>

    <div class="sortable_groups check_areas" id="<?php echo $_smarty_tpl->tpl_vars['view_fields_sortable_id']->value;?>
">
	  <input type="hidden" class="sortable__add_group_handler" value="view_ns.add_field_group" />
	  <input type="hidden" class="sortable__delete_group_handler" value="view_ns.delete_field_group" />
	  <input type="hidden" class="sortable__class" value="groupable edit_view_fields" />
	  <input type="hidden" class="sortable__new_group_name" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_field_group'];?>
" />
	  <input type="hidden" name="deleted_groups" id="deleted_groups" value="" />

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_fields']->value, 'curr_group_info', false, NULL, 'group', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_group_info']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('group_info', $_smarty_tpl->tpl_vars['curr_group_info']->value['group']);
?>
        <?php $_smarty_tpl->_assignInScope('view_fields', $_smarty_tpl->tpl_vars['curr_group_info']->value['fields']);
?>

          <div class="sortable_group">
            <div class="sortable_group_header">
              <div class="sort"></div>
              <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_field_group'];?>
</label>
              <input type="text" name="group_name_<?php echo $_smarty_tpl->tpl_vars['group_info']->value['group_id'];?>
" class="group_name" value="<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['group_info']->value['group_name'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>" />
              <select name="group_tab_<?php echo $_smarty_tpl->tpl_vars['group_info']->value['group_id'];?>
" class="tabs_dropdown">
                <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_available_tabs'];?>
">
                <?php $_smarty_tpl->_assignInScope('has_tabs', false);
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_tabs']->value, 'view_tab', false, NULL, 'tab_row', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view_tab']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_tab_row']->value['iteration']++;
?>
                  <?php $_smarty_tpl->_assignInScope('counter', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_tab_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tab_row']->value['iteration'] : null));
?>
                  
                  <?php if ($_smarty_tpl->tpl_vars['view_tab']->value['tab_label']) {?>
                    <?php $_smarty_tpl->_assignInScope('has_tabs', true);
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['counter']->value == $_smarty_tpl->tpl_vars['group_info']->value['custom_data']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['view_tab']->value['tab_label'];?>
</option>
                  <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <?php if (!$_smarty_tpl->tpl_vars['has_tabs']->value) {?><option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['validation_no_tabs_defined'];?>
</option><?php }?>
                </optgroup>
              </select>
              <div class="delete_group"></div>
              <input type="hidden" class="group_order" value="<?php echo $_smarty_tpl->tpl_vars['group_info']->value['group_id'];?>
" />
              <div class="clear"></div>
            </div>

            <div class="sortable groupable edit_view_fields">
              <ul class="header_row">
                <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
                <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field'];?>
</li>
                <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_type'];?>
</li>
                <li class="col4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_editable'];?>
</li>
                <li class="col5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_searchable'];?>
</li>
                <li class="col6 colN del"></li>
              </ul>
              <div class="clear"></div>
              <ul class="rows connected_sortable">
              <li class="sortable_row empty_group<?php if (count($_smarty_tpl->tpl_vars['view_fields']->value) != 0) {?> hidden<?php }?>"><div class="clear"></div></li>

              <?php $_smarty_tpl->_assignInScope('previous_item', '');
?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_fields']->value, 'field', false, NULL, 'row', array (
  'index' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
?>
                <?php $_smarty_tpl->_assignInScope('field_id', $_smarty_tpl->tpl_vars['field']->value['field_id']);
?>
                <?php $_smarty_tpl->_assignInScope('index', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index'] : null));
?>
                <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>

                <?php if ($_smarty_tpl->tpl_vars['field']->value['view_field_is_new_sort_group'] == "yes") {?>
                  <?php if ($_smarty_tpl->tpl_vars['previous_item']->value != '') {?>
                    </div>
                    <div class="clear"></div>
                  </li>
                  <?php }?>
                  <li class="sortable_row<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>">
                  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?>
                      <?php $_smarty_tpl->_assignInScope('next_item_is_new_sort_group', "yes");
?>
                  <?php } else { ?>
                      <?php $_smarty_tpl->_assignInScope('next_item_is_new_sort_group', $_smarty_tpl->tpl_vars['view_fields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null)]['view_field_is_new_sort_group']);
?>
                  <?php }?>
                  <div class="row_content<?php if ($_smarty_tpl->tpl_vars['next_item_is_new_sort_group']->value == 'no') {?> grouped_row<?php }?>">
                <?php }?>

                <?php $_smarty_tpl->_assignInScope('previous_item', $_smarty_tpl->tpl_vars['field']->value);
?>

                <div class="row_group">
                  <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" />
                  <ul>
                    <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['field']->value['list_order'];?>
</li>
                    <li class="col2"><?php echo $_smarty_tpl->tpl_vars['field']->value['field_title'];?>
</li>
                    <li class="col3 medium_grey"><?php echo $_smarty_tpl->tpl_vars['field_types']->value[$_smarty_tpl->tpl_vars['field']->value['field_type_id']];?>
</li>
                    <li class="col4 <?php if ($_smarty_tpl->tpl_vars['field']->value['col_name'] != "submission_id" && $_smarty_tpl->tpl_vars['field']->value['col_name'] != "last_modified_date") {?>check_area<?php }?>">
                      
                      <?php if ($_smarty_tpl->tpl_vars['field']->value['col_name'] != "submission_id" && $_smarty_tpl->tpl_vars['field']->value['col_name'] != "last_modified_date") {?>
                        <input type="checkbox" name="editable_fields[]" value="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" class="editable_fields" <?php if ($_smarty_tpl->tpl_vars['field']->value['is_editable'] == "yes") {?>checked<?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_edit_submissions'] == "no") {?>disabled<?php }?> />
                      <?php }?>
                    </li>
                    <li class="col5 check_area">
                      <input type="checkbox" name="searchable_fields[]" value="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['is_searchable'] == "yes") {?>checked<?php }?> />
                    </li>
                    <li class="col6 colN del"><a href="#" onclick="return view_ns.remove_view_field(<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
)"></a></li>
                  </ul>
                  <div class="clear"></div>
                </div>

              <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?>
                </div>
                <div class="clear"></div>
              </li>
              <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          </ul>
        </div>
        <div class="clear"></div>
        <div class="sortable_group_footer">
          <a href="#" class="add_field_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_fields_rightarrow'];?>
</a>
        </div>
      </div>

      <div class="clear"></div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>

    <div>
      <a href="#" class="custom_add_group_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_new_group_rightarrow'];?>
</a>
    </div>

    <div class="hidden add_fields_popup" id="add_fields_popup">
      <div class="error margin_bottom_large hidden"><div style="padding: 6px"></div></div>
      <table cellspacing="1" cellpadding="3" width="100%" height="100%">
      <tr>
        <td width="140" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_available_fields'];?>
</td>
        <td>
          <div class="view_fields_list" id="add_fields_popup_available_fields"></div>
          <div class="grey_box two_buttons">
            <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_select_all'];?>
" onclick="view_ns.add_fields_select_all()" />
            <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_unselect_all'];?>
" onclick="view_ns.add_fields_unselect_all()" />
          </div>
        </td>
      </tr>
      </table>
    </div>

    <div class="hidden add_view_group_popup" id="add_group_popup">
      <input type="hidden" class="add_group_popup_title" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_new_view_group'];?>
" />
      <div class="add_field_error hidden error"></div>

      <table cellspacing="1" cellpadding="3" width="100%" height="100%">
      <tr>
        <td width="140"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_group_name'];?>
</td>
        <td><input type="text" class="new_group_name" placeholder="(optional)" /></td>
      </tr>
      <tr>
        <td valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_available_fields'];?>
</td>
        <td>
          <div class="view_fields_list" id="add_group_popup_available_fields"></div>
          <div class="grey_box two_buttons">
            <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_select_all'];?>
" onclick="view_ns.add_fields_select_all()" />
            <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_unselect_all'];?>
" onclick="view_ns.add_fields_unselect_all()" />
          </div>
        </td>
      </tr>
      </table>
    </div>

    <!-- for the add group functionality -->
    <div id="sortable__new_group_header" class="hidden">
      <ul class="header_row">
        <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
        <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field'];?>
</li>
        <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_type'];?>
</li>
        <li class="col4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_editable'];?>
</li>
        <li class="col5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_searchable'];?>
</li>
        <li class="col6 colN del"></li>
      </ul>
    </div>
    <div id="sortable__new_group_footer" class="hidden">
      <div class="sortable_group_footer">
        <a href="#" class="add_field_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_fields_rightarrow'];?>
</a>
      </div>
    </div>
<?php }
}
