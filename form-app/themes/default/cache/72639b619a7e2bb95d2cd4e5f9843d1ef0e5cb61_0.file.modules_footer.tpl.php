<?php
/* Smarty version 3.1.31, created on 2019-11-22 08:48:44
  from "/home/blanc100/public_html/form-app/themes/default/modules_footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dd792dce19238_85523379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72639b619a7e2bb95d2cd4e5f9843d1ef0e5cb61' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/modules_footer.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd792dce19238_85523379 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.show_page_load_time.php';
?>

    </td>
  </tr>
  </table>

</div>


<?php if ($_smarty_tpl->tpl_vars['footer_text']->value != '' || $_smarty_tpl->tpl_vars['g_enable_benchmarking']->value) {?>
  <div class="footer">
    <?php echo $_smarty_tpl->tpl_vars['footer_text']->value;?>

    <?php echo smarty_function_show_page_load_time(array(),$_smarty_tpl);?>

  </div>
<?php }?>

</body>
</html>
<?php }
}
