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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Galleria;

/**
 * Class ModuleGalerie
 *
 * @copyright  Lionel Maccaud
 * @author     Lionel Maccaud
 * @package    Controller
 */
class ModuleGalerie extends \Module
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_galerie';

    public function generate()
    {

        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');
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
    protected function compile()
    {
        $this->Template = new \FrontendTemplate('ce_galerie');
        $this->import('Database');
        $galleria = new Galleria();

        $galleria->getOptions($this->galerie, $this->Template, 'm'.$this->id);
        $galleria->getPictures($this->Database, $this->galerie, $this->Template, $this->imagesFolder, $this->sortBy, $this->groupImgSize, $this->orderSRC);
        $galleria->getGalleriaTheme($this->galerie);

        // Use specific CSS and JS when the module is loaded
        if (TL_MODE == 'FE') {

            // Galleria script
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/galleria/galleria.min.js';

            // Flickr Plugin
            if ($galleria->isFlickrEnabled($this->galerie, $this->Template)) {
                $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/plugins/flickr/galleria.flickr.js';
            }

            // History Plugin
            if ($galleria->isHistoryEnabled($this->galerie)) {
                $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/plugins/history/galleria.history.js';
            }

            // Picasa Plugin
            if ($galleria->isPicasaEnabled($this->galerie, $this->Template)) {
                $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/plugins/picasa/galleria.picasa.js';
            }
        }
    }
}
