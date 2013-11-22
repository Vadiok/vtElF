<?php

$packageNameLower = 'example'; /* Не допустимы пробелы и дефисы */

$components = array(
	/* Используется для определения и установки значений плейсхолдеров */
	'packageName' => 'Example',  /* Не допустимы пробелы и дефисы */
	'packageNameLower' => $packageNameLower,
	'packageDescription' => 'Example project for MyComponent extra',
	'version' => '0.1.0',
	'release' => 'beta1',
	'author' => 'Vlad Tokarev',
	'email' => '<Vlad@Tokarev.tk>',
	'authorUrl' => 'http://notes.tk',
	'authorSiteName' => "Notes by Tokarev",
	'packageDocumentationUrl' => 'http://notes.tk/sites/cms/example-tutorial/',
	'copyright' => strftime('%Y'),

	/* Это следует редактировать, только если требуется сменить формат */
	'createdon' => strftime('%Y-%m-%d'),

	'gitHubUsername' => 'Vadiok',
	'gitHubRepository' => 'Example',

	/* Двухбуквенный код основного языка */
	'primaryLanguage' => 'ru',

	/* Установка прав доступа на каталоги и файлы проекта */
	'dirPermission' => 0755,  /* Без кавычек!!! */
	'filePermission' => 0644, /* Без кавычек!!! */

	/* Определение исходных и целевых директорий */

	/* путь к исходным файлам MyComponent */
	'mycomponentRoot' => $this->modx->getOption('mc.root', null,
		MODX_CORE_PATH . 'components/mycomponent/'),

	/* путь к корневому каталогу нового проекта */
	'targetRoot' => MODX_ASSETS_PATH . 'mycomponents/' . $packageNameLower . '/',


	/* ********************* НОВЫЕ СИСТЕМНЫЕ НАСТРОЙКИ ********************** */

	/* Если настройка вашего дополнения должна осуществляться через Настройки системы, укажите здесь значения этих настроек.
	 * Также вы можете создать или отредактировать их в Менеджере (Система -> Настройках системы),
	 * а после экспортировать их с помощью утилиты exportObjects. Если вы экспортируете их, убедитесь
	 * что их пространство имен записано в нижнем регистре в соответствии с именем вашего дополнения */

	'newSystemSettings' => array(
		'example_system_setting1' => array( // key
			'key' => 'example_system_setting1',
			'name' => 'Example Setting One',
			'description' => 'Description for setting one',
			'namespace' => 'example',
			'xtype' => 'textfield',
			'value' => 'value1',
			'area' => 'area1',
		),
		'example_system_setting2' => array( // key
			'key' => 'example_system_setting2',
			'name' => 'Example Setting Two',
			'description' => 'Description for setting two',
			'namespace' => 'example',
			'xtype' => 'combo-boolean',
			'value' => true,
			'area' => 'area2',
		),
	),

	/* ********************** НОВЫЕ СИСТЕМНЫЕ СОБЫТИЯ *********************** */

	/* Массив с новыми Системными событиями (не Системными событиями MODX по умолчанию),
	 * перечисоенными здесь для создания во время установки и удаления во время
	 * удаления пакета.
	 *
	 * Внимание: *НЕ* перечисляйте здесь обычные Системные события MODX!!! */

	'newSystemEvents' => array(
		'OnMyEvent1' => array(
			'name' => 'OnMyEvent1',
		),
		'OnMyEvent2' => array(
			'name' => 'OnMyEvent2',
			'groupname' => 'Example',
			'service' => 1,
		),
	),

	/* *********************** ПРОСТРАНСТВО(ВА) ИМЕН ************************ */
	/* (опционально) Обычно используется только одно пространство имен, которое соответствует
	 * значению переменной $packageNameLower. Пути должны оканчиваться слэшем
	*/

	'namespaces' => array(
		'example' => array(
			'name' => 'example',
			'path' => '{core_path}components/example/',
			'assets_path' => '{assets_path}components/example/',
		),

	),

	/* **************************** КОНТЕКСТ(Ы) ***************************** */
	/* (опционально) Перечислите любые контексты, кроме контекста 'web' */

	'contexts' => array(
		'example' => array(
			'key' => 'example',
			'description' => 'example context',
			'rank' => 2,
		)
	),


	/* ************************ НАСТРОКИ КОНТЕКСТОВ ************************* */

	/* Если вашему дополнению требуются Настройки контекста, установите здесь значения их полей.
	 * Также вы можете создать и отредактировать их в Менеджере (Редактировать контекст -> Настройки контекста),
	 * и экспортировать их с помощью exportObjects. Если вы сделаете так, убедитесь, что пространство имен
	 * установлено в соответствии с именем дополнения в нижнем регистре.
	 * Также параметр context_key должен соответствовать имени текущего контекста.
	 * */

	'contextSettings' => array(
		'example_context_setting1' => array(
			'context_key' => 'example',
			'key' => 'example_context_setting1',
			'name' => 'Example Setting One',
			'description' => 'Description for setting one',
			'namespace' => 'example',
			'xtype' => 'textfield',
			'value' => 'value1',
			'area' => 'example',
		),
		'example_context_setting2' => array(
			'context_key' => 'example',
			'key' => 'example_context_setting2',
			'name' => 'Example Setting Two',
			'description' => 'Description for setting two',
			'namespace' => 'example',
			'xtype' => 'combo-boolean',
			'value' => true,
			'area' => 'example',
		),
	),

	/* ***************************** КАТЕГОРИИ ****************************** */
	/* (опционально) Список категорий. Это необходимо только в том случае, если
	 * вам требуется более одной категории, названной по имени пакета, или вы
	 * желаете создать вложенную категорию.
	*/

	'categories' => array(
		'Example' => array(
			'category' => 'Example',
			'parent' => '',  // категория верхнего уровня
		),
		'category2' => array(
			'category' => 'Category2',
			'parent' => 'Example', // категория, вложенная в Example
		)
	),

	/* ******************************** МЕНЮ ******************************** */

	/* Если для вашего дополнения требуется создать меню, можете создать его
	 * здесь или же в Менеджере с последующим экспортом с помощью exportObjects.
	 * Убедитесь, что пространство имен для создаваемого меню установлено в
	 * соответствии с именем вашего дополнения в нижнем регистре.
	 *
	 * Каждое меню должно иметь одно единственное действие */

	'menus' => array(
		'Example' => array(
			'text' => 'Example',
			'parent' => 'components',
			'description' => 'ex_menu_desc',
			'icon' => '',
			'menuindex' => 0,
			'params' => '',
			'handler' => '',
			'permissions' => '',

			'action' => array(
				'id' => '',
				'namespace' => 'example',
				'controller' => 'index',
				'haslayout' => true,
				'lang_topics' => 'example:default',
				'assets' => '',
			),
		),
	),


	/* ****************************** ЭЛЕМЕНТЫ ****************************** */

	/* Массив, содержащий элементы вашего дополнения. Параметр 'category'
		обязателен для каждого элемента, все остальные поля необязательны.
		Параметры свойств - propertySets (если они есть) должны идти первыми!

		Стандартная форма имен файлов следующая:
			SnippetName.snippet.php
			PluginName.plugin.php
			ChunkName.chunk.html
			TemplateName.template.html

		Если имена файлов вашего дополнения нестандартные добавьте такое поле:
			'filename' => 'требуемоеИмяФайла',
	*/


	'elements' => array(

		'propertySets' => array( // все три поля обязательны
			'PropertySet1' => array(
				'name' => 'PropertySet1',
				'description' => 'Description for PropertySet1',
				'category' => 'Example',
			),
			'PropertySet2' => array(
				'name' => 'PropertySet2',
				'description' => 'Description for PropertySet2',
				'category' => 'Example',
			),
		),

		'snippets' => array(
			'Snippet1' => array(
				'category' => 'Example',
				'description' => 'Description for Snippet one',
				'static' => true,
			),

			'Snippet2' => array( // пример с настройками статичности и набором параметров
				'category' => 'Category2',
				'description' => 'Description for Snippet two',
				'static' => false,
				'propertySets' => array(
					'PropertySet1',
					'PropertySet2'
				),
			),

		),
		'plugins' => array(
			'Plugin1' => array( // пример с минимальными параметрами
				'category' => 'Example',
			),
			'Plugin2' => array( // пример с настройками статичности, событиями и набором свойств
				'category' => 'Example',
				'description' => 'Description for Plugin one',
				'static' => false,
				'propertySets' => array( // все указанные наборы свойств будут присоединены к элементу
					'PropertySet1',
				),
				'events' => array(
					// пример минимального описания - нет никаких полей
					'OnUserFormSave' => array(),
					// пример с указанием полей
					'OnMyEvent1' => array(
						'priority' => '0', // приоритет события; 0 - наибольший приоритет
						'group' => 'plugins', // обычно это значение так и должно быть установлено как 'plugins'
						'propertySet' => 'PropertySet1', // набор свойств, содержащихся в этом событии
					),
					'OnMyEvent2' => array(
						'priority' => '3',
						'group' => 'plugins',
						'propertySet' => '',
					),
					'OnDocFormSave' => array(
						'priority' => '4',
						'group' => 'plugins',
						'propertySet' => '',
					),


				),
			),
		),
		'chunks' => array(
			'Chunk1' => array(
				'category' => 'Example',
			),
			'Chunk2' => array(
				'description' => 'Description for Chunk two',
				'category' => 'Example',
				'static' => false,
				'propertySets' => array(
					'PropertySet2',
				),
			),
		),
		'templates' => array(
			'Template1' => array(
				'category' => 'Example',
			),
			'Template2' => array(
				'category' => 'Example',
				'description' => 'Description for Template two',
				'static' => false,
				'propertySets' => array(
					'PropertySet2',
				),
			),
		),
		'templateVars' => array(
			'Tv1' => array(
				'category' => 'Example',
				'description' => 'Description for TV one',
				'caption' => 'TV One',
				'default_text' => 'Tv1 Default Text',
				'propertySets' => array(
					'PropertySet1',
					'PropertySet2',
				),
				'templates' => array(
					'default' => 1,
					'Template1' => 4,
					'Template2' => 4,


				),
			),
			'Tv2' => array( // пример с настройками, указывающими используемые шаблоны, значение по умолчанию и настройки статичности
				'category' => 'Example',
				'description' => 'Description for TV two',
				'caption' => 'TV Two',
				'static' => false,
				'default_text' => '@INHERIT',
				'templates' => array(
					'default' => 3, // второе значение - это позиция; используется для сортировки TV при редактировании ресурсов
					'Template1' => 4,
					'Template2' => 1,
				),
			),
		),
	),
	/* (опционально) значение true сделает все элементы объектов статическими - поля 'static', заданные выше проигнорируются */
	'allStatic' => true,


	/* ************************* РЕСУРСЫ ****************************
	 Внимание: этот список используется только в Bootstrap.
	 Ниже будет другой список ресурсов, используемых в ExportObjects.
	 * ************************************************************** */
	/* Массив с названиями страниц (pagetitle) ресурсов вашего дополнения; все остальные поля необязательны.
		Здесь можно присвоить значение любому полю ресурса */
	'resources' => array(
		'Resource1' => array( // пример с минимальным набором параметров
			'pagetitle' => 'Resource1',
			'alias' => 'resource1',
			'context_key' => 'example',
		),
		'Resource2' => array( // пример с дополнительными полями
			'pagetitle' => 'Resource2',
			'alias' => 'resource2',
			'context_key' => 'example',
			'parent' => 'Resource1',
			'template' => 'Template2',
			'richtext' => false,
			'published' => true,
			'tvValues' => array(
				'Tv1' => 'SomeValue',
				'Tv2' => 'SomeOtherValue',
			),
		),
	),


	/* Массив со значениями языков, для которых у вас будут языковые файлы,
	 * далее через запятую список файлов со списками строк перевода
	 * ('.inc.php' будет добавлено в конце имени файла). */
	'languages' => array(
		'ru' => array(
			'default',
			'properties',
			'forms',
		),
	),
	/* ********************************************* */
	/* Указываем, если требуется, каталоги, создаваемые в "assets".
	 * Если необходимо, указывайте свои каталоги.
	 * Чтобы создать такие каталоги установите значение параметра "hasAssets" в "true".
	 * Установите "hasAssets" в "false", чтобы пропустить создание.
	 * Также будут созданы пустые js и/или css файлы.
	 */
	'hasAssets' => true,

	'assetsDirs' => array(
		// Если установлено в "true", будет создан CSS файл по умолчанию (пустой)
		'css' => true,

		// Если установлено в "true", будет создан JS файл по умолчанию (пустой)
		'js' => true,

		'images' => true,
		'audio' => true,
		'video' => true,
		'themes' => true,
	),
	/* Сжать все JavaScript файлы */
	'minifyJS' => true,
	/* Создать единственный файл из всех JavaScript файлов */
	'createJSMinAll' => true,
	/* если этот параметр установлен в "false", для сжатия будет использован обычный jsmin.
		JSMinPlus работает медленней, но он более надежен */
	'useJSMinPlus' => true,

	/* Эти файлы автоматически поместятся в "assets/components/yourcomponent/js/"
		Формат: 'директория:имяфайла'
		(в директории конечный слэш не указывается)
		Если параметр 'createCmpFiles' установлен в 'true', этот пункт будет проигнорирован.
	*/
	$jsFiles = array(
		'example.js',
	),


	/* ********************************************* */
	/* Определение основных каталогов и файлов, создаваемых в проекте */

	'docs' => array(
		'readme.txt',
		'license.txt',
		'changelog.txt',
		'tutorial.html'
	),

	/* (опционально) Файл с описание проекта в формате, используемом GitHub */
	'readme.md' => true,
	/* подразумевается, что у каждого пакета имеется корневой каталог */
	'hasCore' => true,

	/* ********************************************* */
	/* (опционально) Массив дополнительных скриптов-резольверов, запускаемых во время
	 * установки. Имейте ввиду, что резольверы, используемые для присоединения плагинов
	 * к событиям, наборов свойств к элементам, ресурсов к шаблонам и TV к шаблонам
	 * будут созданы автоматически -- *НЕ* перечисляйте их здесь!
	 *
	 * 'default' создаст резольвер по умолчанию, названный по имени дополнения.
	 * (резольверы для TV и плагинов могут быть созданы выше).
	 * К концу имени файла автоматически будет добавлено 'resolver.php' */
	'resolvers' => array(
		'default',
		'addUsers'
	),

	/* (опционально) Валидаторы могут отменить установку после проверки определенных условий.
	 * Для каждого указанного элемента массива (не указывайте префиксы и суффиксы) с именами
	 * валидаторов, а также для резольверов по умолчанию, создаваемых при указании '' или
	 * 'default', будут созданы файлы, к концам имен которых будет добавлено 'validator.php'. */

	'validators' => array(
		'default',
		'hasGdLib'
	),

	/* (опционально) "install.options" требуется, если вы хотите дать пользователю
	 * возможность настроить что-либо перед началом установки пакета.
	 * Ищите подробности в файле "user.input.php".
	 * Установите значение этого параметра в 'install.options' или в ''.
	 * Будет создан файл "_build/install.options/user.input.php".
	 * Не меняйте ни его расположение, ни имя. */
	'install.options' => 'install.options',


	/* Суффиксы, используемые для ресурсов и файлов с кодом элементов (функционал не готов)  */
	'suffixes' => array(
		'modPlugin' => '.php',
		'modSnippet' => '.php',
		'modChunk' => '.html',
		'modTemplate' => '.html',
		'modResource' => '.html',
	),


	/* ********************************************* */
	/* (опционально) Необходимо только в том случае, если вы используете файлы классов.
	 *
	 * Массив создаваемых файлов классов.
	 *
	 * Формат:
	 *
	 * 'ИмяКласса' => 'каталог:имяфайла',
	 *
	 * или
	 *
	 * 'ИмяКласса' => 'имяфайла',
	 *
	 * (к концу имени файла автоматически добавится '.class.php')
	 *
	 * Файлы классов будут созданы в:
	 * имякомпонента/core/components/имякомпонента/model/[каталог/]{имяфайла}.class.php
	 *
	 * Установить значение параметра 'classes' в "array()", если вы не будете использовать классы. */
	'classes' => array(
		'Example' => 'example:example',
	),

	/* ************************************
	 * Параметры пользовательских страниц (CMP).
	 * Установите всем неиспользуемым элементам значение пустого массива ("array()").
	 * ********************************** */

	/* Если здесь указать "false", остальная часть этой секции не будет обрабатываться. */

	'createCmpFiles' => true,

	/* ВАЖНО: значения массивов в оставшейся части этой секции
		должны быть в нижнем регистре */

	/* Файл с главным действием компонента.
		Он будет автоматически помещен в "core/component/имякомпонента/".
	*/

	'actionFile' => 'index.php',

	/* CSS файл для CMP */

	'cssFile' => 'mgr.css',

	/* Перечисленные здесь элементы будут автоматически созданы в "core/components/имякомпонента/processors/"
		Формат: каталог:имяфайла
		К концу имени файла автоматически добавится '.class.php'

		Встроенные классы процессоров содержат getlist, create, update, duplicate,
		import и export. */

	'processors' => array(
		'mgr/snippet:getlist',
		'mgr/snippet:changecategory',
		'mgr/snippet:remove',

		'mgr/chunk:getlist',
		'mgr/chunk:changecategory',
		'mgr/chunk:remove',
	),

	/* Перечисленные здесь элементы будут автоматически созданы в "core/components/имякомпонента/controllers[/каталог]/имяфайла"
		Формат: каталог:имяфайла */

	'controllers' => array(
		':index.php',
		'mgr:header.php',
		'mgr:home.php',
	),

	/* Перечисленные здесь элементы будут автоматически созданы в "assets/components/имякомпонента/" */

	'connectors' => array(
		'connector.php'

	),
	/* Перечисленные здесь элементы будут автоматически созданы в "assets/components/имякомпонента/js[/каталог]/имяфайла"
		Формат: каталог:имяфайла */

	'cmpJsFiles' => array(
		':example.js',
		'sections:home.js',
		'widgets:home.panel.js',
		'widgets:snippet.grid.js',
		'widgets:chunk.grid.js',
	),


	/* *********************************************
	 * Эти параметры настраивают exportObjects.php *
	 ********************************************* */
	/* ExportObjects обновляет существующие файлы. Если установить
		параметру "dryRun" значение '1', ExportObjects сообщит, какие
		файлы отличаются, но ничего не изменит. Имейте ввиду, что на
		некоторых платформах "dryRun" работает *очень* медленно. */

	'dryRun' => '0',

	/* Массив элементов, которые требуется экспортировать. Все указанные здесь элементы будут обработаны.
	 *
	 * Для экспорта требуемых ресурсов убедитесь, что вы перечислили их
	 * названия страниц ("pagetitle") и/или id их родительских ресурсов.
	*/
	'process' => array(
		'contexts',
		'snippets',
		'plugins',
		'templateVars',
		'templates',
		'chunks',
		'resources',
		'propertySets',
		'systemSettings',
		'contextSettings',
		'systemEvents',
		'menus'
	),
	/* Массив обрабатываемых ресурсов. Можно указать или сами ресурсы, или
		родителя, их содержащего, можно использовать сразу оба варианта.

		Ресурсы могут быть указаны по имени страницы (pagetitle) или по id, но
		вы должны пользоваться только одним из вариантов, указав здесь каким
		именно. Важно: используйте id, если у вас дублируются имена страниц. */
	'getResourcesById' => false,

	'exportResources' => array(
		'Resource1',
		'Resource2',
	),
	/* Массив с id родительских ресурсов, дочерние страницы которых будут получены. */
	'parents' => array(),
	/* Также экспортирует перечисленные родительские ресурсы
		(установите в "false" для получения только дочерних ресурсов) */
	'includeParents' => false,


	/* ********************** НАСТРОЙКА LEXICON HELPER ********************** */
	/* These settings are used by LexiconHelper */
	'rewriteCodeFiles' => false,  /* удалять "~~descriptions" */
	'rewriteLexiconFiles' => true, /* автоматически добавлять отсутствующие строки в файлы словарей */
	/* ********************************************************************** */

	/* Массив псевдонимов, используемых в коде массива свойств. 
	 * Используется утилитой checkproperties для сравнения свойств
	 * кода и свойств, указанных в свойствах транспортного файла.
	 * Если вы используете что-либо еще, добавьте это сюда (можно удалить то, что не используется).
	 * Также в любом случае поиск проверяет префикс '$this->' - его не надо сюда добавлять. */
	'scriptPropertiesAliases' => array(
		'props',
		'sp',
		'config',
		'scriptProperties'
	),
);

return $components;



/* ***************************************************
 * В коде произведены изменения в следующих строках: *
 *************************************************** */
/*
010 Номер изначальный номер версии указан как 0.1.0
012-016,022 Имя и другие данные разработчика заменены на мои
017 Год будет автоматически выставлен текущий
020 Изменен формат даты создания на 'ГГГГ-ММ-ДД' вместо 'ММ-ДД-ГГГГ'
026 Основной язык заменен на 'ru' вместо 'en'
340 Элементы сделаны статичными (true вместо false)
375 Массив языков заменен на 'ru' вместо 'en'
 */

/* ***************************************************************
 * В следующих строках блочные комментарии заменены на строчные: *
 *************************************************************** */
/*
156, 160, 215, 235, 247, 254, 258, 260, 262-264, 325, 332, 350, 355, 391, 394
Это сделано для того, чтобы можно было просто закомментировать блок
неиспользуемых элементов, а не удалять их.
 */