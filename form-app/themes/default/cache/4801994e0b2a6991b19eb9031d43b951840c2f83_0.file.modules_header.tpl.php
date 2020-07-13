<?php
/* Smarty version 3.1.31, created on 2019-11-22 08:48:44
  from "/home/blanc100/public_html/form-app/themes/default/modules_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dd792dcda0d88_04064759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4801994e0b2a6991b19eb9031d43b951840c2f83' => 
    array (
      0 => '/home/blanc100/public_html/form-app/themes/default/modules_header.tpl',
      1 => 1541374537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd792dcda0d88_04064759 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_template_hook')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_css_files')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.css_files.php';
if (!is_callable('smarty_function_js_files')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.js_files.php';
if (!is_callable('smarty_function_ft_include')) require_once '/home/blanc100/public_html/form-app/global/smarty_plugins/function.ft_include.php';
?>
<!DOCTYPE html>
<html dir="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['special_text_direction'];?>
">
<head>
    <?php if (!$_smarty_tpl->tpl_vars['swatch']->value) {
$_smarty_tpl->_assignInScope('swatch', "green");
}?>
    <title><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/favicon.ico">
    <?php echo smarty_function_template_hook(array('location'=>"modules_head_top"),$_smarty_tpl);?>

    <?php echo '<script'; ?>
>
        //<![CDATA[
        var g = {
            root_url: "<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
",
            error_colours: ["ffbfbf", "ffb5b5"],
            notify_colours: ["c6e2ff", "97c7ff"],
            js_debug:       <?php echo $_smarty_tpl->tpl_vars['g_js_debug']->value;?>

            };
        //]]>
    <?php echo '</script'; ?>
>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/css/main.css?v=3_0_3">
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/css/styles.css?v=3_0_3">
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/css/swatch_<?php echo $_smarty_tpl->tpl_vars['swatch']->value;?>
.css?v=3_0_3">
    <link href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/css/smoothness/jquery-ui-1.8.6.custom.css" rel="stylesheet" type="text/css"/>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/scripts/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/general.js?v=3_0_3"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/rsv.js?v=3_0_3"><?php echo '</script'; ?>
>
    <?php echo smarty_function_css_files(array('files'=>$_smarty_tpl->tpl_vars['css_files']->value,'module_folder'=>$_smarty_tpl->tpl_vars['module_folder']->value,'root_url'=>$_smarty_tpl->tpl_vars['g_root_url']->value),$_smarty_tpl);?>

    <?php echo smarty_function_js_files(array('files'=>$_smarty_tpl->tpl_vars['js_files']->value,'module_folder'=>$_smarty_tpl->tpl_vars['module_folder']->value,'root_url'=>$_smarty_tpl->tpl_vars['g_root_url']->value),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->tpl_vars['head_string']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['head_js']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['head_css']->value;?>

    <?php echo smarty_function_template_hook(array('location'=>"modules_head_bottom"),$_smarty_tpl);?>

</head>
<body>
<div id="container">
    <div id="header">
        <?php if (!$_smarty_tpl->tpl_vars['hide_header_bar']->value) {?>
            <div style="float:right; display: flex">
                <img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/account_section_left_<?php echo $_smarty_tpl->tpl_vars['swatch']->value;?>
2x.png" border="0" width="8" height="25" />
                <div id="account_section">
                    <?php if ($_smarty_tpl->tpl_vars['is_logged_in']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['release_type'] == "alpha") {?>
                            <b><?php echo $_smarty_tpl->tpl_vars['settings']->value['program_version'];?>
-alpha-<?php echo $_smarty_tpl->tpl_vars['settings']->value['release_date'];?>
</b>
                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['release_type'] == "beta") {?>
                            <b><?php echo $_smarty_tpl->tpl_vars['settings']->value['program_version'];?>
-beta-<?php echo $_smarty_tpl->tpl_vars['settings']->value['release_date'];?>
</b>
                        <?php } else { ?>
                            <b><?php echo $_smarty_tpl->tpl_vars['settings']->value['program_version'];?>
</b>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['account']->value['account_type'] == "admin" && !$_smarty_tpl->tpl_vars['g_hide_upgrade_link']->value) {?>
                            <span class="delimiter">|</span>
                            <a href="#" onclick="return ft.check_updates()"
                               class="update_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
</a>
                        <?php }?>
                    <?php }?>
                </div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/account_section_right_<?php echo $_smarty_tpl->tpl_vars['swatch']->value;?>
2x.png" border="0" width="8" height="25" />
            </div>
        <?php }?>

        <span style="float:left; padding-top: 4px">
      <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['logo_link'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['settings']->value['logo_link'];?>
"><?php }?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/logo_<?php echo $_smarty_tpl->tpl_vars['swatch']->value;?>
2x.png" border="0" width="220" height="67"/>
                <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['logo_link'])) {?></a><?php }?>
    </span>
    </div>

    <div id="content">

        <table cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td width="180" valign="top">
                    <?php if (!$_smarty_tpl->tpl_vars['hide_nav_menu']->value) {?>
                        <div id="left_nav">
                            <div class="nav_heading"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_module_nav'];?>
</div>
                            <div id="module_nav">
                                <?php echo smarty_function_ft_include(array('file'=>"module_menu.tpl"),$_smarty_tpl);?>

                            </div>

                            <div id="nav_separator"></div>

                            <div class="nav_heading">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_main_nav'];?>

                            </div>
                            <div id="main_nav">
                                <?php echo smarty_function_ft_include(array('file'=>"menu.tpl"),$_smarty_tpl);?>

                            </div>
                        </div>
                    <?php }?>

                </td>
                <td valign="top">
<?php }
}
