<?php
/* Smarty version 3.1.31, created on 2019-11-22 08:48:21
  from "/home/blanc100/public_html/form-app/modules/form_builder/smarty_plugins/placeholders_html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dd792c56a5075_63829882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be67c6cb73498ae7dab9d3b2c9e16dee3a402b92' => 
    array (
      0 => '/home/blanc100/public_html/form-app/modules/form_builder/smarty_plugins/placeholders_html.tpl',
      1 => 1541374538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd792c56a5075_63829882 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php if (count($_smarty_tpl->tpl_vars['placeholders']->value) == 0) {?>
    <div class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['notify_no_placeholders'];?>
</div>
  <?php }?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['placeholders']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
    <?php $_smarty_tpl->_assignInScope('pid', $_smarty_tpl->tpl_vars['info']->value['placeholder_id']);
?>
	  <input type="hidden" name="placeholder_ids[]" class="pids" value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" />

    <div>
	    <label><?php echo $_smarty_tpl->tpl_vars['info']->value['placeholder_label'];?>
</label>
      <div>
        <?php if ($_smarty_tpl->tpl_vars['info']->value['field_type'] == "textbox") {?>
          <input type="text" name="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['placeholder_hash']->value[$_smarty_tpl->tpl_vars['pid']->value])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['placeholder_hash']->value[$_smarty_tpl->tpl_vars['pid']->value], ENT_QUOTES, 'UTF-8', true);
}?>" class="full" />
        <?php } elseif ($_smarty_tpl->tpl_vars['info']->value['field_type'] == "textarea") {?>
          <textarea name="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" style="width:98%; height: 60px"><?php echo $_smarty_tpl->tpl_vars['placeholder_hash']->value[$_smarty_tpl->tpl_vars['pid']->value];?>
</textarea>
        <?php } elseif ($_smarty_tpl->tpl_vars['info']->value['field_type'] == "password") {?>
          <input type="password" name="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['placeholder_hash']->value[$_smarty_tpl->tpl_vars['pid']->value], ENT_QUOTES, 'UTF-8', true);?>
" size="20" />
        <?php } elseif ($_smarty_tpl->tpl_vars['info']->value['field_type'] == "radios") {?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value['options'], 'option', false, 'k2', 'row', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k2']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
?>
          <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
          <input type="radio" name="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" id="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_text'], ENT_QUOTES, 'UTF-8', true);?>
"
            <?php if ($_smarty_tpl->tpl_vars['option']->value['option_text'] == $_smarty_tpl->tpl_vars['placeholder_hash']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>checked<?php }?> />
            <label for="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_text'], ENT_QUOTES, 'UTF-8', true);?>
</label>
            <?php if ($_smarty_tpl->tpl_vars['info']->value['field_orientation'] == "vertical") {?><br /><?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        <?php } elseif ($_smarty_tpl->tpl_vars['info']->value['field_type'] == "checkboxes") {?>

          <?php $_smarty_tpl->_assignInScope('selected_els', explode("|",$_smarty_tpl->tpl_vars['placeholder_hash']->value[$_smarty_tpl->tpl_vars['pid']->value]));
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value['options'], 'option', false, 'k2', 'row', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k2']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
?>
              <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
              <input type="checkbox" name="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
[]" id="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_text'], ENT_QUOTES, 'UTF-8', true);?>
"
                <?php if (in_array($_smarty_tpl->tpl_vars['option']->value['option_text'],$_smarty_tpl->tpl_vars['selected_els']->value)) {?>checked="checked"<?php }?> />
                <label for="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_text'], ENT_QUOTES, 'UTF-8', true);?>
</label>
              <?php if ($_smarty_tpl->tpl_vars['info']->value['field_orientation'] == "vertical") {?><br /><?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        <?php } elseif ($_smarty_tpl->tpl_vars['info']->value['field_type'] == "select") {?>

          <select name="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" class="full">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value['options'], 'option', false, 'k2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k2']->value => $_smarty_tpl->tpl_vars['option']->value) {
?>
              <?php $_smarty_tpl->_assignInScope('escaped_value', htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_text'], ENT_QUOTES, 'UTF-8', true));
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_text'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['escaped_value']->value == $_smarty_tpl->tpl_vars['placeholder_hash']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['option_text'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          </select>
        <?php } elseif ($_smarty_tpl->tpl_vars['info']->value['field_type'] == "multi-select") {?>
          <?php $_smarty_tpl->_assignInScope('selected_els', explode("|",$_smarty_tpl->tpl_vars['placeholder_hash']->value[$_smarty_tpl->tpl_vars['pid']->value]));
?>
          <select name="placeholder_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
[]" multiple size="4" class="full">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value['options'], 'option', false, 'k2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k2']->value => $_smarty_tpl->tpl_vars['option']->value) {
?>
              <?php $_smarty_tpl->_assignInScope('escaped_value', htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_text'], ENT_QUOTES, 'UTF-8', true));
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_text'], ENT_QUOTES, 'UTF-8', true);?>
"
              <?php if (in_array($_smarty_tpl->tpl_vars['option']->value['option_text'],$_smarty_tpl->tpl_vars['selected_els']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['option_text'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          </select>
        <?php }?>
      </div>
    </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


  <input type="hidden" id="placeholders_loaded" />
<?php }
}
