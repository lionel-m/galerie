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
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['galerie'] = '{title_legend},name,headline,type;{galerie_legend},galerie;{imagesFolder_legend},imagesFolder;{imgSortBy_legend},sortBy;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['galerie'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['galerie'],
	'exclude'                 => true,
	'inputType'               => 'radio',
	'foreignKey'              => 'tl_galerie.title',
	'eval'                    => array('mandatory'=>true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['imagesFolder'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_module']['imagesFolder'],
        'exclude'                 => true,
        'inputType'               => 'fileTree',
        'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'orderField'=>'orderSRC', 'files'=>true)
);
?>