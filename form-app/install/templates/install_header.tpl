<!DOCTYPE html>
<html dir="{$LANG.special_text_direction}">
<head>
    <title>{$LANG.phrase_ft_installation}</title>
    <script>
        //<![CDATA[
        var g = {literal}{}{/literal};
        g.root_url = "{$g_root_url|default:""}";
        g.error_colours = ["ffbfbf", "ffeded"];
        g.notify_colours = ["c6e2ff", "f2f8ff"];
        //]]>
    </script>
    <script src="../global/scripts/jquery.js"></script>
    <script src="../themes/default/scripts/jquery-ui-1.8.6.custom.min.js"></script>
    <link href="../themes/default/css/smoothness/jquery-ui-1.8.6.custom.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="files/main.css">
    <script src="../global/scripts/general.js"></script>
    <script src="../global/scripts/rsv.js"></script>
    {$head_js}
    {$head_string}
</head>
<body>
<div id="container">
    <div id="header">
        <div id="version-block">
            <img src="../themes/default/images/account_section_left_green2x.png" border="0" width="8" height="25"/>
            <div id="account_section">{$version}</div>
            <img src="../themes/default/images/account_section_right_green2x.png" border="0" width="8" height="25"/>
        </div>
        <span style="float:left; padding-top: 4px">
            <a href="http://www.formtools.org" class="no_border">
                <img src="../themes/default/images/logo_green2x.png" border="0" width="220" height="67" />
            </a>
        </span>
    </div>
    <div id="content">
        <h1>{$LANG.word_installation}</h1>
        <div id="nav_items">
            <div class="{if $step == 1}nav_current{else}nav_visited{/if}">1 <span
                        class="delim">-</span> {$LANG.word_welcome}</div>
            <div class="{if $step == 2}nav_current{elseif $step < 2}nav_remaining{else}nav_visited{/if}">
                2 <span class="delim">-</span> {$LANG.phrase_system_check}
            </div>
            <div class="{if $step == 3}nav_current{elseif $step < 3}nav_remaining{else}nav_visited{/if}">
                3 <span class="delim">-</span> {$LANG.phrase_create_database_tables}
            </div>
            <div class="{if $step == 4}nav_current{elseif $step < 4}nav_remaining{else}nav_visited{/if}">
                4 <span class="delim">-</span> {$LANG.phrase_create_config_file}
            </div>
            <div class="{if $step == 5}nav_current{elseif $step < 5}nav_remaining{else}nav_visited{/if}">
                5 <span class="delim">-</span> {$LANG.phrase_create_admin_account}
            </div>
            <div class="{if $step == 6}nav_current{elseif $step < 6}nav_remaining{else}nav_visited{/if}">
                6 <span class="delim">-</span> {$LANG.phrase_clean_up}
            </div>
        </div>
        <div id="main">
