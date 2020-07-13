<?php
/* Smarty version 3.1.31, created on 2019-11-22 08:48:44
  from "/home/blanc100/public_html/form-app/modules/form_builder/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dd792dcd339f1_70524736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '918242dfcdcd1ed9aeb14618610f1b93b92ef289' => 
    array (
      0 => '/home/blanc100/public_html/form-app/modules/form_builder/templates/index.tpl',
      1 => 1541374538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd792dcd339f1_70524736 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_display_template_set_usage')) require_once '/home/blanc100/public_html/form-app/modules/form_builder/smarty_plugins/function.display_template_set_usage.php';
if (!is_callable('smarty_function_template_sets')) require_once '/home/blanc100/public_html/form-app/modules/form_builder/smarty_plugins/function.template_sets.php';
echo smarty_function_ft_include(array('file'=>'modules_header.tpl'),$_smarty_tpl);?>


<table cellpadding="0" cellspacing="0">
    <tr>
        <td width="45"><a href="index.php"><img src="images/icon_form_builder.png" border="0" width="34"
                                                height="34"/></a></td>
        <td class="title">
            <a href="../../admin/modules"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a>
            <span class="joiner">&raquo;</span>
            <?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>

        </td>
    </tr>
</table>

<?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


<div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_template_set_intro'];?>

</div>

<?php if ($_smarty_tpl->tpl_vars['module_settings']->value['demo_mode'] == "on") {?>
    <div class="error margin_bottom_large">
        <div style="padding: 6px">
            <?php echo $_smarty_tpl->tpl_vars['L']->value['notify_form_builder_demo_mode'];?>

        </div>
    </div>
<?php }?>

<form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">

    <?php if (count($_smarty_tpl->tpl_vars['template_sets']->value) == 0) {?>
        <div class="notify">
            <div style="padding: 6px">
                <?php echo $_smarty_tpl->tpl_vars['L']->value['notify_no_template_sets_defined'];?>

            </div>
        </div>
    <?php } else { ?>
        <div class="sortable template_sets" id="<?php echo $_smarty_tpl->tpl_vars['sortable_id']->value;?>
">
            <input type="hidden" class="sortable__custom_delete_handler" value="fb_ns.delete_template_set"/>
            <ul class="header_row">
                <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
                <li class="col2"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_template_set'];?>
</li>
                <li class="col3"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_where_used'];?>
</li>
                <li class="col4"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_is_complete'];?>
</li>
                <li class="col5"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_templates'];?>
</li>
                <li class="col6"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_resources'];?>
</li>
                <li class="col7"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_placeholders'];?>
</li>
                <li class="col8 edit"></li>
                <li class="col9 colN del"></li>
            </ul>
            <div class="clear"></div>
            <ul class="rows check_areas">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template_sets']->value, 'template_set', false, NULL, 'row', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template_set']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
?>
                    <?php $_smarty_tpl->_assignInScope('i', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
                    <?php $_smarty_tpl->_assignInScope('set_id', $_smarty_tpl->tpl_vars['template_set']->value['set_id']);
?>
                    <li class="sortable_row">
                        <div class="row_content">
                            <div class="row_group<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>">
                                <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['set_id']->value;?>
"/>
                                <ul>
                                    <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</li>
                                    <li class="col2">
                                        <?php echo $_smarty_tpl->tpl_vars['template_set']->value['set_name'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['template_set']->value['version']) {?>
                                            <span class="medium_grey">(<?php echo $_smarty_tpl->tpl_vars['template_set']->value['version'];?>
)</span>
                                        <?php }?>
                                    </li>
                                    <li class="col3"><?php echo smarty_function_display_template_set_usage(array('set_id'=>$_smarty_tpl->tpl_vars['set_id']->value,'format'=>"dropdown"),$_smarty_tpl);?>
</li>
                                    <li class="col4">
                                        <?php if ($_smarty_tpl->tpl_vars['template_set']->value['is_complete'] == "yes") {?>
                                            <span class="template_set_marker template_set_complete"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_yes'], 'UTF-8');?>
</span>
                                        <?php } else { ?>
                                            <span class="template_set_marker template_set_incomplete"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_no'], 'UTF-8');?>
</span>
                                        <?php }?>
                                    </li>
                                    <li class="col5 check_area"><a
                                                href="template_sets/index.php?page=templates&set_id=<?php echo $_smarty_tpl->tpl_vars['set_id']->value;?>
"><?php echo count($_smarty_tpl->tpl_vars['template_set']->value['templates']);?>
</a>
                                    </li>
                                    <li class="col6 check_area"><a
                                                href="template_sets/index.php?page=resources&set_id=<?php echo $_smarty_tpl->tpl_vars['set_id']->value;?>
"><?php echo count($_smarty_tpl->tpl_vars['template_set']->value['resources']);?>
</a>
                                    </li>
                                    <li class="col7 check_area"><a
                                                href="template_sets/index.php?page=placeholders&set_id=<?php echo $_smarty_tpl->tpl_vars['set_id']->value;?>
"><?php echo count($_smarty_tpl->tpl_vars['template_set']->value['placeholders']);?>
</a>
                                    </li>
                                    <li class="col8 edit"><a
                                                href="template_sets/index.php?page=info&set_id=<?php echo $_smarty_tpl->tpl_vars['set_id']->value;?>
"></a></li>
                                    <li class="col9 colN<?php if (count($_smarty_tpl->tpl_vars['template_set']->value['usage'])) {?> info<?php } else { ?> del<?php }?>">
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </ul>
        </div>
        <div class="clear"></div>
    <?php }?>

    <p>
        <?php if (count($_smarty_tpl->tpl_vars['template_sets']->value) > 1) {?>
            <input type="submit" name="update_order" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_update_order'];?>
"/>
        <?php }?>
        <input type="button" id="create_new_template_set" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_create_new_template_set'];?>
"/>
    </p>

</form>

<div class="hidden" id="create_new_template_set_dialog">
    <div id="create_error" class="margin_bottom_large" style="display:none"></div>
    <table style="width: 100%">
        <tr>
            <td width="180" class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_template_set_name'];?>
</td>
            <td><input type="text" id="new_template_name" style="width: 100%;"/></td>
        </tr>
        <?php if (count($_smarty_tpl->tpl_vars['template_sets']->value) > 0) {?>
            <tr>
                <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_base_new_template_set_on'];?>
</td>
                <td>
                    <?php echo smarty_function_template_sets(array('name_id'=>"original_set_id",'only_return_complete'=>false,'is_base_on_dropdown'=>true),$_smarty_tpl);?>

                </td>
            </tr>
        <?php }?>
    </table>
</div>


<?php echo smarty_function_ft_include(array('file'=>'modules_footer.tpl'),$_smarty_tpl);?>

<?php }
}
