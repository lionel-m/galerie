<?php

if (!defined('TL_ROOT'))
    die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Lionel Maccaud
 * @author     Lionel Maccaud (Galleria by Aino: http://galleria.aino.se)
 * @package    galerie
 * @license    MIT
 * @filesource
 */

/**
 * Class ModuleGalerie
 *
 * @copyright  Lionel Maccaud
 * @author     Lionel Maccaud
 * @package    Controller
 */
class ModuleGalerie extends Module {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_galerie';

    public function generate() {

        if (TL_MODE == 'BE') {
            $objTemplate = new BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### MODULE GALLERIA ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        return parent::generate();
    }

    /**
     * Generate module
     */
    protected function compile() {

        $this->Template = new FrontendTemplate('ce_galerie');
        $this->import('Database');
        $galleria = new Galleria();

        $galleria->getOptions($this->Database, $this->galerie, $this->Template);
        $galleria->getPictures($this->Database, $this->galerie, $this->Template, $this->imagesFolder, $this->imgSortBy, $this->galFileName);
        $galleria->getGalleriaTheme($this->Database, $this->galerie);

        // Use specific CSS and JS when the CTE is loaded
        if (TL_MODE == 'FE') {

            // From the extension - Galleria script
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/galleria/galleria-1.2.8.min.js';

            // Flickr Plugin
            if($galleria->isFlickrEnabled($this->Database, $this->galerie, $this->Template))
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/plugins/flickr/galleria.flickr.min.js';

            // History Plugin
            if($galleria->isHistoryEnabled($this->Database, $this->galerie))
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/plugins/history/galleria.history.min.js';

            // Picasa Plugin
            if($galleria->isPicasaEnabled($this->Database, $this->galerie, $this->Template))
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/plugins/picasa/galleria.picasa.min.js';
        }
    }
}
?>