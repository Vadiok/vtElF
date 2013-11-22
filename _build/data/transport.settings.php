<?php
/**
 * systemSettings transport file for vtElF extra
 *
 * Copyright 2013 by Vlad Tokarev <Vlad@Tokarev.tk>
 * Created on 2013-11-22
 *
 * @package vtelf
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $systemSettings */


$systemSettings = array();

$systemSettings[1] = $modx->newObject('modSystemSetting');
$systemSettings[1]->fromArray(array (
  'key' => 'vtelf.default_path',
  'value' => '{assets_path}userinc/',
  'xtype' => 'textfield',
  'namespace' => 'vtelf',
  'area' => 'vtelf.general_settings',
  'name' => 'vtelf.default_path',
  'description' => 'vtelf.default_path_descr',
), '', true, true);
return $systemSettings;
