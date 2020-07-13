<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:12:11
  from "/home/blanc100/public_html/form-app/themes/default/admin/clients/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b69b6f65b9_43382376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18810f8a4d3106459610b1ee01f1f8c67351c6b3' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/clients/index.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b69b6f65b9_43382376 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_modifier_custom_format_date')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/modifier.custom_format_date.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_accounts.gif" width="34" height="34" /></td>
    <td class="title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_clients'];?>
</td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


  <?php echo smarty_function_template_hook(array('location'=>"admin_list_clients_top"),$_smarty_tpl);?>


  <?php if ($_smarty_tpl->tpl_vars['num_clients']->value == 0) {?>

    <div><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_no_clients'];?>
</div>

  <?php } else { ?>

    <div id="search_form" class=" margin_bottom_large">
      <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
        <table cellspacing="2" cellpadding="0" id="search_form_table">
        <tr>
          <td class="blue" width="70"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_search'];?>
</td>
          <td>
            <select name="status">
              <option value="" <?php if ($_smarty_tpl->tpl_vars['search_criteria']->value['status'] == '') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_all_statuses'];?>
</option>
              <option value="active" <?php if ($_smarty_tpl->tpl_vars['search_criteria']->value['status'] == "active") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_active'];?>
</option>
              <option value="pending" <?php if ($_smarty_tpl->tpl_vars['search_criteria']->value['status'] == "pending") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_pending'];?>
</option>
              <option value="disabled" <?php if ($_smarty_tpl->tpl_vars['search_criteria']->value['status'] == "disabled") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_disabled'];?>
</option>
            </select>
          </td>
          <td>
            <input type="text" size="20" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_criteria']->value['keyword'], ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="submit" name="search_forms" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_search'];?>
" />
            <input type="button" name="reset" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?reset=1'"
              <?php if (count($_smarty_tpl->tpl_vars['clients']->value) < $_smarty_tpl->tpl_vars['num_clients']->value) {?>
                value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_show_all'];?>
 (<?php echo $_smarty_tpl->tpl_vars['num_clients']->value;?>
)"  class="bold"
              <?php } else { ?>
                value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_show_all'];?>
" class="light_grey" disabled
              <?php }?> />
          </td>
        </tr>
        </table>
      </form>
    </div>

    <?php if (count($_smarty_tpl->tpl_vars['clients']->value) == 0) {?>

      <div class="notify yellow_bg">
        <div style="padding: 8px">
          <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_no_clients_found'];?>

        </div>
      </div>

    <?php } else { ?>

      <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>


      <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
      <?php $_smarty_tpl->_assignInScope('table_group_id', "1");
?>

      
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client', false, NULL, 'row', array (
  'index' => true,
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']++;
?>

        <?php $_smarty_tpl->_assignInScope('index', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index'] : null));
?>
        <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
        <?php $_smarty_tpl->_assignInScope('client_id', $_smarty_tpl->tpl_vars['clients']->value[$_smarty_tpl->tpl_vars['index']->value]['account_id']);
?>
        <?php $_smarty_tpl->_assignInScope('client_info', $_smarty_tpl->tpl_vars['clients']->value[$_smarty_tpl->tpl_vars['index']->value]);
?>

        
        <?php if ($_smarty_tpl->tpl_vars['count']->value == 1 || $_smarty_tpl->tpl_vars['count']->value != 1 && (($_smarty_tpl->tpl_vars['count']->value-1)%$_smarty_tpl->tpl_vars['settings']->value['num_clients_per_page'] == 0)) {?>

          <?php if ($_smarty_tpl->tpl_vars['table_group_id']->value == "1") {?>
            <?php $_smarty_tpl->_assignInScope('style', "display: block");
?>
          <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('style', "display: none");
?>
          <?php }?>

          <div id="page_<?php echo $_smarty_tpl->tpl_vars['table_group_id']->value;?>
" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">

            <table class="list_table" width="100%" cellpadding="0" cellspacing="1">
            <tr>
              <?php $_smarty_tpl->_assignInScope('up_down', '');
?>
              <?php if ($_smarty_tpl->tpl_vars['order']->value == "client_id-DESC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=client_id-ASC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_down.gif\" />");
?>
              <?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "client_id-ASC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=client_id-DESC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_up.gif\" />");
?>
              <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=client_id-DESC");
?>
              <?php }?>
              <th width="30" class="sortable_col<?php if ($_smarty_tpl->tpl_vars['up_down']->value) {?> over<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['sort_order']->value;?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_id'], 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['up_down']->value;?>
</a>
              </th>

              <?php $_smarty_tpl->_assignInScope('up_down', '');
?>
              <?php if ($_smarty_tpl->tpl_vars['order']->value == "first_name-DESC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=first_name-ASC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_down.gif\" />");
?>
              <?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "first_name-ASC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=first_name-DESC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_up.gif\" />");
?>
              <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=first_name-DESC");
?>
              <?php }?>
              <th class="sortable_col<?php if ($_smarty_tpl->tpl_vars['up_down']->value) {?> over<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['sort_order']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['up_down']->value;?>
</a>
              </th>

              <?php $_smarty_tpl->_assignInScope('up_down', '');
?>
              <?php if ($_smarty_tpl->tpl_vars['order']->value == "last_name-DESC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=last_name-ASC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_down.gif\" />");
?>
              <?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "last_name-ASC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=last_name-DESC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_up.gif\" />");
?>
              <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=last_name-DESC");
?>
              <?php }?>
              <th class="sortable_col<?php if ($_smarty_tpl->tpl_vars['up_down']->value) {?> over<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['sort_order']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['up_down']->value;?>
</a>
              </th>

              <?php $_smarty_tpl->_assignInScope('up_down', '');
?>
              <?php if ($_smarty_tpl->tpl_vars['order']->value == "email-DESC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=email-ASC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_down.gif\" />");
?>
              <?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "email-ASC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=email-DESC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_up.gif\" />");
?>
              <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=email-DESC");
?>
              <?php }?>
              <th class="sortable_col<?php if ($_smarty_tpl->tpl_vars['up_down']->value) {?> over<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['sort_order']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email'];?>
 <?php echo $_smarty_tpl->tpl_vars['up_down']->value;?>
</a>
              </td>

              <?php $_smarty_tpl->_assignInScope('up_down', '');
?>
              <?php if ($_smarty_tpl->tpl_vars['order']->value == "status-DESC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=status-ASC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_down.gif\" />");
?>
              <?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "status-ASC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=status-DESC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_up.gif\" />");
?>
              <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=status-DESC");
?>
              <?php }?>
              <th width="70" class="sortable_col<?php if ($_smarty_tpl->tpl_vars['up_down']->value) {?> over<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['sort_order']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_status'];?>
 <?php echo $_smarty_tpl->tpl_vars['up_down']->value;?>
</a>
              </th>

              <?php $_smarty_tpl->_assignInScope('up_down', '');
?>
              <?php if ($_smarty_tpl->tpl_vars['order']->value == "last_logged_in-DESC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=last_logged_in-ASC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_down.gif\" />");
?>
              <?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "last_logged_in-ASC") {?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=last_logged_in-DESC");
?>
                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_up.gif\" />");
?>
              <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('sort_order', "order=last_logged_in-DESC");
?>
              <?php }?>
              <th class="sortable_col<?php if ($_smarty_tpl->tpl_vars['up_down']->value) {?> over<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['sort_order']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_last_logged_in'];?>
 <?php echo $_smarty_tpl->tpl_vars['up_down']->value;?>
</a>
              </th>
              <th width="70"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_login'], 'UTF-8');?>
</th>
              <th class="edit"></th>
              <th class="del"></th>
            </tr>

          <?php }?>

          <tr>
            <td align="center" class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
</td>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['client_info']->value['first_name'];?>
</td>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['client_info']->value['last_name'];?>
</td>
            <td class="pad_left_small"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['client_info']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['client_info']->value['email'];?>
</a></td>
            <td align="center">
              <?php if ($_smarty_tpl->tpl_vars['client_info']->value['account_status'] == "active") {?>
                <span class="light_green"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_active'];?>
</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['client_info']->value['account_status'] == "disabled") {?>
                <span style="color: red"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_disabled'];?>
</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['client_info']->value['account_status'] == "pending") {?>
                <span style="color: orange"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_pending'];?>
</span>
              <?php }?>
            </td>
            <td class="pad_left_small">
              <?php if ($_smarty_tpl->tpl_vars['client_info']->value['last_logged_in'] != '') {?>
               <?php echo smarty_modifier_custom_format_date($_smarty_tpl->tpl_vars['client_info']->value['last_logged_in'],$_smarty_tpl->tpl_vars['account']->value['timezone_offset'],$_smarty_tpl->tpl_vars['account']->value['date_format']);?>

              <?php } else { ?>
                <span class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_never'];?>
</span>
              <?php }?>
            </td>
            <td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?login=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_login'], 'UTF-8');?>
</a></td>
            <td class="edit"><a href="edit.php?client_id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
"> </a></td>
            <td class="del"><a href="#" onclick="return page_ns.delete_client(<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
)"></a></td>
          </tr>

        <?php if ($_smarty_tpl->tpl_vars['count']->value != 1 && ($_smarty_tpl->tpl_vars['count']->value%$_smarty_tpl->tpl_vars['settings']->value['num_clients_per_page']) == 0) {?>
          </table></div>
          <?php $_smarty_tpl->_assignInScope('table_group_id', $_smarty_tpl->tpl_vars['table_group_id']->value+1);
?>
        <?php }?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


      
      <?php if ((count($_smarty_tpl->tpl_vars['clients']->value)%$_smarty_tpl->tpl_vars['settings']->value['num_clients_per_page']) != 0) {?>
        </table></div>
      <?php }?>

    <?php }?>
    </form>

  <?php }?>

  <?php echo smarty_function_template_hook(array('location'=>"admin_list_clients_bottom"),$_smarty_tpl);?>


  <form method="post" action="add.php">
    <p>
      <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_client'];?>
" />
    </p>
  </form>

<?php echo smarty_function_ft_include(array('file'=>"footer.tpl"),$_smarty_tpl);?>

<?php }
}
