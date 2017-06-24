<?php

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'DatabaseInfo'           => 'system/modules/database_info/classes/DatabaseInfo.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_database_info' => 'system/modules/database_info/templates',
));
