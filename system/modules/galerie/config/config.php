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
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */
$GLOBALS['BE_MOD']['content']['galerie'] = array (

    'tables'     => array('tl_galerie', 'tl_galerie_pictures'),
    'icon'       => 'system/modules/galerie/html/img/galleria-icon.png'
);

/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 */
array_insert($GLOBALS['FE_MOD']['application'], 0, array (

    'galerie' => 'Galleria\ModuleGalerie'
));

/**
 * -------------------------------------------------------------------------
 * CONTENT ELEMENTS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_CTE']['media']['galerie'] = 'Galleria\ContentGalerie';

/**
 * -------------------------------------------------------------------------
 * PERMISSIONS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_PERMISSIONS'][] = 'galleria';
$GLOBALS['TL_PERMISSIONS'][] = 'galleria_permission';
