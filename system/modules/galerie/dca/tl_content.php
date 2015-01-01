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
 * Add palettes to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['galerie'] = '{type_legend},type,headline;{galerie_legend},galerie;{imagesFolder_legend},imagesFolder,sortBy,size;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['galerie'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['galerie'],
    'exclude'                 => true,
    'flag'                    => 1,
    'inputType'               => 'select',
    'options_callback'        => array('tl_content_galerie', 'getGalleries'),
    'eval'                    => array('doNotCopy'=>true, 'chosen'=>true, 'mandatory'=>true, 'tl_class'=>'w50'),
    'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['imagesFolder'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['imagesFolder'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('multiple'=>true,
                                       'fieldType'=>'checkbox',
                                       'orderField'=>'orderSRC',
                                       'extensions'=>Config::get('validImageTypes'),
                                       'files'=>true,
                                       'isGallery'=>true
                                      ),
    'sql'                     => "blob NULL"
);

class tl_content_galerie extends Backend
{
    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import('BackendUser', 'User');
    }

    /**
     * Get all galleries and return them as array
     * @return array
     */
    public function getGalleries()
    {
        if (!$this->User->isAdmin && !is_array($this->User->galleria)) {
            return array();
        }

        $arrGalleries = array();
        $objGalleries = $this->Database->execute("SELECT id, title FROM tl_galerie ORDER BY title");

        while ($objGalleries->next()) {
            if ($this->User->isAdmin || $this->User->hasAccess($objGalleries->id, 'galleria')) {
                $arrGalleries[$objGalleries->id] = $objGalleries->title;
            }
        }

        return $arrGalleries;
    }
}
