<?php

require_once("../../global/library.php");

use FormTools\Modules;

$module = Modules::initModulePage("admin");

$module->displayPage("templates/index.tpl", array());
