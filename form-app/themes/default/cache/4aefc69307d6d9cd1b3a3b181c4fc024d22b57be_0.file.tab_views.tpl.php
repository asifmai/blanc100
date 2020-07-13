<?php
/* Smarty version 3.1.31, created on 2019-04-10 10:14:03
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_views.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5cada5cbe4bc68_04595261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aefc69307d6d9cd1b3a3b181c4fc024d22b57be' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_views.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cada5cbe4bc68_04595261 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_clients_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.clients_dropdown.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_views_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.views_dropdown.php';
?>
  <div class="subtitle underline margin_top_large">
    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_views'], 'UTF-8');?>

  </div>

  <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


  <div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_view_tab_summary'];?>

  </div>

  <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" id="views_form">
    <input type="hidden" name="page" value="views" />
    <input type="hidden" id="form_id" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />

    <?php if (count($_smarty_tpl->tpl_vars['grouped_views']->value) == 0) {?>
      <div class="error yellow_bg" class="margin_bottom_large">
        <div style="padding:8px">
          <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notify_no_views_defined'];?>

        </div>
      </div>
      <div class="margin_top_large">
        <input type="submit" name="recreate_initial_view" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_default_view'];?>
" />
      </div>
    <?php } else { ?>
      <div class="sortable_groups" id="<?php echo $_smarty_tpl->tpl_vars['sortable_id']->value;?>
">
        <input type="hidden" class="sortable__custom_delete_handler" value="view_ns.delete_view" />

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_views']->value, 'curr_group_info', false, NULL, 'group', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_group_info']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('group_info', $_smarty_tpl->tpl_vars['curr_group_info']->value['group']);
?>
        <?php $_smarty_tpl->_assignInScope('views', $_smarty_tpl->tpl_vars['curr_group_info']->value['views']);
?>

        <div class="sortable_group">
          <div class="sortable_group_header">
            <div class="sort"></div>
            <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_group'];?>
</label>
            <input type="text" name="group_name_<?php echo $_smarty_tpl->tpl_vars['group_info']->value['group_id'];?>
" class="group_name" value="<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['group_info']->value['group_name'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>" />
            <div class="delete_group"></div>
            <input type="hidden" class="group_order" value="<?php echo $_smarty_tpl->tpl_vars['group_info']->value['group_id'];?>
" />
            <div class="clear"></div>
          </div>

          <div class="sortable groupable view_list">
            <ul class="header_row">
              <li class="col0"> </li>
              <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
              <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_id'];?>
</li>
              <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_name'];?>
</li>
              <li class="col4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_who_can_access'];?>
</li>
              <li class="col5"><div title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_columns_sp'];?>
"></div></li>
              <li class="col6"><div title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_fields_sp'];?>
"></div></li>
              <li class="col7"><div title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_tabs_sp'];?>
"></div></li>
              <li class="col8"><div title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_filters_sp'];?>
"></div></li>
              <li class="col9 edit"></li>
              <li class="col10 colN del"></li>
            </ul>
            <div class="clear"></div>
            <ul class="rows connected_sortable">
              <li class="sortable_row empty_group<?php if (count($_smarty_tpl->tpl_vars['views']->value) != 0) {?> hidden<?php }?>"><div class="clear"></div></li>

            <?php $_smarty_tpl->_assignInScope('previous_item', '');
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'view', false, 'k', 'row', array (
  'index' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['view']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
?>

              <?php $_smarty_tpl->_assignInScope('index', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index'] : null));
?>
              <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
              <?php $_smarty_tpl->_assignInScope('view_id', $_smarty_tpl->tpl_vars['view']->value['view_id']);
?>

              <?php if ($_smarty_tpl->tpl_vars['view']->value['is_new_sort_group'] == "yes") {?>
                <?php if ($_smarty_tpl->tpl_vars['previous_item']->value != '') {?>
                  </div>
                  <div class="clear"></div>
                </li>
                <?php }?>
                <li class="sortable_row">
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?>
                    <?php $_smarty_tpl->_assignInScope('next_item_is_new_sort_group', "yes");
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('next_item_is_new_sort_group', $_smarty_tpl->tpl_vars['views']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null)]['is_new_sort_group']);
?>
                <?php }?>
                <div class="row_content<?php if ($_smarty_tpl->tpl_vars['next_item_is_new_sort_group']->value == 'no') {?> grouped_row<?php }?>">
              <?php }?>

              <?php $_smarty_tpl->_assignInScope('previous_item', $_smarty_tpl->tpl_vars['view']->value);
?>

                <div class="row_group<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>">
                  <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['view']->value['view_id'];?>
" />
                  <ul>
                    <li class="col0"></li>
                    <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</li>
                    <li class="col2"><?php echo $_smarty_tpl->tpl_vars['view']->value['view_id'];?>
</li>
                    <li class="col3"><?php echo $_smarty_tpl->tpl_vars['view']->value['view_name'];?>
</li>
                    <li class="col4">
                      <?php if ($_smarty_tpl->tpl_vars['view']->value['access_type'] == 'admin') {?>
                        <span class="pad_left_small medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_admin_only'];?>
</span>
                      <?php } elseif ($_smarty_tpl->tpl_vars['view']->value['access_type'] == 'public') {?>
                        <?php if (count($_smarty_tpl->tpl_vars['view']->value['client_omit_list']) == 0) {?>
                          <span class="pad_left_small blue"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_all_clients'];?>
</span>
                        <?php } else { ?>
                          <?php echo smarty_function_clients_dropdown(array('name_id'=>'','only_show_clients'=>$_smarty_tpl->tpl_vars['view']->value['client_omit_list'],'include_blank_option'=>true,'blank_option'=>$_smarty_tpl->tpl_vars['LANG']->value['phrase_all_clients_except_c']),$_smarty_tpl);?>

                        <?php }?>
                      <?php } elseif ($_smarty_tpl->tpl_vars['view']->value['access_type'] == 'hidden') {?>
                        <span class="pad_left_small light_grey italic"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_none'];?>
 - <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_hidden'];?>
</span>
                      <?php } elseif (count($_smarty_tpl->tpl_vars['view']->value['client_info']) > 0) {?>
                        <?php if (count($_smarty_tpl->tpl_vars['view']->value['client_info']) == 1) {?>
                          <?php echo $_smarty_tpl->tpl_vars['view']->value['client_info'][0]['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['view']->value['client_info'][0]['last_name'];?>

                        <?php } else { ?>
                          <select>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view']->value['client_info'], 'user', false, NULL, 'user_row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                              <option><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                          </select>
                        <?php }?>
                      <?php } else { ?>
                        <span class="pad_left_small light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_no_clients'];?>
</span>
                      <?php }?>
                    </li>
                    <li class="col5"><a href="?page=edit_view&view_id=<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
&edit_view_tab=2" title="<?php echo count($_smarty_tpl->tpl_vars['view']->value['columns']);?>
 <?php echo mb_strtolower($_smarty_tpl->tpl_vars['LANG']->value['word_columns_sp'], 'UTF-8');?>
"><?php echo count($_smarty_tpl->tpl_vars['view']->value['columns']);?>
</a></li>
                    <li class="col6"><a href="?page=edit_view&view_id=<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
&edit_view_tab=3" title="<?php echo count($_smarty_tpl->tpl_vars['view']->value['fields']);?>
 <?php echo mb_strtolower($_smarty_tpl->tpl_vars['LANG']->value['word_fields_sp'], 'UTF-8');?>
"><?php echo count($_smarty_tpl->tpl_vars['view']->value['fields']);?>
</a></li>
                    <li class="col7"><a href="?page=edit_view&view_id=<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
&edit_view_tab=4" title="<?php echo count($_smarty_tpl->tpl_vars['view']->value['tabs']);?>
 <?php echo mb_strtolower($_smarty_tpl->tpl_vars['LANG']->value['word_tabs_sp'], 'UTF-8');?>
"><?php echo count($_smarty_tpl->tpl_vars['view']->value['tabs']);?>
</a></li>
                    <li class="col8"><a href="?page=edit_view&view_id=<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
&edit_view_tab=5" title="<?php echo count($_smarty_tpl->tpl_vars['view']->value['filters']);?>
 <?php echo mb_strtolower($_smarty_tpl->tpl_vars['LANG']->value['word_filters_sp'], 'UTF-8');?>
"><?php echo count($_smarty_tpl->tpl_vars['view']->value['filters']);?>
</a></li>
                    <li class="col9 edit"><a href="?page=edit_view&view_id=<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
"></a></li>
                    <li class="col10 colN del"> </li>
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
          <a href="#" class="add_field_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_view_rightarrow'];?>
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

    <div class="margin_bottom_large">
      <a href="#" class="add_group_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_new_group_rightarrow'];?>
</a>
    </div>

    <p>
      <input type="submit" name="update_views" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
      <?php echo smarty_function_template_hook(array('location'=>"admin_edit_form_views_tab_button_row"),$_smarty_tpl);?>

    </p>

    <?php }?>
  </form>

  <div id="new_view_dialog" class="ft_dialog hidden">
    <table>
    <tr>
      <td width="140"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_name'];?>
</td>
      <td>
        <input type="text" id="new_view_name" />
      </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['num_views']->value > 0) {?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_base_view_on'];?>
</td>
        <td>
          <?php echo smarty_function_views_dropdown(array('name_id'=>"create_view_from_view_id",'show_empty_label'=>false,'form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'create_view_dropdown'=>true),$_smarty_tpl);?>

        </td>
      </tr>
    <?php }?>
    </table>
  </div>

  <!-- for the add group functionality -->
  <input type="hidden" class="sortable__new_group_name" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_group'];?>
" />
  <input type="hidden" class="sortable__class" value="view_list" />
  <div id="sortable__new_group_header" class="hidden">
    <ul class="header_row">
      <li class="col0"> </li>
      <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
      <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_id'];?>
</li>
      <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_name'];?>
</li>
      <li class="col4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_who_can_access'];?>
</li>
      <li class="col5"><div title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_columns_sp'];?>
"></div></li>
      <li class="col6"><div title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_fields_sp'];?>
"></div></li>
      <li class="col7"><div title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_tabs_sp'];?>
"></div></li>
      <li class="col8"><div title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_filters_sp'];?>
"></div></li>
      <li class="col9 edit"></li>
      <li class="col10 colN del"></li>
    </ul>
  </div>
  <div id="sortable__new_group_footer" class="hidden">
    <div class="sortable_group_footer">
      <a href="#" class="add_field_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_view_rightarrow'];?>
</a>
    </div>
  </div>

  <div class="hidden add_group_popup" id="add_group_popup">
    <input type="hidden" class="add_group_popup_title" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_new_view_group'];?>
" />
    <input type="hidden" class="sortable__add_group_handler" value="view_ns.create_new_group" />
    <div class="add_field_error hidden error"></div>
    <table cellspacing="1" cellpadding="3" width="100%">
    <tr>
      <td width="140"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_group_name'];?>
</td>
      <td><input type="text" class="new_group_name" /></td>
    </tr>
    </table>
  </div>
<?php }
}
