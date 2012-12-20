<?php

/**
 * Galerie
 * Professional pictures galleries for the web and mobile devices.
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   galerie
 * @license   MIT
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