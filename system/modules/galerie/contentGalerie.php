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
 * Class contentGalerie 
 *
 * @copyright  Lionel Maccaud 
 * @author     Lionel Maccaud
 * @package    Controller
 */
class contentGalerie extends Module {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_galerie';

    public function generate() {

        return parent::generate();
    }

    /**
     * Generate module
     */
    protected function compile() {
        
        // Use specific CSS and JS when the CTE is loaded
        if (TL_MODE == 'FE') {

            // From the extension - Galleria script
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/galleria/galleria-1.2.7.min.js';
            
            // Flickr Plugin
            if($this->isFlickrEnabled())
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/plugins/flickr/galleria.flickr.min.js';
            
            // History Plugin
            if($this->isHistoryEnabled())
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/plugins/history/galleria.history.min.js';

            // Picasa Plugin
            if($this->isPicasaEnabled())
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/galerie/html/external/plugins/picasa/galleria.picasa.min.js';
        }

        $this->getOptions();
        $this->getPictures();
    }

    /**
     * Get gallery options and build JS function for the template
     *
     * @access protected
     * @return null
     */
    protected function getOptions() {

        // Retrieve the current gallery options
        $objOptions = $this->Database->prepare("SELECT * FROM tl_galerie WHERE id=? AND published=1")
                ->limit(1)
                ->execute($this->galerie);

        if ($objOptions->numRows > 0) {

            while ($objOptions->next()) {

                $arrOptions[] = $objOptions->row();
            }

            /* Standard options *
             ********************/
            
            // If the tested values ​​are not the default values, then it saves.
            $options = array();
            
            if ($arrOptions[0]['width'] > 0)
                $options[0] = 'width: ' . $arrOptions[0]['width'];

            if ($arrOptions[0]['height'] > 0)
                $options[1] = 'height: ' . $arrOptions[0]['height'];

            if ($arrOptions[0]['transition'] != 'fade')
                $options[2] = 'transition: ' . "'" . $arrOptions[0]['transition'] . "'";
            
            if ($arrOptions[0]['initialTransition'] != 'undefined')
                $options[3] = 'initialTransition: ' . "'" . $arrOptions[0]['initialTransition'] . "'";

            if ($arrOptions[0]['clicknext'] == '1')
                $options[4] = 'clicknext: true';
            
            if ($arrOptions[0]['showImagenav'] == '')
                $options[5] = 'showImagenav: false';
            
            if ($arrOptions[0]['showCounter'] == '')
                $options[6] = 'showCounter: false';
            
            if ($arrOptions[0]['lightbox'] == '1')
                $options[7] = 'lightbox: true';
            
            if (($arrOptions[0]['overlayBackground'] != '0b0b0b') && ($arrOptions[0]['lightbox'] == '1'))
                $options[8] = 'overlayBackground: ' . "'#" . $arrOptions[0]['overlayBackground'] . "'";
            
            if (($arrOptions[0]['overlayOpacity'] != 0.85) && ($arrOptions[0]['lightbox'] == '1'))
                $options[9] = 'overlayOpacity: ' . $arrOptions[0]['overlayOpacity'];
            
            if (($arrOptions[0]['imageCrop'] != 'false') && ($arrOptions[0]['imageCrop'] == 'true'))
                $options[10] = 'imageCrop: ' . $arrOptions[0]['imageCrop'];
            
            elseif (($arrOptions[0]['imageCrop'] != 'false') && ($arrOptions[0]['imageCrop'] != 'true'))
                $options[10] = 'imageCrop: ' . "'" . $arrOptions[0]['imageCrop'] . "'";
            
            if ($arrOptions[0]['imageMargin'] != 0)
                $options[11] = 'imageMargin: ' . $arrOptions[0]['imageMargin'];
            
            if ($arrOptions[0]['imagePan'] == '1')
                $options[12] = 'imagePan: true';
            
            if (($arrOptions[0]['autoplay'] == '1') && ($arrOptions[0]['autoplayInterval'] == 5000))
                $options[13] = 'autoplay: true';
            
            elseif (($arrOptions[0]['autoplayInterval'] != 5000) && ($arrOptions[0]['autoplayInterval'] > 0) && ($arrOptions[0]['autoplay'] == '1'))
                $options[13] = 'autoplay: ' . $arrOptions[0]['autoplayInterval'];
            
            if ($arrOptions[0]['carousel'] == '')
                $options[14] = 'carousel: false';
            
            if ($arrOptions[0]['carouselFollow'] == '')
                $options[15] = 'carouselFollow: false';
            
            if ($arrOptions[0]['carouselSpeed'] != 200)
                $options[16] = 'carouselSpeed: ' . $arrOptions[0]['carouselSpeed'];
            
            if ($arrOptions[0]['carouselSteps'] != 'auto')
                $options[17] = 'carouselSteps: ' . $arrOptions[0]['carouselSteps'];
            
            if (($arrOptions[0]['lightboxFadeSpeed'] != 200) && ($arrOptions[0]['lightbox'] == '1'))
                $options[18] = 'lightboxFadeSpeed: ' . $arrOptions[0]['lightboxFadeSpeed'];
            
            if (($arrOptions[0]['lightboxTransitionSpeed'] != 300) && ($arrOptions[0]['lightbox'] == '1'))
                $options[19] = 'lightboxTransitionSpeed: ' . $arrOptions[0]['lightboxTransitionSpeed'];
            
            if ($arrOptions[0]['pauseOnInteraction'] == '')
                $options[20] = 'pauseOnInteraction: false';
         
            if ($arrOptions[0]['gShow'] > 0)
                $options[21] = 'show: ' . $arrOptions[0]['gShow'];
            
            if ($arrOptions[0]['showInfo'] == '')
                $options[22] = 'showInfo: false';
            
            if (($arrOptions[0]['thumbnails'] != 'true') && ($arrOptions[0]['thumbnails'] == 'false'))
                $options[23] = 'thumbnails: ' . $arrOptions[0]['thumbnails'];
            
            elseif (($arrOptions[0]['thumbnails'] != 'true') && ($arrOptions[0]['thumbnails'] != 'false'))
                $options[23] = 'thumbnails: ' . "'" . $arrOptions[0]['thumbnails'] . "'";
            
            if (($arrOptions[0]['thumbCrop'] != 'true') && ($arrOptions[0]['thumbCrop'] == 'false'))
                $options[24] = 'thumbCrop: ' . $arrOptions[0]['thumbCrop'];
            
            elseif (($arrOptions[0]['thumbCrop'] != 'true') && ($arrOptions[0]['thumbCrop'] != 'false'))
                $options[24] = 'thumbCrop: ' . "'" . $arrOptions[0]['thumbCrop'] . "'";
            
            if ($arrOptions[0]['thumbMargin'] != 0)
                $options[25] = 'thumbMargin: ' . $arrOptions[0]['thumbMargin'];
            
            if ($arrOptions[0]['thumbFit'] == '')
                $options[26] = 'thumbFit: false';
            
            if (($arrOptions[0]['thumbQuality'] != 'true') && ($arrOptions[0]['thumbQuality'] == 'false'))
                $options[27] = 'thumbQuality: ' . $arrOptions[0]['thumbQuality'];
            
            elseif (($arrOptions[0]['thumbQuality'] != 'true') && ($arrOptions[0]['thumbQuality'] != 'false'))
                $options[27] = 'thumbQuality: ' . "'" . $arrOptions[0]['thumbQuality'] . "'";

            if (($arrOptions[0]['imagePanSmoothness'] != 12) && ($arrOptions[0]['imagePan'] == '1'))
                $options[28] = 'imagePanSmoothness: ' . $arrOptions[0]['imagePanSmoothness'];
            
            if ($arrOptions[0]['easing'] != 'galleria')
                $options[29] = 'easing: ' . "'" . $arrOptions[0]['easing'] . "'";
            
            if ($arrOptions[0]['transitionSpeed'] != 400)
                $options[30] = 'transitionSpeed: ' . $arrOptions[0]['transitionSpeed'];
            
            if ($arrOptions[0]['popupLinks'] == '1')
                $options[31] = 'popupLinks: true';
            
            if (($arrOptions[0]['preload'] != '2') && ($arrOptions[0]['preload'] == 'all'))
                $options[32] = 'preload: ' . "'" . $arrOptions[0]['preload'] . "'";
            
            elseif (($arrOptions[0]['preload'] != '2') && ($arrOptions[0]['preload'] != 'all'))
                $options[32] = 'preload: ' . $arrOptions[0]['preload'];
            
            if ($arrOptions[0]['extend'] != NULL)
                $options[33] = $arrOptions[0]['extend'];
            
            if ($arrOptions[0]['debug'] == '')
                $options[34] = 'debug: false';
            
            if ($arrOptions[0]['queue'] == '')
                $options[35] = 'queue: false';
            
            if ($arrOptions[0]['imagePosition'] != 'center')
                $options[36] = 'imagePosition: ' . "'" . $arrOptions[0]['imagePosition'] . "'";
            
            if ($arrOptions[0]['minScaleRatio'] != 0)
                $options[37] = 'minScaleRatio: ' . $arrOptions[0]['minScaleRatio'];
            
            if ($arrOptions[0]['maxScaleRatio'] != 0)
                $options[38] = 'maxScaleRatio: ' . $arrOptions[0]['maxScaleRatio'];
            
            if ($arrOptions[0]['swipe'] == '')
                $options[39] = 'swipe: false';
            
            if ($arrOptions[0]['fullscreenDoubleTap'] == '')
                $options[40] = 'fullscreenDoubleTap: false';
            
            if ($arrOptions[0]['layerFollow'] == '')
                $options[41] = 'layerFollow: false';
            
            $dummy = deserialize($arrOptions[0]['dummy']);
            if ($arrOptions[0]['dummy'] != '')
                $options[42] = 'dummy: ' . "'" . $dummy . "'";
            
            if ($arrOptions[0]['imageTimeout'] != 30000)
                $options[43] = 'imageTimeout: ' . $arrOptions[0]['imageTimeout'];
            
            if (($arrOptions[0]['fullscreenCrop'] == 'false') || ($arrOptions[0]['fullscreenCrop'] == 'true'))
                $options[44] = 'fullscreenCrop: ' . $arrOptions[0]['fullscreenCrop'];
            
            elseif (($arrOptions[0]['fullscreenCrop'] != 'undefined') && ($arrOptions[0]['fullscreenCrop'] != 'false') && ($arrOptions[0]['fullscreenCrop'] != 'true'))
                $options[44] = 'fullscreenCrop: ' . "'" . $arrOptions[0]['fullscreenCrop'] . "'";

            if ($arrOptions[0]['fullscreenTransition'] != 'undefined')
                $options[45] = 'fullscreenTransition: ' . "'" . $arrOptions[0]['fullscreenTransition'] . "'";
            
            if ($arrOptions[0]['touchTransition'] != 'undefined')
                $options[46] = 'touchTransition: ' . "'" . $arrOptions[0]['touchTransition'] . "'";
            
            if ($arrOptions[0]['dataConfig'] != NULL)
                $options[47] = $arrOptions[0]['dataConfig'];
            
            if ($arrOptions[0]['trueFullscreen'] == '')
                $options[48] = 'trueFullscreen: false';
            
            if ($arrOptions[0]['responsive'] == '1')
                $options[49] = 'responsive: true';

            if (($arrOptions[0]['wait'] != '5000') && ($arrOptions[0]['wait'] != NULL))
                $options[50] = 'wait: ' . $arrOptions[0]['wait'];
            
            
            // Reindex the array
            $options = array_values($options);
            
            // Add commas
            for ($i = 0; $i < count($options)-1; $i++) {
                $options[$i] = $options[$i] . ",\n";
            }
            
            $this->Template->options = $options;
            
            
            /* Flickr options *
             ******************/

            // If the tested values ​​are not the default values, then it saves.
            $flickrOptions = array();
            
            if ($arrOptions[0]['flickrOptMax'] != 30)
                $flickrOptions[0] = 'max: ' . $arrOptions[0]['flickrOptMax'];
            
            if ($arrOptions[0]['flickrOptImageSize'] != 'medium')
                $flickrOptions[1] = 'imageSize: ' . "'" . $arrOptions[0]['flickrOptImageSize'] . "'";
            
            if ($arrOptions[0]['flickrOptThumbSize'] != 'thumb')
                $flickrOptions[2] = 'thumbSize: ' . "'" . $arrOptions[0]['flickrOptThumbSize'] . "'";
            
            if ($arrOptions[0]['flickrOptSort'] != 'interestingness-desc')
                $flickrOptions[3] = 'sort: ' . "'" . $arrOptions[0]['flickrOptSort'] . "'";
            
            if ($arrOptions[0]['flickrOptDescription'] == '1')
                $flickrOptions[4] = 'description: true';
            
            // Reindex the array
            $flickrOptions = array_values($flickrOptions);
            
            // Add commas
            for ($i = 0; $i < count($flickrOptions)-1; $i++) {
                $flickrOptions[$i] = $flickrOptions[$i] . ",\n";
            }
            
            
            /* Picasa options *
             ******************/

            // If the tested values ​​are not the default values, then it saves.
            $picasaOptions = array();
            
            if ($arrOptions[0]['picasaOptMax'] != 30)
                $picasaOptions[0] = 'max: ' . $arrOptions[0]['picasaOptMax'];
            
            if ($arrOptions[0]['picasaOptImageSize'] != 'medium')
                $picasaOptions[1] = 'imageSize: ' . "'" . $arrOptions[0]['picasaOptImageSize'] . "'";
            
            if ($arrOptions[0]['picasaOptThumbSize'] != 'thumb')
                $picasaOptions[2] = 'thumbSize: ' . "'" . $arrOptions[0]['picasaOptThumbSize'] . "'";
            
            // Reindex the array
            $picasaOptions = array_values($picasaOptions);
            
            // Add commas
            for ($i = 0; $i < count($picasaOptions)-1; $i++) {
                $picasaOptions[$i] = $picasaOptions[$i] . ",\n";
            }
            
        }
        
        // Build Flickr JS function
        $flickrFunction = 'flickr: \''.$arrOptions[0]['flickrMethods'].':'.$arrOptions[0]['flickrMethodsValue'].'\'' . "\n";
        
        if (!empty($flickrOptions)) {
            $flickrFunction .= ",\n";
            $flickrFunction .= "flickrOptions: { \n";

            for ($i = 0; $i < count($flickrOptions); $i++) {
                $flickrFunction .= ( $flickrOptions[$i]);
            }

            $flickrFunction .= ' }';
        }
        
        $this->Template->flickrFunction = $flickrFunction;
        
        
        // Build Picasa JS function
        $picasaFunction = 'picasa: \''.$arrOptions[0]['picasaMethods'].':'.$arrOptions[0]['picasaMethodsValue'].'\'' . "\n";
        
        if (!empty($picasaOptions)) {
            $picasaFunction .= ",\n";
            $picasaFunction .= "picasaOptions: { \n";

            for ($i = 0; $i < count($picasaOptions); $i++) {
                $picasaFunction .= ( $picasaOptions[$i]);
            }

            $picasaFunction .= ' }';
        }
        
        $this->Template->picasaFunction = $picasaFunction;
        

        // Path for the function loadTheme() included in the template
        $foldersName = self::getTheme();
        $path = implode("/", $foldersName);
        
        if($arrOptions[0]['minifiedJS'] != '1')
            $pathJS = $path . '/' . $foldersName[1] . '.' . $foldersName[3] . '.js';
        else
            $pathJS = $path . '/' . $foldersName[1] . '.' . $foldersName[3] . '.min.js';
        
        $this->Template->pathJS = $pathJS;
        
        
        // Use alias and module ID for the ID container (id="{alias}-{moduleID}")
        $this->Template->alias = $objOptions->alias;
        $this->Template->moduleID = $this->galerie;
    }
    
    /**
     * Test if the Flickr plugin is enabled or not
     *
     * @access protected
     * @return boolean
     */
    protected function isFlickrEnabled() {

        $objFlickr = $this->Database->prepare("SELECT flickr FROM tl_galerie WHERE id=? AND published=1")
                ->limit(1)
                ->execute($this->galerie);
        
        if ($objFlickr->flickr == NULL)
            $isFlickrEnabled = FALSE;
        else
            $isFlickrEnabled = TRUE;

        // Boolean : Does the Flickr plugin is enabled ?
        $this->Template->flickr = $isFlickrEnabled;
        
        return $isFlickrEnabled;
    }
    
    /**
     * Test if the Picasa plugin is enabled or not
     *
     * @access protected
     * @return boolean
     */
    protected function isPicasaEnabled() {

        $objPicasa = $this->Database->prepare("SELECT picasa FROM tl_galerie WHERE id=? AND published=1")
                ->limit(1)
                ->execute($this->galerie);
        
        if ($objPicasa->picasa == NULL)
            $isPicasaEnabled = FALSE;
        else
            $isPicasaEnabled = TRUE;

        // Boolean : Does the Picasa plugin is enabled ?
        $this->Template->picasa = $isPicasaEnabled;
        
        return $isPicasaEnabled;
    }
    
    /**
     * Test if the History plugin is enabled or not
     *
     * @access protected
     * @return boolean
     */
    protected function isHistoryEnabled() {

        $objHistory = $this->Database->prepare("SELECT history FROM tl_galerie WHERE id=? AND published=1")
                ->limit(1)
                ->execute($this->galerie);
        
        if ($objHistory->history == NULL)
            $isHistoryEnabled = FALSE;
        else
            $isHistoryEnabled = TRUE;
        
        return $isHistoryEnabled;
    }

    /**
     * Get gallery pictures
     *
     * @access protected
     * @return null
     */
    protected function getPictures() {

        // Retrieve the current gallery pictures
        $objPictures = $this->Database->prepare("SELECT * FROM tl_galerie_pictures WHERE pid=? AND published=1 ORDER BY sorting")
                ->execute($this->galerie);

        if ($objPictures->numRows > 0) {

            while ($objPictures->next()) {

                $imgSize = deserialize($objPictures->size);
                $imageSRC = $this->getImage($this->urlEncode($objPictures->singleSRC), $imgSize[0], $imgSize[1], $imgSize[2]);
                
                // Create thumbnails separately with Contao.
                $thumbSize = deserialize($objPictures->thumbSize);
                if($thumbSize[0] == NULL && $thumbSize[1] == NULL)
                    $thumbnailSRC = $this->getImage($this->urlEncode($objPictures->singleSRC), '100px', NULL, 'crop');
                else
                    $thumbnailSRC = $this->getImage($this->urlEncode($objPictures->singleSRC), $thumbSize[0], $thumbSize[1], $thumbSize[2]);
                
                $arrPictures[$objPictures->id] = array(
                    'alt'                   => $objPictures->alt,
                    'title'                 => $objPictures->title,
                    'imageUrl'              => $objPictures->imageUrl,
                    'imageSRC'              => $imageSRC,
                    'thumbnailSRC'          => $thumbnailSRC,
                    'imageFullscreenSRC'    => $this->urlEncode($objPictures->fullscreenSingleSRC),
                    'video'                 => $this->urlVerification($objPictures->video),
                    'videoThumb'            => $objPictures->videoThumb,
                    'iframe'                => $objPictures->iframe,
                    'iframeThumb'           => $objPictures->iframeThumb
                );
            }

            $pictures = array_values($arrPictures);
            $this->Template->pictures = $pictures;
        }
        else {
            $this->Template->pictures = array();
            $this->Template->noImages = $GLOBALS['TL_LANG']['MSC']['noImages'];
        }
    }

    /**
     * Return the URL and the name of the theme
     * 
     * @access protected
     * @return array
     */
    protected function getTheme() {

        $objThemesSRC = $this->Database->prepare("SELECT themesSRC FROM tl_galerie WHERE id=? AND published=1")
                ->limit(1)
                ->execute($this->galerie);

        $path = $objThemesSRC->themesSRC;

        $theme = explode("/", $path);

        /* Example of results with default theme
         * 
         * $theme[0] = tl_files
         * $theme[1] = galleria
         * $theme[2] = themes
         * $theme[3] = classic
         */
        return $theme;
    }
    
    /**
     * Return the name of the video sharing website
     * 
     * @access protected
     * @param String
     * @return String
     */
    protected function videoSharingWebsiteName($url) {
        
        $videoSharingWebsiteName = '';
        
        // Extract the hostname of the url.
        $url_parsed = parse_url($url);
        $domain = $url_parsed['host'];
        // Delete the prefix www.
        $domain = preg_replace('/www./', '', $domain);
        
        switch($domain) {
            case $domain == 'dai.ly'  || $domain == 'dailymotion.com' :
                $videoSharingWebsiteName = 'dailymotion';
                break;
            case $domain == 'youtu.be' || $domain == 'youtube.com' :
                $videoSharingWebsiteName = 'youtube';
                break;
            case $domain == 'vimeo.com' :
                $videoSharingWebsiteName = 'vimeo';
                break;
            default : $videoSharingWebsiteName = 'undefined';
        }
        
        return $videoSharingWebsiteName;
    }
    
    /**
     * Check if there is the prefix "http://" and if not, add it.
     * 
     * @access protected
     * @param String
     * @return String
     */
    protected function urlVerification($url) {
        
        if(!empty($url)) {
            $urlPrefix = strpos($url, "http://");
            
            if($urlPrefix === false) {
                $url = "http://" . $url;
            }
            return $url;
        }
        else
            return '';
    }
}
?>