<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package galerie
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Add palettes to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['galerie'] = '{type_legend},type,headline;{galerie_legend},galerie;{imagesFolder_legend},imagesFolder,galFileName;{imgSortBy_legend},imgSortBy;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['galerie'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['galerie'],
	'exclude'                 => true,
	'inputType'               => 'radio',
	'foreignKey'              => 'tl_galerie.title',
	'eval'                    => array('mandatory'=>true)
);

$GLOBALS['TL_DCA']['tl_content']['fields']['imagesFolder'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['imagesFolder'],
        'exclude'                 => true,
        'inputType'               => 'fileTree',
        'eval'                    => array('fieldType'=>'checkbox', 'files'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['imgSortBy'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sortBy'],
        'exclude'                 => true,
        'inputType'               => 'select',
        'options'                 => array('name_asc', 'name_desc', 'date_asc', 'date_desc', 'random'),
        'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
        'eval'                    => array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['galFileName'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['galFileName'],
        'exclude'                 => true,
        'inputType'               => 'checkbox',
        'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
);
?>