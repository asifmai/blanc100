<?php
/* Smarty version 3.1.31, created on 2019-04-05 21:55:40
  from "/home/blanc100/public_html/form-app/install/templates/install_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ca7b2bc0c5839_32420851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52184733b44f9a22a8ffbf3108dc405252208d9b' => 
    array (
      0 => '/home/blanc100/public_html/form-app/install/templates/install_header.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7b2bc0c5839_32420851 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html dir="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['special_text_direction'];?>
">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_ft_installation'];?>
</title>
    <?php echo '<script'; ?>
>
        //<![CDATA[
        var g = {};
        g.root_url = "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['g_root_url']->value)===null||$tmp==='' ? '' : $tmp);?>
";
        g.error_colours = ["ffbfbf", "ffeded"];
        g.notify_colours = ["c6e2ff", "f2f8ff"];
        //]]>
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../global/scripts/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../themes/default/scripts/jquery-ui-1.8.6.custom.min.js"><?php echo '</script'; ?>
>
    <link href="../themes/default/css/smoothness/jquery-ui-1.8.6.custom.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="files/main.css">
    <?php echo '<script'; ?>
 src="../global/scripts/general.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../global/scripts/rsv.js"><?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['head_js']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['head_string']->value;?>

</head>
<body>
<div id="container">
    <div id="header">
        <div id="version-block">
            <img src="../themes/default/images/account_section_left_green2x.png" border="0" width="8" height="25"/>
            <div id="account_section"><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</div>
            <img src="../themes/default/images/account_section_right_green2x.png" border="0" width="8" height="25"/>
        </div>
        <span style="float:left; padding-top: 4px">
            <a href="http://www.formtools.org" class="no_border">
                <img src="../themes/default/images/logo_green2x.png" border="0" width="220" height="67" />
            </a>
        </span>
    </div>
    <div id="content">
        <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_installation'];?>
</h1>
        <div id="nav_items">
            <div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>nav_current<?php } else { ?>nav_visited<?php }?>">1 <span
                        class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_welcome'];?>
</div>
            <div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 2) {?>nav_current<?php } elseif ($_smarty_tpl->tpl_vars['step']->value < 2) {?>nav_remaining<?php } else { ?>nav_visited<?php }?>">
                2 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_system_check'];?>

            </div>
            <div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 3) {?>nav_current<?php } elseif ($_smarty_tpl->tpl_vars['step']->value < 3) {?>nav_remaining<?php } else { ?>nav_visited<?php }?>">
                3 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_database_tables'];?>

            </div>
            <div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 4) {?>nav_current<?php } elseif ($_smarty_tpl->tpl_vars['step']->value < 4) {?>nav_remaining<?php } else { ?>nav_visited<?php }?>">
                4 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_config_file'];?>

            </div>
            <div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 5) {?>nav_current<?php } elseif ($_smarty_tpl->tpl_vars['step']->value < 5) {?>nav_remaining<?php } else { ?>nav_visited<?php }?>">
                5 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_admin_account'];?>

            </div>
            <div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 6) {?>nav_current<?php } elseif ($_smarty_tpl->tpl_vars['step']->value < 6) {?>nav_remaining<?php } else { ?>nav_visited<?php }?>">
                6 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_clean_up'];?>

            </div>
        </div>
        <div id="main">
<?php }
}
