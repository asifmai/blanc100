<?php
/* Smarty version 3.1.31, created on 2019-04-05 22:00:07
  from "/home/blanc100/public_html/form-app/themes/default/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b3c724e150_51946498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e9ddcb5284e0535ae7f8dbf31f4104c9537482b' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/error.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b3c724e150_51946498 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
?>

<?php echo smarty_function_ft_include(array('file'=>"header.tpl"),$_smarty_tpl);?>


  <?php if (isset($_smarty_tpl->tpl_vars['context']->value) && $_smarty_tpl->tpl_vars['context']->value == "error_page") {?>

    <?php if ($_smarty_tpl->tpl_vars['message_type']->value == "error") {?>
      <div class="error" style="padding: 8px">
        <span class="bold"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_error_c'];?>
</span>
    <?php } else { ?>
      <div class="notify" style="padding:8px">
    <?php }?>

      <div style="padding-top: 10px">
        <?php echo nl2br($_smarty_tpl->tpl_vars['message']->value);?>

      </div>

      <?php if ($_smarty_tpl->tpl_vars['g_debug']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['error_debug']->value == '') {?>
          <?php $_smarty_tpl->_assignInScope('error_debug', "No further help available.");
?>
        <?php }?>

        <p>Debug:</p>
        <p><?php echo $_smarty_tpl->tpl_vars['error_debug']->value;?>
</p>
      <?php }?>
    </div>

  <?php } else { ?>

    <div class="title underline">
      <?php if ($_smarty_tpl->tpl_vars['message_type']->value == "error") {?>
        <span class="red bold">
          <?php if (isset($_smarty_tpl->tpl_vars['title']->value) && !empty($_smarty_tpl->tpl_vars['title']->value)) {?>
            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['title']->value, 'UTF-8');?>

          <?php } else { ?>
            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_error'], 'UTF-8');?>

          <?php }?>
        </span>
      <?php } else { ?>
        <span class="blue bold">
          <?php if (isset($_smarty_tpl->tpl_vars['title']->value) && !empty($_smarty_tpl->tpl_vars['title']->value)) {?>
            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['title']->value, 'UTF-8');?>

          <?php } else { ?>
            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_notification'], 'UTF-8');?>

          <?php }?>
        </span>
      <?php }?>
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
      <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['error_code']->value)) {?>
      <p>
        <b><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_type_c'];?>

          <?php if (!empty($_smarty_tpl->tpl_vars['error_type']->value) && $_smarty_tpl->tpl_vars['error_type']->value == "system") {?>
            <span class="red"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_system'];?>
</span>
          <?php } else { ?>
            <span class="green"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_user'];?>
</span>
          <?php }?><br />
        <b><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_code_c'];?>
 #<?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
</b> &#8212;
        <a href="https://docs.formtools.org/api/v2/error_codes/#<?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
" target="_blank" /><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_error_learn_more'];?>
</a>
      </p>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['error_codes']->value)) {?>
      <p>
        <div><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_errors_learn_more'];?>
</div>

        <b><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_codes_c'];?>
</b>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error_codes']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
          <a href="https://docs.formtools.org/api/index.php?page=error_codes#<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" target="_blank" /><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

      </p>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['debugging']->value)) {?>
      <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_debugging_c'];?>
</h4>
      <p>
        <?php echo $_smarty_tpl->tpl_vars['debugging']->value;?>

      </p>
    <?php }?>
  <?php }?>

  <noscript>
    <br />
    <div class="error" style="padding:8px;">
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_js_required'];?>

    </div>
  </noscript>

<?php echo smarty_function_ft_include(array('file'=>"footer.tpl"),$_smarty_tpl);?>

<?php }
}
