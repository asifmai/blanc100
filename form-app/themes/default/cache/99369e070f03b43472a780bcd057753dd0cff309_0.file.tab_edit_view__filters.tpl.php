<?php
/* Smarty version 3.1.31, created on 2019-11-22 08:50:39
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_view__filters.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dd7934ff008d7_15864066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99369e070f03b43472a780bcd057753dd0cff309' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_edit_view__filters.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd7934ff008d7_15864066 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_template_hook')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.template_hook.php';
?>
  <input type="hidden" name="num_standard_filters" id="num_standard_filters" value="<?php echo $_smarty_tpl->tpl_vars['num_standard_filters']->value;?>
" />
  <input type="hidden" name="num_client_map_filters" id="num_client_map_filters" value="<?php echo $_smarty_tpl->tpl_vars['num_client_map_filters']->value;?>
" />

  <div class="grey_box margin_bottom">
    <a href="#" onclick="return view_ns.toggle_filter_section('standard')"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_standard_filters'];?>
</a>

    <div id="standard_filters" <?php if ($_smarty_tpl->tpl_vars['view_info']->value['has_standard_filter'] == "no") {?>style="display:none"<?php }?>>
      <div class="margin_top margin_bottom">
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_filters_page'];?>

        <?php echo $_smarty_tpl->tpl_vars['text_filters_tips']->value;?>

      </div>

      <table cellspacing="1" cellpadding="0" class="list_table" width="100%" id="standard_filters_table">
      <tbody><tr>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field'];?>
</th>
        <th width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_operator'];?>
</th>
        <th width="150"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_value_sp'];?>
</th>
        <th class="del"></th>
      </tr>
      
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['standard_filters']->value, 'filter', false, NULL, 'row', array (
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
        <?php $_smarty_tpl->_assignInScope('operator', $_smarty_tpl->tpl_vars['filter']->value['operator']);
?>
        <?php $_smarty_tpl->_assignInScope('filter_values', $_smarty_tpl->tpl_vars['filter']->value['filter_values']);
?>
        <tr id="standard_row_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
          <td>
            <select name="standard_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_field_id" id="standard_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_field_id"
              onchange="view_ns.change_standard_filter_field(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)">
              <?php $_smarty_tpl->_assignInScope('selected_field_is_date_field', false);
?>
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
                  <?php if (in_array($_smarty_tpl->tpl_vars['curr_field_id']->value,$_smarty_tpl->tpl_vars['date_field_ids']->value)) {?>
                    <?php $_smarty_tpl->_assignInScope('selected_field_is_date_field', true);
?>
                  <?php }?>
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
            <div id="standard_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_operators_dates_div" <?php if (!$_smarty_tpl->tpl_vars['selected_field_is_date_field']->value) {?>style="display:none"<?php }?>>
              <select name="standard_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_operator_date">
                <option value="before" <?php if ($_smarty_tpl->tpl_vars['operator']->value == "before") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_before'];?>
</option>
                <option value="after"  <?php if ($_smarty_tpl->tpl_vars['operator']->value == "after") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_after'];?>
</option>
              </select>
            </div>
            <div id="standard_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_operators_div" <?php if ($_smarty_tpl->tpl_vars['selected_field_is_date_field']->value) {?>style="display:none"<?php }?>>
              <select name="standard_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_operator">
                <option value="equals"     <?php if ($_smarty_tpl->tpl_vars['operator']->value == "equals") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_equals'];?>
</option>
                <option value="not_equals" <?php if ($_smarty_tpl->tpl_vars['operator']->value == "not_equals") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_not_equal'];?>
</option>
                <option value="like"       <?php if ($_smarty_tpl->tpl_vars['operator']->value == "like") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_like'];?>
</option>
                <option value="not_like"   <?php if ($_smarty_tpl->tpl_vars['operator']->value == "not_like") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_not_like'];?>
</option>
              </select>
            </div>
          </td>
          <td>
            <div id="standard_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_values_dates_div" <?php if (!$_smarty_tpl->tpl_vars['selected_field_is_date_field']->value) {?>style="display:none"<?php }?> class="cf_date_group">
              <input type="text" name="standard_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_filter_date_values" id="standard_date_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_values']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><img
                src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/images/calendar.png" id="standard_date_image_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" border="0" />
            </div>
            <?php echo '<script'; ?>
>
              $(function() { $("#standard_date_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
").datetimepicker({
                showSecond: true,
                timeFormat: "hh:mm:ss",
                dateFormat: "yy-mm-dd"
                });
              });
            <?php echo '</script'; ?>
>
            <div id="standard_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_values_div" <?php if ($_smarty_tpl->tpl_vars['selected_field_is_date_field']->value) {?>style="display:none"<?php }?>>
              <input type="text" name="standard_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_filter_values" style="width: 144px;" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_values']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
            </div>
          </td>
          <td class="del"><a href="#" onclick="return view_ns.delete_filter_row('standard', <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)"></a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

      </tbody></table>

      <div class="margin_top">
        <?php echo $_smarty_tpl->tpl_vars['add_standard_filter_num_rows_input_field']->value;?>

        <input type="button" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_add'], 'UTF-8');?>
" onclick="view_ns.add_standard_filters($('#num_standard_filter_rows').val())" />
      </div>
    </div>
  </div>

  <div class="grey_box">
    <a href="#" onclick="return view_ns.toggle_filter_section('client_map')"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_client_map_filters'];?>
</a>
    <div id="client_map_filters" <?php if ($_smarty_tpl->tpl_vars['view_info']->value['has_client_map_filter'] == "no") {?>style="display:none"<?php }?>>
      <div class="margin_top margin_bottom">
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_client_map_filters_desc1'];?>

      </div>

      <table cellspacing="1" cellpadding="0" class="list_table" width="100%" id="client_map_filters_table">
      <tbody><tr>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_field'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_operator'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_client_field'];?>
</th>
        <th class="del"></th>
      </tr>

      
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client_map_filters']->value, 'filter', false, NULL, 'row', array (
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
        <?php $_smarty_tpl->_assignInScope('operator', $_smarty_tpl->tpl_vars['filter']->value['operator']);
?>
        <?php $_smarty_tpl->_assignInScope('filter_values', $_smarty_tpl->tpl_vars['filter']->value['filter_values']);
?>

        <tr id="client_map_row_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
          <td>
            <select name="client_map_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_field_id" id="client_map_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_field_id">
              <?php $_smarty_tpl->_assignInScope('selected_field_is_date_field', false);
?>
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
                <?php if ($_smarty_tpl->tpl_vars['selected']->value && ($_smarty_tpl->tpl_vars['field']->value['col_name'] == "submission_date" || $_smarty_tpl->tpl_vars['field']->value['col_name'] == "last_modified_date")) {?>
                  <?php $_smarty_tpl->_assignInScope('selected_field_is_date_field', true);
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
            <select name="client_map_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_operator">
              <option value="equals"     <?php if ($_smarty_tpl->tpl_vars['operator']->value == "equals") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_equals'];?>
</option>
              <option value="not_equals" <?php if ($_smarty_tpl->tpl_vars['operator']->value == "not_equals") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_not_equal'];?>
</option>
              <option value="like"       <?php if ($_smarty_tpl->tpl_vars['operator']->value == "like") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_like'];?>
</option>
              <option value="not_like"   <?php if ($_smarty_tpl->tpl_vars['operator']->value == "not_like") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_not_like'];?>
</option>
            </select>
          </td>
          <td>
            <select name="client_map_filter_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
_client_field" style="width:160px">
              <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_please_select'];?>
</option>
              <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_core_fields'];?>
">
                <option value="account_id"              <?php if ($_smarty_tpl->tpl_vars['filter_values']->value == "account_id") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_id'];?>
</option>
                <option value="first_name"              <?php if ($_smarty_tpl->tpl_vars['filter_values']->value == "first_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_first_name'];?>
</option>
                <option value="last_name"               <?php if ($_smarty_tpl->tpl_vars['filter_values']->value == "last_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_last_name'];?>
</option>
                <option value="email"                   <?php if ($_smarty_tpl->tpl_vars['filter_values']->value == "email") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email'];?>
</option>
                <option value="settings__company_name"  <?php if ($_smarty_tpl->tpl_vars['filter_values']->value == "settings__company_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_company_name'];?>
</option>
              </optgroup>
              <?php echo smarty_function_template_hook(array('location'=>"admin_edit_view_client_map_filter_dropdown"),$_smarty_tpl);?>

            </select>
          </td>
          <td class="del"><a href="#" onclick="return view_ns.delete_filter_row('client_map', <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)"></a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
      </table>

      <div class="margin_top">
        <?php echo $_smarty_tpl->tpl_vars['add_client_map_filter_num_rows_input_field']->value;?>

        <input type="button" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_add'], 'UTF-8');?>
" onclick="view_ns.add_client_map_filters($('#num_client_map_filter_rows').val())" />
      </div>
    </div>
  </div>
<?php }
}
