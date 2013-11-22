<?php
$packageNameLower = basename(__FILE__,'.config.php');
return include MODX_ASSETS_PATH.'mycomponents/'.$packageNameLower.'/'.$packageNameLower.'.config.php';