<?php
/* Smarty version 3.1.31, created on 2019-04-05 21:55:46
  from "/home/blanc100/public_html/form-app/install/templates/step6.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b2c2833ae6_31140171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '907e7669272dfc25d8696e6687b92abab9edd931' => 
    array (
      0 => '/home/blanc100/public_html/form-app/install/templates/step6.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../install/templates/install_header.tpl' => 1,
    'file:../../install/templates/install_footer.tpl' => 1,
  ),
),false)) {
function content_5ca7b2c2833ae6_31140171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../install/templates/install_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_clean_up'];?>
</h2>

<p class="notify">
	<?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_ft_installed'];?>

</p>

<form action="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
" method="post" class="margin_bottom_large">
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_log_in_to_ft'];?>
" />
</form>

<div class="divider"></div>

<p><b><?php echo ucwords($_smarty_tpl->tpl_vars['LANG']->value['phrase_getting_started']);?>
</b></p>
<ul>
	<li><a href="https://docs.formtools.org/tutorials/adding_first_form/"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_tutorial_adding_first_form'];?>
</a></li>
	<li><a href="https://docs.formtools.org/"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_review_user_doc'];?>
</a></li>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:../../install/templates/install_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
