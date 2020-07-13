<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:13:56
  from "/home/blanc100/public_html/form-app/modules/form_builder/templates/admin/tab_publish.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b704936e34_54138066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97e69633933869cbd8ed12d588b55554a19872f7' => 
    array (
      0 => '/home/blanc100/public_html/form-app/modules/form_builder/templates/admin/tab_publish.tpl',
      1 => 1541374538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b704936e34_54138066 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_display_view_name')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.display_view_name.php';
if (!is_callable('smarty_function_display_template_set_name')) require_once '/home/blanc100/public_html/form-app/modules/form_builder/smarty_plugins/function.display_template_set_name.php';
if (!is_callable('smarty_modifier_replace')) require_once '/home/blanc100/public_html/form-app/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/blanc100/public_html/form-app/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
  <div class="underline margin_top_large subtitle"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['phrase_published_forms'], 'UTF-8');?>
</div>

  <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


  <div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_publish_tab_intro'];?>

  </div>

  <?php if ($_smarty_tpl->tpl_vars['demo_mode']->value == "on") {?>
    <div class="error margin_bottom_large">
      <div style="padding: 6px">
        <?php echo $_smarty_tpl->tpl_vars['L']->value['notify_form_builder_demo_mode'];?>

      </div>
    </div>
  <?php }?>

  
  <input type="hidden" id="publish_tab_identifier" />

  <?php if ($_smarty_tpl->tpl_vars['form_info']->value['form_type'] != "form_builder") {?>

    <form action="?page=publish" method="post">
      <div class="notify margin_bottom_large">
        <div style="padding:6px">
          <div class="margin_bottom">
            <?php echo $_smarty_tpl->tpl_vars['text_non_form_builder_form']->value;?>

          </div>
          <input type="submit" name="set_as_form_builder" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_set_form_as_form_builder'];?>
" />
        </div>
      </div>
    </form>

  <?php } else { ?>

    <?php if (count($_smarty_tpl->tpl_vars['published_forms']->value['results']) == 0) {?>

      <div>
        <input type="button" id="publish_new_form" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_publish_this_form'];?>
" />
      </div>

    <?php } else { ?>

      <form action="edit.php?page=publish" method="post">
		    <div class="sortable form_builder_form_list margin_bottom_large" id="form_builder_form_list">
	        <input type="hidden" class="sortable__custom_delete_handler" value="fb_ns.delete_form_configuration" />
		      <ul class="header_row">
		        <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
		        <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_view'];?>
</li>
		        <li class="col3"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_template_set'];?>
</li>
		        <li class="col4"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_published'];?>
</li>
		        <li class="col5"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_online'];?>
</li>
		        <li class="col6"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_form_location'];?>
</li>
		        <li class="col7 edit"></li>
		        <li class="col8 colN del"></li>
		      </ul>
		      <div class="clear"></div>
		      <ul class="rows">
		        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['published_forms']->value['results'], 'info', false, NULL, 'row', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
?>
	          <?php $_smarty_tpl->_assignInScope('i', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
		        <li class="sortable_row">
		          <div class="row_content">
		            <div class="row_group rowN">
		              <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['published_form_id'];?>
" />
		              <input type="hidden" class="is_published" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['is_published'];?>
" />
		              <ul>
		                <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</li>
		                <li class="col2"><a href="?page=edit_view&view_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['view_id'];?>
"><?php echo smarty_function_display_view_name(array('view_id'=>$_smarty_tpl->tpl_vars['info']->value['view_id']),$_smarty_tpl);?>
</a></li>
		                <li class="col3"><a href="../../../modules/form_builder/template_sets/index.php?page=info&set_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['set_id'];?>
"><?php echo smarty_function_display_template_set_name(array('set_id'=>$_smarty_tpl->tpl_vars['info']->value['set_id']),$_smarty_tpl);?>
</a></li>
		                <li class="col4">
		                  <?php if ($_smarty_tpl->tpl_vars['info']->value['is_published'] == "yes") {?>
		                    <span class="green"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</span>
		                  <?php } else { ?>
		                    <span class="red"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</span>
		                  <?php }?>
		                </li>
		                <li class="col5">
		                  <?php if ($_smarty_tpl->tpl_vars['info']->value['is_published'] == "no") {?>
		                    <span class="light_grey">&#8212;</span>
		                  <?php } elseif ($_smarty_tpl->tpl_vars['info']->value['is_online'] == "yes") {?>
		                    <span class="green"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</span>
		                    <?php if (!is_null($_smarty_tpl->tpl_vars['info']->value['offline_date'])) {?>
		                      <?php $_smarty_tpl->_assignInScope('d', smarty_modifier_replace($_smarty_tpl->tpl_vars['info']->value['offline_date'],':',''));
?>
		                      <?php $_smarty_tpl->_assignInScope('d', smarty_modifier_replace($_smarty_tpl->tpl_vars['d']->value,' ',''));
?>
		                      <?php $_smarty_tpl->_assignInScope('d', smarty_modifier_replace($_smarty_tpl->tpl_vars['d']->value,'-',''));
?>
		                      <span class="publish_tab_offline_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['d']->value,"%b %e, %Y %l:%M:%S %p");?>
</span>
		                    <?php }?>
		                  <?php } else { ?>
		                    <span class="red"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</span>
		                  <?php }?>
		                </li>
		                <li class="col6">
	                    <?php if ($_smarty_tpl->tpl_vars['info']->value['is_published'] == "no") {?>
		                    <div class="empty light_grey">&#8212;</span>
		                  <?php } else { ?>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_open_form_in_dialog'];?>
" target="_blank" class="show_form" href="<?php echo $_smarty_tpl->tpl_vars['info']->value['folder_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['filename'];?>
"></a>
		                    <div class="published_form_url"><?php echo $_smarty_tpl->tpl_vars['info']->value['filename'];?>
</div>
		                  <?php }?>
		                </li>
		                <li class="col7 edit"></li>
		                <li class="col8 colN del"></li>
		              </ul>
		              <div class="clear"></div>
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

	      <div>
	        <?php if (count($_smarty_tpl->tpl_vars['published_forms']->value['results']) > 1) {?>
	          <input type="submit" name="update_order" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_update_order'];?>
" />
	        <?php }?>
	        <input type="button" id="publish_new_form" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_publish_at_new_location'];?>
" />
	      </div>

	      <div id="confirm_delete_form_configuration_not_published" style="display:none"><?php echo $_smarty_tpl->tpl_vars['L']->value['confirm_delete_form_configuration_not_published'];?>
</div>

	      <div id="confirm_delete_form_configuration_published" style="display:none">
	        <span class="popup_icon popup_type_warning"></span>
          <div class="margin_bottom_large"><?php echo $_smarty_tpl->tpl_vars['L']->value['confirm_delete_published_form'];?>
</div>
          <div>
            <input type="checkbox" checked="checked" id="delete_form_config" name="delete_form_config" />
              <label for="delete_form_config"><?php echo $_smarty_tpl->tpl_vars['L']->value['confirm_delete_published_form_config'];?>
</label>
          </div>
	      </div>
	    </form>

    <?php }?>

  <?php }
}
}
