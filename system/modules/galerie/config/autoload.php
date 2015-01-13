<?php

/**
 * Galerie
 * Professional pictures galleries for the web and mobile devices.
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   galerie
 * @license   MIT (http://lionel-m.mit-license.org/)
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'Galleria',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'Galleria\Galleria'       => 'system/modules/galerie/classes/Galleria.php',

    // Elements
    'Galleria\ContentGalerie' => 'system/modules/galerie/elements/ContentGalerie.php',

    // Models
    'Galleria\GalerieModel'         => 'system/modules/galerie/models/GalerieModel.php',
    'Galleria\GaleriePicturesModel' => 'system/modules/galerie/models/GaleriePicturesModel.php',

    // Modules
    'Galleria\ModuleGalerie'  => 'system/modules/galerie/modules/ModuleGalerie.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'ce_galerie' => 'system/modules/galerie/templates',
));
