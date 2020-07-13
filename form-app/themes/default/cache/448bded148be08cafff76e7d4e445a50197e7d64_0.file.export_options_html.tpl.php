<?php
/* Smarty version 3.1.31, created on 2019-04-10 10:10:43
  from "/home/blanc100/public_html/form-app/modules/export_manager/templates/export_options_html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5cada503913118_07041558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '448bded148be08cafff76e7d4e445a50197e7d64' => 
    array (
      0 => '/home/blanc100/public_html/form-app/modules/export_manager/templates/export_options_html.tpl',
      1 => 1541374538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cada503913118_07041558 (Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php if (count($_smarty_tpl->tpl_vars['export_groups']->value) > 0) {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
/export_manager/scripts/export_manager.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    
    if (typeof em == 'undefined') {
      em = {};
    }
    
    em.export_page = "<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
/export_manager/export.php";
    g.messages["validation_select_rows_to_export"] = "<?php echo $_smarty_tpl->tpl_vars['L']->value['validation_select_rows_to_export'];?>
";
    <?php echo '</script'; ?>
>

    <div class="module_section export_manager_module">
      <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?><div class="module_link"><a href="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/modules/export_manager"></a></div><?php }?>

      <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_download'];?>
 / <?php echo $_smarty_tpl->tpl_vars['L']->value['word_export'];?>
</h2>

      <table cellpadding="0" cellpadding="0">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_groups']->value, 'export_group', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['export_group']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('export_group_id', $_smarty_tpl->tpl_vars['export_group']->value['export_group_id']);
?>
        <tr>
          <td class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['export_icon_folder']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['export_group']->value['icon'];?>
"/></td>
          <td class="export_group_name"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['export_group']->value['group_name'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></td>
          <td class="target_content">
            <?php $_smarty_tpl->_assignInScope('var_name', "export_group_".((string)$_smarty_tpl->tpl_vars['export_group_id']->value)."_results");
?>
            <input type="radio" name="export_group_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
_results" id="export_group_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
_results_1" value="all"
              <?php if (!isset($_smarty_tpl->tpl_vars['SESSION']->value[$_smarty_tpl->tpl_vars['var_name']->value]) || $_smarty_tpl->tpl_vars['SESSION']->value[$_smarty_tpl->tpl_vars['var_name']->value] == "all") {?>checked<?php }?> />
              <label for="export_group_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
_results_1""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_all'];?>
</label>
            <input type="radio" name="export_group_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
_results" id="export_group_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
_results_2" value="selected"
              <?php if (isset($_smarty_tpl->tpl_vars['SESSION']->value[$_smarty_tpl->tpl_vars['var_name']->value]) && $_smarty_tpl->tpl_vars['SESSION']->value[$_smarty_tpl->tpl_vars['var_name']->value] == "selected") {?>checked<?php }?> />
              <label for="export_group_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
_results_2""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_selected'];?>
</label>
          </td>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['export_group']->value['action'] == "popup") {?>
              <?php echo '<script'; ?>
>
              em.export_group_id_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
_height = <?php echo $_smarty_tpl->tpl_vars['export_group']->value['popup_height'];?>
;
              em.export_group_id_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
_width  = <?php echo $_smarty_tpl->tpl_vars['export_group']->value['popup_width'];?>
;
              <?php echo '</script'; ?>
>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['export_group']->value['export_types']) > 1) {?>
              <?php $_smarty_tpl->_assignInScope('var_name', "export_group_".((string)$_smarty_tpl->tpl_vars['export_group_id']->value)."_export_type");
?>
                <select name="export_group_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
_export_type" id="export_group_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
_export_type">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_group']->value['export_types'], 'export_type', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['export_type']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['export_type']->value['export_type_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['page_vars']->value[$_smarty_tpl->tpl_vars['var_name']->value] == $_smarty_tpl->tpl_vars['export_type']->value['export_type_id']) {?>selected<?php }?>><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['export_type']->value['export_type_name'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </select>
            <?php }?>
            <input type="button" name="export_group_<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
" value="<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['export_group']->value['action_button_text'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>"
              onclick="em.export_submissions(<?php echo $_smarty_tpl->tpl_vars['export_group_id']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['export_group']->value['action'];?>
')" />
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
}
