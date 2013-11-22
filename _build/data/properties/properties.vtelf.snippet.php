<?php
/**
 * Properties file for vtElF snippet
 *
 * Copyright 2013 by Vlad Tokarev <Vlad@Tokarev.tk>
 * Created on 2013-11-22
 *
 * @package vtelf
 * @subpackage build
 */




$properties = array (
  'vtFile' => 
  array (
    'name' => 'vtFile',
    'desc' => 'vtelf.vtfile_descr',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => 'usersnippet.php',
    'lexicon' => 'vtelf:properties',
    'area' => 'vtelf.location',
    'desc_trans' => 'vtelf.vtfile_descr',
    'area_trans' => 'vtelf.location',
  ),
  'vtPath' => 
  array (
    'name' => 'vtPath',
    'desc' => 'vtelf.vtpath_descr',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '[[++vtelf.default_path]]',
    'lexicon' => 'vtelf:properties',
    'area' => 'vtelf.location',
    'desc_trans' => 'vtelf.vtpath_descr',
    'area_trans' => 'vtelf.location',
  ),
  'vtIsChunk' => 
  array (
    'name' => 'vtIsChunk',
    'desc' => 'vtelf.vtischunk_descr',
    'type' => 'combo-boolean',
    'options' => 
    array (
    ),
    'value' => false,
    'lexicon' => 'vtelf:properties',
    'area' => 'vtelf.type_of_element',
    'desc_trans' => 'vtelf.vtischunk_descr',
    'area_trans' => 'vtelf.type_of_element',
  ),
);

return $properties;

