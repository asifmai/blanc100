<?php
/* Smarty version 3.1.31, created on 2019-11-22 08:48:21
  from "/home/blanc100/public_html/form-app/modules/form_builder/smarty_plugins/templates_html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dd792c55bf277_19217415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a970cd6d04a1f5961b67a577ee8b7e9e02cf93e' => 
    array (
      0 => '/home/blanc100/public_html/form-app/modules/form_builder/smarty_plugins/templates_html.tpl',
      1 => 1541374538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd792c55bf277_19217415 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if (count($_smarty_tpl->tpl_vars['grouped_templates']->value['page_layout']) > 1) {?>
    <div>
        <label for="page_layout_template_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_page_layout'];?>
</label>
        <div>
            <select name="page_layout_template_id" id="page_layout_template_id" class="full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_templates']->value['page_layout'], 'template', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['selected_templates']->value['page_layout'] == $_smarty_tpl->tpl_vars['template']->value['template_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['template_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="page_layout_template_id" value="<?php echo $_smarty_tpl->tpl_vars['grouped_templates']->value['page_layout'][0]['template_id'];?>
"/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['grouped_templates']->value['header']) > 1) {?>
    <div>
        <label for="header_template_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_header'];?>
</label>
        <div>
            <select name="header_template_id" id="header_template_id" class="full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_templates']->value['header'], 'template', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['selected_templates']->value['header']) && $_smarty_tpl->tpl_vars['selected_templates']->value['header'] == $_smarty_tpl->tpl_vars['template']->value['template_id']) {?>selected="selected"<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['template']->value['template_name'];?>

                    </option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="header_template_id" value="<?php echo $_smarty_tpl->tpl_vars['grouped_templates']->value['header'][0]['template_id'];?>
"/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['grouped_templates']->value['footer']) > 1) {?>
    <div>
        <label for="footer_template_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_footer'];?>
</label>
        <div>
            <select name="footer_template_id" id="footer_template_id" class="full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_templates']->value['footer'], 'template', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['selected_templates']->value['footer'] == $_smarty_tpl->tpl_vars['template']->value['template_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['template_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="footer_template_id" value="<?php echo $_smarty_tpl->tpl_vars['grouped_templates']->value['footer'][0]['template_id'];?>
"/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['grouped_templates']->value['form_page']) > 1) {?>
    <div>
        <label for="form_page_template_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_form_page'];?>
</label>
        <div>
            <select name="form_page_template_id" id="form_page_template_id" class="full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_templates']->value['form_page'], 'template', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['selected_templates']->value['form_page'] == $_smarty_tpl->tpl_vars['template']->value['template_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['template_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="form_page_template_id" value="<?php echo $_smarty_tpl->tpl_vars['grouped_templates']->value['form_page'][0]['template_id'];?>
"/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['grouped_templates']->value['review_page']) > 1) {?>
    <div>
        <label for="review_page_template_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_review_page'];?>
</label>
        <div>
            <select name="review_page_template_id" id="review_page_template_id" class="full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_templates']->value['review_page'], 'template', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['selected_templates']->value['review_page'] == $_smarty_tpl->tpl_vars['template']->value['template_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['template_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="review_page_template_id" value="<?php echo $_smarty_tpl->tpl_vars['grouped_templates']->value['review_page'][0]['template_id'];?>
"/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['grouped_templates']->value['thankyou_page']) > 1) {?>
    <div>
        <label for="review_page_template_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_thankyou_page'];?>
</label>
        <div>
            <select name="thankyou_page_template_id" id="thankyou_page_template_id" class="full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_templates']->value['thankyou_page'], 'template', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['selected_templates']->value['thankyou_page'] == $_smarty_tpl->tpl_vars['template']->value['template_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['template_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="thankyou_page_template_id" value="<?php echo $_smarty_tpl->tpl_vars['grouped_templates']->value['thankyou_page'][0]['template_id'];?>
"/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['grouped_templates']->value['form_offline_page']) > 1) {?>
    <div>
        <label for="form_offline_page_template_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_form_offline_page'];?>
</label>
        <div>
            <select name="form_offline_page_template_id" id="form_offline_page_template_id" class="full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_templates']->value['form_offline_page'], 'template', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['selected_templates']->value['form_offline_page'] == $_smarty_tpl->tpl_vars['template']->value['template_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['template_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="form_offline_page_template_id"
           value="<?php echo $_smarty_tpl->tpl_vars['grouped_templates']->value['form_offline_page'][0]['template_id'];?>
"/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['grouped_templates']->value['navigation']) > 1) {?>
    <div>
        <label for="navigation_template_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_navigation'];?>
</label>
        <div>
            <select name="navigation_template_id" id="navigation_template_id" class="full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_templates']->value['navigation'], 'template', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
"
                            <?php if (!empty($_smarty_tpl->tpl_vars['selected_templates']->value) && $_smarty_tpl->tpl_vars['selected_templates']->value['navigation'] == $_smarty_tpl->tpl_vars['template']->value['template_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['template_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="navigation_template_id" value="<?php echo $_smarty_tpl->tpl_vars['grouped_templates']->value['navigation'][0]['template_id'];?>
"/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['grouped_templates']->value['continue_block']) > 1) {?>
    <div>
        <label for="continue_block_template_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_continue_block'];?>
</label>
        <div>
            <select name="continue_block_template_id" id="continue_block_template_id" class="full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_templates']->value['continue_block'], 'template', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
"
                            <?php if (isset($_smarty_tpl->tpl_vars['selected_templates']->value['continue_block']) && $_smarty_tpl->tpl_vars['selected_templates']->value['continue_block'] == $_smarty_tpl->tpl_vars['template']->value['template_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['template_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="continue_block_template_id" value="<?php echo $_smarty_tpl->tpl_vars['grouped_templates']->value['continue_block'][0]['template_id'];?>
"/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['grouped_templates']->value['error_message']) > 1) {?>
    <div>
        <label for="error_message_template_id"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_error_message'];?>
</label>
        <div>
            <select name="error_message_template_id" id="error_message_template_id" class="full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_templates']->value['error_message'], 'template', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['selected_templates']->value['error_message'] == $_smarty_tpl->tpl_vars['template']->value['template_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['template_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="error_message_template_id" value="<?php echo $_smarty_tpl->tpl_vars['grouped_templates']->value['error_message'][0]['template_id'];?>
"/>
<?php }?>

<input type="hidden" id="templates_loaded"/>
<?php }
}
