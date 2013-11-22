<?php
/**
 * vtElF snippet for vtElF extra
 *
 * Copyright 2013 by Vlad Tokarev <Vlad@Tokarev.tk>
 * Created on 2013-11-19
 *
 * vtElF is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * vtElF is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * vtElF; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package vtelf
 */

/**
 * Description
 * -----------
 * Основной сниппет дополнения
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package vtelf
 **/


/*
 * ToDo
 * ----
 * - Проверить английский перевод
 * - Скрипт удаления не удаляет категорию
 */


/* Получаем значения параметров */
/** @var $vtPath string */
$vtPath = (string) $modx->getOption('vtPath',$scriptProperties,$modx->getOption('vtelf.default_path'));
/** @var $vtFile string */
$vtFile = (string) $modx->getOption('vtFile',$scriptProperties,'usersnippet.php');
/** @var $vtIsChunk bool */
$vtIsChunk = (bool) $modx->getOption('vtIsChunk',$scriptProperties,false);

/* Обрабатываем теги MODX в параметрах расположения
 (т.к. эти параметры передаются PHP, а не в MODX) */
/** @var $vtTagParser modChunk */
// Директория
$vtTagParser = $modx->newObject('modChunk');
$vtTagParser->setCacheable(false);
$vtPath = (string) $vtTagParser->process(array(), $vtPath);
// Имя файла
$vtTagParser = $modx->newObject('modChunk');
$vtTagParser->setCacheable(false);
$vtFile = (string) $vtTagParser->process(array(), $vtFile);

// Проверяем наличие слэша в конце пути
$vtPath = preg_replace('/\/$/', '', $vtPath).'/';

// Если файл не был найден, возращаем ошибку,
// работа скрипта прекращается
if (!is_file($vtPath.$vtFile))
	return $vtPath.$vtFile.': '.($modx->lexicon('vtelf.file_not_found'));

// Если вызывается сниппет, возращаем результат его работы,
// работа скрипта прекращается
if (!$vtIsChunk) return include($vtPath.$vtFile);

// Если вызывается чанк обрабатываем и возращаем его
$vtTagParser = $modx->newObject('modChunk');
$vtTagParser->setCacheable(false);
if ( ($vtFOpen=@fopen($vtPath.$vtFile,'r')) == false)
	return $modx->lexicon('vtelf.cannot_open_file');
$vtChunk = fread( $vtFOpen, filesize($vtPath.$vtFile) );
fclose($vtFOpen);
return $vtTagParser->process($scriptProperties, $vtChunk);