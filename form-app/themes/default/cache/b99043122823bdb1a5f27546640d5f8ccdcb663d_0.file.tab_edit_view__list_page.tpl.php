<?php
/* Smarty version 3.1.31, created on 2019-11-22 08:50:39
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_view__list_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dd7934fc1c725_10255528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b99043122823bdb1a5f27546640d5f8ccdcb663d' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_view__list_page.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd7934fc1c725_10255528 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="hint margin_bottom_large">
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_edit_view_list_page'];?>

    </div>

    <div id="no_view_columns_defined" class="margin_bottom" <?php if (count($_smarty_tpl->tpl_vars['view_info']->value['columns']) > 0) {?>style="display:none"<?php }?>>
      <div class="error">
        <div style="padding: 6px">
          No columns defined! You won't be able to use this View until you choose some form fields to
          appear as columns. Click the Add Row link below.
        </div>
      </div>
    </div>

    <div class="sortable submission_list check_areas margin_bottom" id="<?php echo $_smarty_tpl->tpl_vars['submission_list_sortable_id']->value;?>
" <?php if (count($_smarty_tpl->tpl_vars['view_info']->value['columns']) == 0) {?>style="display:none"<?php }?>>
      <input type="hidden" class="sortable__custom_delete_handler" value="view_ns.delete_view_column" />

      <ul class="header_row">
        <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
        <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field'];?>
</li>
        <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_sortable'];?>
</li>
        <li class="col4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_column_width'];?>
</li>
        <li class="col5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_truncate_q'];?>
</li>
        <li class="col6 colN del"></li>
      </ul>
      <div class="clear"></div>
      <ul class="rows" id="rows">

      <?php $_smarty_tpl->_assignInScope('previous_item', '');
?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_info']->value['columns'], 'i', false, 'k', 'view_columns', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_view_columns']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_view_columns']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_view_columns']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_view_columns']->value['total'];
?>
        <?php $_smarty_tpl->_assignInScope('row_num', $_smarty_tpl->tpl_vars['i']->value['list_order']);
?>
        <?php if ($_smarty_tpl->tpl_vars['previous_item']->value != '') {?>
          </div>
          <div class="clear"></div>
        </li>
        <?php }?>
        <li class="sortable_row">
          <div class="row_content">
            <?php $_smarty_tpl->_assignInScope('previous_item', $_smarty_tpl->tpl_vars['i']->value);
?>
            <div class="row_group<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_view_columns']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_view_columns']->value['last'] : null)) {?> rowN<?php }?>">
              <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
" />
              <ul>
                <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['row_num']->value;?>
</li>
                <li class="col2">
                  <select name="field_id_<?php echo $_smarty_tpl->tpl_vars['row_num']->value;?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_fields']->value, 'field', false, NULL, 'field_row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                      <?php $_smarty_tpl->_assignInScope('curr_field_id', $_smarty_tpl->tpl_vars['field']->value['field_id']);
?>
                      <?php $_smarty_tpl->_assignInScope('selected', '');
?>
                      <?php if ($_smarty_tpl->tpl_vars['i']->value['field_id'] == $_smarty_tpl->tpl_vars['curr_field_id']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('selected', "selected");
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
                </li>
                <li class="col3 check_area">
                  <input type="checkbox" name="is_sortable_<?php echo $_smarty_tpl->tpl_vars['row_num']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value['is_sortable'] == "yes") {?>checked<?php }?> />
                </li>
                <li class="col4 <?php if ($_smarty_tpl->tpl_vars['i']->value['auto_size'] == "yes") {?>light_grey<?php }?>">
                  <input type="checkbox" name="auto_size_<?php echo $_smarty_tpl->tpl_vars['row_num']->value;?>
" id="auto_size_<?php echo $_smarty_tpl->tpl_vars['row_num']->value;?>
"
                    <?php if ($_smarty_tpl->tpl_vars['i']->value['auto_size'] == "yes") {?>checked<?php }?> class="auto_size" /><label for="auto_size_<?php echo $_smarty_tpl->tpl_vars['row_num']->value;?>
"
                      class="<?php if ($_smarty_tpl->tpl_vars['i']->value['auto_size'] == "yes") {?>black<?php } else { ?>light_grey<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_auto_size'];?>
</label>
                  &#8212; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_width_c'];?>

                  <input type="text" name="custom_width_<?php echo $_smarty_tpl->tpl_vars['row_num']->value;?>
" class="custom_width" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['custom_width'], ENT_QUOTES, 'UTF-8', true);?>
"
                    <?php if ($_smarty_tpl->tpl_vars['i']->value['auto_size'] == "yes") {?>disabled<?php }?> />px
                </li>
                <li class="col5">
                  <select name="truncate_<?php echo $_smarty_tpl->tpl_vars['row_num']->value;?>
">
                    <option value="truncate" <?php if ($_smarty_tpl->tpl_vars['i']->value['truncate'] == "truncate") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</option>
                    <option value="no_truncate" <?php if ($_smarty_tpl->tpl_vars['i']->value['truncate'] == "no_truncate") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</option>
                  </select>
                </li>
                <li class="col6 colN del"></li>
              </ul>
              <div class="clear"></div>
            </div>

        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_view_columns']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_view_columns']->value['last'] : null)) {?>
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

    <?php echo '<script'; ?>
>view_ns.num_view_columns = <?php echo count($_smarty_tpl->tpl_vars['view_info']->value['columns']);?>
;<?php echo '</script'; ?>
>

    <div>
      <a href="#" onclick="return view_ns.add_view_column()"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_row'];?>
</a>
    </div>
<?php }
}
