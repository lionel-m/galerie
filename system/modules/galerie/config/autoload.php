<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Galerie
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\Galleria'       => 'system/modules/galerie/classes/Galleria.php',

	// Elements
	'Contao\ContentGalerie' => 'system/modules/galerie/elements/ContentGalerie.php',

	// Modules
	'Contao\ModuleGalerie'  => 'system/modules/galerie/modules/ModuleGalerie.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_galerie' => 'system/modules/galerie/templates',
));
