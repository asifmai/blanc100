<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:12:18
  from "/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b6a2e33ff9_59438271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5700a2a2d06c9b7104f68490d6d4e94611ff72d5' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/admin/forms/edit/tab_main.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b6a2e33ff9_59438271 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_clients_dropdown')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.clients_dropdown.php';
?>
  <div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_main_settings'], 'UTF-8');?>
</div>

  <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


  <form method="post" name="edit_form" id="edit_form" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" onsubmit="return rsv.validate(this, rules)">
    <input type="hidden" name="form_id" id="form_id" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
    <table class="list_table margin_bottom_large" width="100%" cellpadding="0" cellspacing="1">
    <tr>
      <td class="pad_left_small" width="200" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_status'];?>
</td>
      <td>
        <input type="radio" name="active" id="active1" value="yes" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['is_active'] == "yes") {?>checked<?php }?> />
          <label for="active1" class="light_green"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_online'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_accepting_submissions'];?>
</label><br />
        <input type="radio" name="active" id="active2" value="no" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['is_active'] == "no") {?>checked<?php }?> />
          <label for="active2" class="orange"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_offline'];?>
</label>
      </td>
    </tr>
    <tr>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_name'];?>
</td>
      <td><input type="text" name="form_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_info']->value['form_name'], ENT_QUOTES, 'UTF-8', true);?>
" style="width: 99%" /></td>
    </tr>
    <tr>
      <td valign="top" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_type'];?>
</td>
      <td>
        <select name="form_type" id="form_type">
          <option value="external" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['form_type'] == "external") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_external_your_own_form'];?>
</option>
          <option value="internal" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['form_type'] == "internal") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_internal'];?>
</option>
          <?php echo smarty_function_template_hook(array('location'=>"admin_edit_form_main_tab_form_type_dropdown"),$_smarty_tpl);?>

        </select>
      </td>
    </tr>
    </table>

    <div id="form_settings__external" class="form_type_specific_options" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['form_type'] != "external") {?>style="display:none"<?php }?>>
      <div class="subtitle underline margin_bottom_large margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_external_form_info'], 'UTF-8');?>
</div>

      <table class="list_table margin_bottom_large" width="100%" cellpadding="0" cellspacing="1">
      <tr>
        <td class="pad_left_small" width="200"><label for="submission_type"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_submission_type'];?>
</label></td>
        <td>
          <select name="submission_type" id="submission_type">
            <option value="direct" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['submission_type'] == "direct") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_direct'];?>
</option>
            <option value="code" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['submission_type'] == "code") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_code'];?>
 (API)</option>
          </select>
        </td>
      </tr>
      <tbody id="multi_page_form_row" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['submission_type'] == 'direct') {?>style="display:none"<?php }?>>
        <tr>
          <td class="pad_left_small"><label for="is_multi_page_form"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_is_multi_page_form_q'];?>
</label></td>
          <td>
            <input type="radio" class="is_multi_page_form" name="is_multi_page_form" id="impf1" value="yes"
              <?php if ($_smarty_tpl->tpl_vars['form_info']->value['is_multi_page_form'] == "yes") {?>checked<?php }?> />
              <label for="impf1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
            <input type="radio" class="is_multi_page_form" name="is_multi_page_form" id="impf2" value="no"
              <?php if ($_smarty_tpl->tpl_vars['form_info']->value['is_multi_page_form'] == "no") {?>checked<?php }?> />
              <label for="impf2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
          </td>
        </tr>
      </tbody>
      <tr>
        <td valign="top" class="pad_left_small">
          <span id="form_label_single" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['is_multi_page_form'] == "yes") {?>style="display:none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_url'];?>
</span>
          <span id="form_label_multiple" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['is_multi_page_form'] == "no") {?>style="display:none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_urls'];?>
</span>
        </td>
        <td>
          <div id="form_url_single" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['is_multi_page_form'] == "yes") {?>style="display:none"<?php }?>>
            <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td><input type="text" name="form_url" id="form_url" value="<?php echo $_smarty_tpl->tpl_vars['form_info']->value['form_url'];?>
" style="width: 98%" /></td>
              <td width="60"><input type="button" class="check_url" id="check_url__form_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['phrase_check_url'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
            </tr>
            </table>
          </div>
          <div id="form_url_multiple" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['is_multi_page_form'] == "no" || $_smarty_tpl->tpl_vars['form_info']->value['submission_type'] == "direct") {?>style="display:none"<?php }?>>
            <div class="sortable multi_page_form_list" id="<?php echo $_smarty_tpl->tpl_vars['sortable_id']->value;?>
">
              <ul class="header_row">
                <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_page'];?>
</li>
                <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_url'];?>
</li>
                <li class="col3"></li>
                <li class="col4 colN del"></li>
              </ul>
              <div class="clear"></div>
              <ul class="rows">
                <?php $_smarty_tpl->_assignInScope('previous_item', '');
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_info']->value['multi_page_form_urls'], 'i', false, NULL, 'row', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['total'];
?>
                  <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
                  <li class="sortable_row<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>">
                    <div class="row_content">
                      <div class="row_group<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['last'] : null)) {?> rowN<?php }?>">
                        <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" />
                        <ul>
                          <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</li>
                          <li class="col2"><input type="text" name="multi_page_urls[]" id="mp_url_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['form_url'], ENT_QUOTES, 'UTF-8', true);?>
" /></li>
                          <li class="col3"><input type="button" class="check_url" id="check_url__mp_url_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['phrase_check_url'], ENT_QUOTES, 'UTF-8', true);?>
" /></li>
                          <li class="col4 colN del"></li>
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

                <?php if (count($_smarty_tpl->tpl_vars['form_info']->value['multi_page_form_urls']) == 0) {?>
                  <li class="sortable_row">
                    <div class="row_content">
                      <div class="row_group rowN">
                        <input type="hidden" class="sr_order" value="1" />
                        <ul>
                          <li class="col1 sort_col">1</li>
                          <li class="col2"><input type="text" name="multi_page_urls[]" id="mp_url_0" /></li>
                          <li class="col3"><input type="button" class="check_url" id="check_url__mp_url_0" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['phrase_check_url'], ENT_QUOTES, 'UTF-8', true);?>
" /></li>
                          <li class="col4 colN del"></li>
                        </ul>
                        <div class="clear"></div>
                      </div>
                    </div>
                    <div class="clear"></div>
                  </li>
                <?php }?>
              </ul>
            </div>
            <div class="clear"></div>
            <div>
              <a href="#" onclick="return mf_ns.add_multi_page_form_page()"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_row'];?>
</a>
            </div>
          </div>
        </td>
      </tr>
      <tbody id="redirect_url_row" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['submission_type'] == "code") {?>style="display:none"<?php }?>>
        <tr>
          <td valign="top" width="200" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_redirect_url'];?>
</td>
          <td>
            <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td><input type="text" name="redirect_url" id="redirect_url" value="<?php echo $_smarty_tpl->tpl_vars['form_info']->value['redirect_url'];?>
" style="width: 98%" /></td>
              <td width="60"><input type="button" class="check_url" id="check_url__redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['phrase_check_url'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
            </tr>
            </table>
          </td>
        </tr>
      </tbody>
      </table>
    </div>

    <?php echo smarty_function_template_hook(array('location'=>"admin_edit_form_main_tab_after_main_settings"),$_smarty_tpl);?>


    <div class="subtitle underline margin_bottom_large margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_permissions_other_settings'], 'UTF-8');?>
</div>

    <table class="list_table margin_bottom_large" width="100%" cellpadding="0" cellspacing="1">
    <tr>
      <td class="pad_left_small" valign="top" width="200"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_access'];?>
</td>
      <td>
        <table cellspacing="1" cellpadding="0" >
        <tr>
          <td>
            <input type="radio" name="access_type" id="at1" value="admin" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['access_type'] == 'admin') {?>checked<?php }?> />
              <label for="at1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_admin_only'];?>
</label>
          </td>
        </tr>
        <tr>
          <td>
            <div style="float:right;margin-left: 20px">
              <input type="button" id="client_omit_list_button"
                value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_manage_client_omit_list'];
if ($_smarty_tpl->tpl_vars['form_info']->value['access_type'] == 'public') {?> (<?php echo $_smarty_tpl->tpl_vars['num_clients_on_omit_list']->value;?>
)<?php }?>"
                onclick="window.location='?page=public_form_omit_list&form_id=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
'"
                <?php if ($_smarty_tpl->tpl_vars['form_info']->value['access_type'] != 'public') {?>disabled<?php }?> /><br />
            </div>
            <input type="radio" name="access_type" id="at2" value="public" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['access_type'] == 'public') {?>checked<?php }?> />
              <label for="at2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_public'];?>
 <span class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_all_clients_have_access'];?>
</span></label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="access_type" id="at3" value="private" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['access_type'] == 'private') {?>checked<?php }?> />
              <label for="at3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_private'];?>
 <span class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_only_specific_clients_have_access'];?>
</span></label>
          </td>
        </tr>
        </table>

        <div id="custom_clients" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['access_type'] != 'private') {?>style="display:none"<?php }?> class="margin_top">
          <table cellpadding="0" cellspacing="0" class="subpanel">
          <tr>
            <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_available_clients'];?>
</td>
            <td></td>
            <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_selected_clients'];?>
</td>
          </tr>
          <tr>
            <td>
              <?php echo smarty_function_clients_dropdown(array('name_id'=>"available_client_ids[]",'multiple'=>"true",'multiple_action'=>"hide",'clients'=>$_smarty_tpl->tpl_vars['selected_client_ids']->value,'size'=>"4",'style'=>"width: 202px"),$_smarty_tpl);?>

            </td>
            <td align="center" valign="middle" width="100">
              <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add_uc_rightarrow'];?>
"
                onclick="ft.move_options(this.form['available_client_ids[]'], this.form['selected_client_ids[]']);" /><br />
              <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_remove_uc_leftarrow'];?>
"
                onclick="ft.move_options(this.form['selected_client_ids[]'], this.form['available_client_ids[]']);" />
            </td>
            <td>
              <?php echo smarty_function_clients_dropdown(array('name_id'=>"selected_client_ids[]",'multiple'=>"true",'multiple_action'=>"show",'clients'=>$_smarty_tpl->tpl_vars['selected_client_ids']->value,'size'=>"4",'style'=>"width: 202px"),$_smarty_tpl);?>

            </td>
          </tr>
          </table>
        </div>

      </td>
    </tr>
    <tr>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_delete_uploaded_fields_with_submission'];?>
</td>
      <td>
        <input type="radio" name="auto_delete_submission_files" id="auto_delete_submission_files1" value="yes" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['auto_delete_submission_files'] == "yes") {?>checked<?php }?> />
          <label for="auto_delete_submission_files1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
        <input type="radio" name="auto_delete_submission_files" id="auto_delete_submission_files2" value="no" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['auto_delete_submission_files'] == "no") {?>checked<?php }?> />
          <label for="auto_delete_submission_files2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
      </td>
    </tr>
    <tr>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_strip_tags_in_submissions'];?>
</td>
      <td>
        <input type="radio" name="submission_strip_tags" id="sst1" value="yes" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['submission_strip_tags'] == "yes") {?>checked<?php }?> />
          <label for="sst1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
        <input type="radio" name="submission_strip_tags" id="sst2" value="no" <?php if ($_smarty_tpl->tpl_vars['form_info']->value['submission_strip_tags'] == "no") {?>checked<?php }?> />
          <label for="sst2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
      </td>
    </tr>
    <tr>
      <td class="pad_left_small" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_edit_submission_label'];?>
</td>
      <td><input type="text" name="edit_submission_page_label" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_info']->value['edit_submission_page_label'], ENT_QUOTES, 'UTF-8', true);?>
"
        class="lang_placeholder_field lang_field_full" /></td>
    </tr>
    <tr>
      <td class="pad_left_small" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_submission_button'];?>
</td>
      <td>
        <input type="text" name="add_submission_button_label" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_info']->value['add_submission_button_label'], ENT_QUOTES, 'UTF-8', true);?>
"
          class="lang_placeholder_field lang_field_full" />
        <div class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_add_submission_button'];?>
</div>
      </td>
    </tr>
    </table>

    <p>
      <input type="submit" name="update_main" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
      <?php echo smarty_function_template_hook(array('location'=>"admin_edit_form_main_tab_button_row"),$_smarty_tpl);?>

    </p>

   </form>
<?php }
}
