<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:04:09
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/add/step4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b4b9d0ddb8_91876831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b04ea94dfb3abcd75eab092f964f1ca309f9d6f' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/add/step4.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b4b9d0ddb8_91876831 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>"header.tpl"),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="../"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_forms.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_forms'];?>
</a> <span class="joiner">&raquo;</span>
      <a href="./"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_form'];?>
</a> <span class="joiner">&raquo;</span>
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_external_form'];?>

    </td>
  </tr>
  </table>

  <table cellpadding="0" cellspacing="0" width="100%" class="add_form_nav">
  <tr>
    <td class="selected"><a href="step1.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_start'];?>
</a></td>
    <td class="selected"><a href="step2.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_info'];?>
</a></td>
    <td class="selected"><a href="step3.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_test_submission'];?>
</a></td>
    <td class="selected"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_database_setup'];?>
</td>
    <td class="unselected"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_types'];?>
</td>
    <td class="unselected"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_finalize_form'];?>
</td>
  </tr>
  </table>

  <br />

  <div>
    <div class="subtitle underline"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_db_setup_page_4'], 'UTF-8');?>
</div>

    <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


    <div class="margin_bottom_large">
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_add_form_step_3_para_1'];?>

    </div>
    <div class="margin_bottom_large">
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_add_form_step_3_para_2'];?>

    </div>

    <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" id="step4_form">
      <input type="hidden" name="form_id" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />

      <div class="sortable groupable add_form_step4" id="<?php echo $_smarty_tpl->tpl_vars['sortable_id']->value;?>
">
        <input type="hidden" class="tabindex_col_selectors" value=".rows .col3 input|.rows .col5 select" />
        <ul class="header_row">
          <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
          <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_field_name'];?>
</li>
          <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_display_name'];?>
<span class="pad_right">&nbsp;</span><input type="button" class="bold" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_smart_fill'];?>
" onclick="page_ns.smart_fill()" /></li>
          <li class="col4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_sample_data'];?>
</li>
          <li class="col5 colN del"></li>
        </ul>
        <div class="clear"></div>

        <ul class="rows">
        <?php $_smarty_tpl->_assignInScope('previous_item', '');
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_fields']->value, 'field', false, NULL, 'row', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
?>
          <?php $_smarty_tpl->_assignInScope('row_count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
          <?php $_smarty_tpl->_assignInScope('field_id', $_smarty_tpl->tpl_vars['field']->value['field_id']);
?>
          <?php $_smarty_tpl->_assignInScope('style', '');
?>

          <?php if ($_smarty_tpl->tpl_vars['field']->value['is_new_sort_group'] == "yes") {?>
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
                <?php $_smarty_tpl->_assignInScope('next_item_is_new_sort_group', $_smarty_tpl->tpl_vars['form_fields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null)]['is_new_sort_group']);
?>
              <?php }?>
              <div class="row_content<?php if ($_smarty_tpl->tpl_vars['next_item_is_new_sort_group']->value == 'no') {?> grouped_row<?php }?>">
          <?php }?>

          <?php $_smarty_tpl->_assignInScope('previous_item', $_smarty_tpl->tpl_vars['field_id']->value);
?>

            <div class="row_group<?php if ($_smarty_tpl->tpl_vars['field']->value['is_system_field'] == "yes") {?> system_field<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>">
              <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" />
              <ul>
                <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['row_count']->value;?>
</li>
                <li class="col2 blue"><?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
</li>
                <li class="col3"><input type="text" name="field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_display_name" id="field_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_display_name" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['field_title'];?>
" /></li>
                <li class="col4 ellipsis">
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['is_system_field'] == "yes") {?>
                    <span class="light_grey">&#8212;</span>
                  <?php } else { ?>
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['field_test_value'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>

                  <?php }?>
                </li>
                <li class="col5 colN<?php if ($_smarty_tpl->tpl_vars['field']->value['is_system_field'] == "no") {?> del<?php }?>"></li>
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
        <div class="clear"></div>
      </div>

      <p>
        <input type="submit" name="next_step" class="next_step" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_next_step_rightarrow'];?>
"
          onclick="return page_ns.validate_fields()"/>
      </p>

    </form>

  </div>

<?php echo smarty_function_ft_include(array('file'=>"footer.tpl"),$_smarty_tpl);?>

<?php }
}
