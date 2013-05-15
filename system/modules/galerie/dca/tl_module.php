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
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['galerie'] = '{title_legend},name,headline,type;{galerie_legend},galerie;{imagesFolder_legend},imagesFolder,sortBy,groupImgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['type']['eval']['gallery_types'][] = 'galerie';

$GLOBALS['TL_DCA']['tl_module']['fields']['galerie'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['galerie'],
    'exclude'                 => true,
    'inputType'               => 'radio',
    'foreignKey'              => 'tl_galerie.title',
    'eval'                    => array('mandatory'=>true),
    'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['imagesFolder'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['imagesFolder'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'orderField'=>'orderSRC', 'files'=>true),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['sortBy'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sortBy'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('custom', 'name_asc', 'name_desc', 'date_asc', 'date_desc', 'random'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['groupImgSize'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['size'],
    'exclude'                 => true,
    'inputType'               => 'imageSize',
    'options'                 => $GLOBALS['TL_CROP'],
    'reference'               => &$GLOBALS['TL_LANG']['MSC'],
    'eval'                    => array('rgxp'=>'digit', 'nospace'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);
?>