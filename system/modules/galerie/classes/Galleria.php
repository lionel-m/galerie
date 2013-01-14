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
namespace Contao;

/**
 * Class Galleria
 *
 * @copyright  Lionel Maccaud
 * @author     Lionel Maccaud
 * @package    Controller
 */
class Galleria extends \Frontend {

    /**
     * Files object
     * @var \FilesModel
     */
    protected $objFiles;

    /**
     * Get gallery options and build JS function for the template
     *
     * @access public
     * @return null
     */
    public function getOptions($database, $galerie, $template) {

        // Retrieve the current gallery options
        $objOptions = $database->prepare("SELECT * FROM tl_galerie WHERE id=? AND published=1")
                ->limit(1)
                ->execute($galerie);

        if ($objOptions->numRows > 0) {

            while ($objOptions->next()) {

                $arrOptions[] = $objOptions->row();
            }

            /* Standard options *
             ********************/

            $options = array();

            // type: Number or String
            if (is_numeric($arrOptions[0]['width']))
                $options[0] = 'width: ' . $arrOptions[0]['width'];
            else
                $options[0] = 'width: ' . "'" . $arrOptions[0]['width'] . "'";

            // type: Number
            $options[1] = 'height: ' . $arrOptions[0]['height'];

            // type: String
            if($arrOptions[0]['transition'] != NULL)
                $options[2] = 'transition: ' . "'" . $arrOptions[0]['transition'] . "'";

            // type: String
            if($arrOptions[0]['initialTransition'] != NULL)
                $options[3] = 'initialTransition: ' . "'" . $arrOptions[0]['initialTransition'] . "'";

            // type: Boolean
            ($arrOptions[0]['clicknext'] == '' ? $options[4] = 'clicknext: false' : $options[4] = 'clicknext: true');

            // type: Boolean
            ($arrOptions[0]['showImagenav'] == '' ? $options[5] = 'showImagenav: false' : $options[5] = 'showImagenav: true');

            // type: Boolean
            ($arrOptions[0]['showCounter'] == '' ? $options[6] = 'showCounter: false' : $options[6] = 'showCounter: true');

            // type: Boolean
            ($arrOptions[0]['lightbox'] == '' ? $options[7] = 'lightbox: false' : $options[7] = 'lightbox: true');

            // type: String
            if ($arrOptions[0]['lightbox'] == '1')
                $options[8] = 'overlayBackground: ' . "'#" . $arrOptions[0]['overlayBackground'] . "'";

            // type: Number
            if ($arrOptions[0]['lightbox'] == '1')
                $options[9] = 'overlayOpacity: ' . $arrOptions[0]['overlayOpacity'];

            // type: Boolean or String
            if($arrOptions[0]['imageCrop'] != NULL) {
                if (($arrOptions[0]['imageCrop'] == 'false') || ($arrOptions[0]['imageCrop'] == 'true'))
                    $options[10] = 'imageCrop: ' . $arrOptions[0]['imageCrop'];
                else
                    $options[10] = 'imageCrop: ' . "'" . $arrOptions[0]['imageCrop'] . "'";
            }

            // type: Number
            $options[11] = 'imageMargin: ' . $arrOptions[0]['imageMargin'];

            // type: Boolean
            ($arrOptions[0]['imagePan'] == '' ? $options[12] = 'imagePan: false' : $options[12] = 'imagePan: true');

            // type: Boolean or Number
            if ($arrOptions[0]['autoplay'] == '1') {
                if(is_numeric($arrOptions[0]['autoplayInterval']))
                    $options[13] = 'autoplay: ' . $arrOptions[0]['autoplayInterval'];
            }

            // type: Boolean
            ($arrOptions[0]['carousel'] == '' ? $options[14] = 'carousel: false' : $options[14] = 'carousel: true');

            // type: Number
            $options[16] = 'carouselSpeed: ' . $arrOptions[0]['carouselSpeed'];

            // type: Number or String
            if (is_numeric($arrOptions[0]['carouselSteps']))
                $options[17] = 'carouselSteps: ' . $arrOptions[0]['carouselSteps'];
            else
                $options[17] = 'carouselSteps: ' . "'" . $arrOptions[0]['carouselSteps'] ."'";

            // type: Number
            if ($arrOptions[0]['lightbox'] == '1')
                $options[18] = 'lightboxFadeSpeed: ' . $arrOptions[0]['lightboxFadeSpeed'];

            // type: Number
            if ($arrOptions[0]['lightbox'] == '1')
                $options[19] = 'lightboxTransitionSpeed: ' . $arrOptions[0]['lightboxTransitionSpeed'];

            // type: Boolean
            ($arrOptions[0]['pauseOnInteraction'] == '' ? $options[20] = 'pauseOnInteraction: false' : $options[20] = 'pauseOnInteraction: true');

            // type: Number
            $options[21] = 'show: ' . $arrOptions[0]['gShow'];

            // type: Boolean
            ($arrOptions[0]['showInfo'] == '' ? $options[22] = 'showInfo: false' : $options[22] = 'showInfo: true');

            // type: Boolean or String
            if ($arrOptions[0]['thumbnails'] != NULL) {
                if (($arrOptions[0]['thumbnails'] == 'true') || ($arrOptions[0]['thumbnails'] == 'false'))
                    $options[23] = 'thumbnails: ' . $arrOptions[0]['thumbnails'];
                else
                    $options[23] = 'thumbnails: ' . "'" . $arrOptions[0]['thumbnails'] . "'";
            }

            // type: Boolean or String
            if ($arrOptions[0]['thumbCrop'] != NULL) {
                if (($arrOptions[0]['thumbCrop'] == 'true') || ($arrOptions[0]['thumbCrop'] == 'false'))
                    $options[24] = 'thumbCrop: ' . $arrOptions[0]['thumbCrop'];
                else
                    $options[24] = 'thumbCrop: ' . "'" . $arrOptions[0]['thumbCrop'] . "'";
            }

            // type: Number
            $options[25] = 'thumbMargin: ' . $arrOptions[0]['thumbMargin'];

            // type: Boolean or String
            if ($arrOptions[0]['thumbQuality'] != NULL) {
                if (($arrOptions[0]['thumbQuality'] == 'true') || ($arrOptions[0]['thumbQuality'] == 'false'))
                    $options[27] = 'thumbQuality: ' . $arrOptions[0]['thumbQuality'];
                else
                    $options[27] = 'thumbQuality: ' . "'" . $arrOptions[0]['thumbQuality'] . "'";
            }

            // type: Number
            // Only works if "image_pan" is set to true
            if ($arrOptions[0]['imagePan'] == '1')
                $options[28] = 'imagePanSmoothness: ' . $arrOptions[0]['imagePanSmoothness'];

            // type: String
            if ($arrOptions[0]['easing'] != NULL)
                $options[29] = 'easing: ' . "'" . $arrOptions[0]['easing'] . "'";

            // type: Number
            $options[30] = 'transitionSpeed: ' . $arrOptions[0]['transitionSpeed'];

            // type: Boolean
            ($arrOptions[0]['popupLinks'] == '' ? $options[31] = 'popupLinks: false' : $options[31] = 'popupLinks: true');

            // type: String or Number
            if (is_numeric($arrOptions[0]['preload']))
                $options[32] = 'preload: ' . $arrOptions[0]['preload'];
            else
                $options[32] = 'preload: ' . "'" . $arrOptions[0]['preload'] . "'";

            // type: Function
            if ($arrOptions[0]['extend'] != NULL)
                $options[33] = $arrOptions[0]['extend'];

            // type: Boolean
            ($arrOptions[0]['debug'] == '' ? $options[34] = 'debug: false' : $options[34] = 'debug: true');

            // type: Boolean
            ($arrOptions[0]['queue'] == '' ? $options[35] = 'queue: false' : $options[35] = 'queue: true');

            // type: String
            if ($arrOptions[0]['imagePosition'] != NULL)
                $options[36] = 'imagePosition: ' . "'" . $arrOptions[0]['imagePosition'] . "'";

            // type: Number
            $options[38] = 'maxScaleRatio: ' . $arrOptions[0]['maxScaleRatio'];

            // type: Boolean
            ($arrOptions[0]['swipe'] == '' ? $options[39] = 'swipe: false' : $options[39] = 'swipe: true');

            // type: Boolean
            ($arrOptions[0]['fullscreenDoubleTap'] == '' ? $options[40] = 'fullscreenDoubleTap: false' : $options[40] = 'fullscreenDoubleTap: true');

            // type: Boolean
            ($arrOptions[0]['layerFollow'] == '' ? $options[41] = 'layerFollow: false' : $options[41] = 'layerFollow: true');

            // type: String
            $dummy = deserialize($arrOptions[0]['dummy']);
            if ($arrOptions[0]['dummy'] != NULL)
                $options[42] = 'dummy: ' . "'" . $dummy . "'";

            // type: Number
            $options[43] = 'imageTimeout: ' . $arrOptions[0]['imageTimeout'];

            // type: Boolean or String
            if ($arrOptions[0]['fullscreenCrop'] != NULL) {
                if (($arrOptions[0]['fullscreenCrop'] == 'false') || ($arrOptions[0]['fullscreenCrop'] == 'true'))
                    $options[44] = 'fullscreenCrop: ' . $arrOptions[0]['fullscreenCrop'];
                else
                    $options[44] = 'fullscreenCrop: ' . "'" . $arrOptions[0]['fullscreenCrop'] . "'";
            }

            // type: String
            if ($arrOptions[0]['fullscreenTransition'] != NULL)
                $options[45] = 'fullscreenTransition: ' . "'" . $arrOptions[0]['fullscreenTransition'] . "'";

            // type: String
            if ($arrOptions[0]['touchTransition'] != NULL)
                $options[46] = 'touchTransition: ' . "'" . $arrOptions[0]['touchTransition'] . "'";

            // type: String or Array
            if ($arrOptions[0]['dataSource'] != NULL)
                $options[47] = 'dataSource: ' . $arrOptions[0]['dataSource'];

            // type: String
            if ($arrOptions[0]['dataSelector'] != NULL)
                $options[48] = 'dataSelector: ' . $arrOptions[0]['dataSelector'];

            // type: Boolean
            if ($arrOptions[0]['keepSource'] == '' ? $options[49] = 'keepSource: false' : $options[49] = 'keepSource: true');

            // type: Function
            if ($arrOptions[0]['dataConfig'] != NULL)
                $options[50] = $arrOptions[0]['dataConfig'];

            // type: Boolean
            ($arrOptions[0]['trueFullscreen'] == '' ? $options[51] = 'trueFullscreen: false' : $options[51] = 'trueFullscreen: true');

            // type: Boolean
            ($arrOptions[0]['responsive'] == '' ? $options[52] = 'responsive: false' : $options[52] = 'responsive: true');

            // type: Number or Boolean
            if ($arrOptions[0]['wait'] != NULL) {
                if (is_numeric($arrOptions[0]['wait']))
                    $options[53] = 'wait: ' . $arrOptions[0]['wait'];
                else
                    $options[53] = 'wait: ' . "'" . $arrOptions[0]['wait'] . "'";
            }

            // type: Object
            if ($arrOptions[0]['dailymotion'] != NULL)
                $options[54] = 'dailymotion: ' . $arrOptions[0]['dailymotion'];

            // type: Object
            if ($arrOptions[0]['vimeo'] != NULL)
                $options[55] = 'vimeo: ' . $arrOptions[0]['vimeo'];

            // type: Object
            if ($arrOptions[0]['youtube'] != NULL)
                $options[56] = 'youtube: ' . $arrOptions[0]['youtube'];

            // type: Boolean or String
            if ($arrOptions[0]['idleMode'] != NULL) {
                if (($arrOptions[0]['idleMode'] == 'false') || ($arrOptions[0]['idleMode'] == 'true'))
                    $options[57] = 'idleMode: ' . $arrOptions[0]['idleMode'];
                else
                    $options[57] = 'idleMode: ' . "'" . $arrOptions[0]['idleMode'] . "'";
            }

            // type: Number
            $options[58] = 'idleTime: ' . $arrOptions[0]['idleTime'];

            // type: Number
            $options[59] = 'idleSpeed: ' . $arrOptions[0]['idleSpeed'];

            // type: Boolean
            ($arrOptions[0]['thumbDisplayOrder'] == '' ? $options[60] = 'thumbDisplayOrder: false' : $options[60] = 'thumbDisplayOrder: true');

            // type: Function or String
            if ($arrOptions[0]['dataSort'] != NULL)
                $options[61] = $arrOptions[0]['dataSort'];

            // Reindex the array
            $options = array_values($options);
            $totalOptions = count($options);

            // Add commas
            for ($i = 0; $i < $totalOptions-1; $i++) {
                $options[$i] = $options[$i] . ",\n";
            }

            // Create the list of options as a String
            for ($i = 0; $i < $totalOptions; $i++) {
                $strOptions .= ( $options[$i]);
            }

            // add the options in the template
            $template->options = $strOptions;

            // Add JSON if exist
            ($arrOptions[0]['json'] != NULL ? ($template->json = $arrOptions[0]['json']) : ($template->json = ""));

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
            $totalFlickrOptions = count($flickrOptions);

            // Add commas
            for ($i = 0; $i < $totalFlickrOptions-1; $i++) {
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
            $totalPicasaOptions = count($picasaOptions);

            // Add commas
            for ($i = 0; $i < $totalPicasaOptions-1; $i++) {
                $picasaOptions[$i] = $picasaOptions[$i] . ",\n";
            }
        }

        // Build Flickr JS function
        $flickrFunction = 'flickr: \''.$arrOptions[0]['flickrMethods'].':'.$arrOptions[0]['flickrMethodsValue'].'\'' . "\n";

        if (!empty($flickrOptions)) {
            $flickrFunction .= ",\n";
            $flickrFunction .= "flickrOptions: { \n";

            for ($i = 0; $i < $totalFlickrOptions; $i++) {
                $flickrFunction .= ( $flickrOptions[$i]);
            }

            $flickrFunction .= ' }';
        }

        $template->flickrFunction = $flickrFunction;


        // Build Picasa JS function
        $picasaFunction = 'picasa: \''.$arrOptions[0]['picasaMethods'].':'.$arrOptions[0]['picasaMethodsValue'].'\'' . "\n";

        if (!empty($picasaOptions)) {
            $picasaFunction .= ",\n";
            $picasaFunction .= "picasaOptions: { \n";

            for ($i = 0; $i < $totalPicasaOptions; $i++) {
                $picasaFunction .= ( $picasaOptions[$i]);
            }

            $picasaFunction .= ' }';
        }

        $template->picasaFunction = $picasaFunction;


        // Path for the function loadTheme() included in the template
        $foldersName = self::getGalleriaTheme($database, $galerie);
        $path = implode("/", $foldersName);

        if($arrOptions[0]['minifiedJS'] != '1')
            $pathJS = $path . '/' . $foldersName[1] . '.' . $foldersName[3] . '.js';
        else
            $pathJS = $path . '/' . $foldersName[1] . '.' . $foldersName[3] . '.min.js';

        $template->pathJS = $pathJS;


        // Use alias and module ID for the ID container (id="{alias}-{moduleID}")
        $template->alias = $objOptions->alias;
        $template->moduleID = $galerie;
    }

    /**
     * Test if the Flickr plugin is enabled or not
     *
     * @access public
     * @return boolean
     */
    public function isFlickrEnabled($database, $galerie, $template) {

        $objFlickr = $database->prepare("SELECT flickr FROM tl_galerie WHERE id=? AND published=1")
                ->limit(1)
                ->execute($galerie);

        if ($objFlickr->flickr == NULL)
            $isFlickrEnabled = FALSE;
        else
            $isFlickrEnabled = TRUE;

        // Boolean : Does the Flickr plugin is enabled ?
        $template->flickr = $isFlickrEnabled;

        return $isFlickrEnabled;
    }

    /**
     * Test if the Picasa plugin is enabled or not
     *
     * @access public
     * @return boolean
     */
    public function isPicasaEnabled($database, $galerie, $template) {

        $objPicasa = $database->prepare("SELECT picasa FROM tl_galerie WHERE id=? AND published=1")
                ->limit(1)
                ->execute($galerie);

        if ($objPicasa->picasa == NULL)
            $isPicasaEnabled = FALSE;
        else
            $isPicasaEnabled = TRUE;

        // Boolean : Does the Picasa plugin is enabled ?
        $template->picasa = $isPicasaEnabled;

        return $isPicasaEnabled;
    }

    /**
     * Test if the History plugin is enabled or not
     *
     * @access public
     * @return boolean
     */
    public function isHistoryEnabled($database, $galerie) {

        $objHistory = $database->prepare("SELECT history FROM tl_galerie WHERE id=? AND published=1")
                ->limit(1)
                ->execute($galerie);

        if ($objHistory->history == NULL)
            $isHistoryEnabled = FALSE;
        else
            $isHistoryEnabled = TRUE;

        return $isHistoryEnabled;
    }

    /**
     * Get gallery pictures
     *
     * @access public
     * @return null
     */
    public function getPictures($database, $galerie, $template, $imagesFolder, $sortBy) {

        // Adds a group of images from a folder
        $imagesFolder = deserialize($imagesFolder);
        $this->objFiles = \FilesModel::findMultipleByIds($imagesFolder);

        global $objPage;
        $images = array();
        $auxDate = array();
        $auxId = array();
        $objFiles = $this->objFiles;

        if ($this->objFiles !== null) {

            // Get all images
            while ($objFiles->next())
            {
                // Continue if the files has been processed or does not exist
                if (isset($images[$objFiles->path]) || !file_exists(TL_ROOT . '/' . $objFiles->path))
                {
                    continue;
                }

                // Single files
                if ($objFiles->type == 'file')
                {
                    $objFile = new \File($objFiles->path);

                    if (!$objFile->isGdImage)
                    {
                        continue;
                    }

                    $arrMeta = $this->getMetaData($objFiles->meta, $objPage->language);

                    // Use the file name as title if none is given
                    if ($arrMeta['title'] == '')
                    {
                        $arrMeta['title'] = specialchars(str_replace('_', ' ', preg_replace('/^[0-9]+_/', '', $objFile->filename)));
                    }

                    // Add the image
                    $images[$objFiles->path] = array
                    (
                        'id'           => $objFiles->id,
                        'name'         => $objFile->basename,
                        'imageSRC'     => $objFiles->path,
                        'thumbnailSRC' => \Image::get($this->urlEncode($objFiles->path), '100px', NULL, 'center_center'),
                        'title'        => $arrMeta['title'],
                        'imageUrl'     => $arrMeta['link'],
                        'alt'          => $arrMeta['caption']
                    );

                    $auxDate[] = $objFile->mtime;
                    $auxId[] = $objFiles->id;
                }

                // Folders
                else
                {
                    $objSubfiles = \FilesModel::findByPid($objFiles->id);

                    if ($objSubfiles === null)
                    {
                        continue;
                    }

                    while ($objSubfiles->next())
                    {
                        // Skip subfolders
                        if ($objSubfiles->type == 'folder')
                        {
                            continue;
                        }

                        $objFile = new \File($objSubfiles->path);

                        if (!$objFile->isGdImage)
                        {
                            continue;
                        }

                        $arrMeta = $this->getMetaData($objSubfiles->meta, $objPage->language);

                        // Use the file name as title if none is given
                        if ($arrMeta['title'] == '')
                        {
                            $arrMeta['title'] = specialchars(str_replace('_', ' ', preg_replace('/^[0-9]+_/', '', $objFile->filename)));
                        }

                        // Add the image
                        $images[$objSubfiles->path] = array
                        (
                            'id'           => $objSubfiles->id,
                            'name'         => $objFile->basename,
                            'imageSRC'     => $objSubfiles->path,
                            'thumbnailSRC' => \Image::get($this->urlEncode($objSubfiles->path), '100px', NULL, 'center_center'),
                            'title'        => $arrMeta['title'],
                            'imageUrl'     => $arrMeta['link'],
                            'alt'          => $arrMeta['caption']
                        );

                        $auxDate[] = $objFile->mtime;
                        $auxId[] = $objSubfiles->id;
                    }
                }
            }

            // Sort array
            switch ($sortBy)
            {
                default:
                case 'name_asc':
                        uksort($images, 'basename_natcasecmp');
                        break;

                case 'name_desc':
                        uksort($images, 'basename_natcasercmp');
                        break;

                case 'date_asc':
                        array_multisort($images, SORT_NUMERIC, $auxDate, SORT_ASC);
                        break;

                case 'date_desc':
                        array_multisort($images, SORT_NUMERIC, $auxDate, SORT_DESC);
                        break;

                case 'meta': // Backwards compatibility
                case 'custom':
                        if ($this->orderSRC != '')
                        {
                            // Turn the order string into an array
                            $arrOrder = array_flip(array_map('intval', explode(',', $this->orderSRC)));

                            // Move the matching elements to their position in $arrOrder
                            foreach ($images as $k=>$v)
                            {
                                if (isset($arrOrder[$v['id']]))
                                {
                                    $arrOrder[$v['id']] = $v;
                                    unset($images[$k]);
                                }
                            }

                            // Append the left-over images at the end
                            if (!empty($images))
                            {
                                $arrOrder = array_merge($arrOrder, $images);
                            }

                            // Remove empty or numeric (not replaced) entries
                            foreach ($arrOrder as $k=>$v)
                            {
                                if ($v == '' || is_numeric($v))
                                {
                                    unset($arrOrder[$k]);
                                }
                            }

                            $images = $arrOrder;
                            unset($arrOrder);
                        }
                        break;

                case 'random':
                        shuffle($images);
                        break;
            }

            $images = array_values($images);
            $total = count($images);
        }
        else {
            $total = 0;
        }

        // Retrieve the current gallery images
        $objPictures = $database->prepare("SELECT * FROM tl_galerie_pictures WHERE pid=? AND published=1 ORDER BY sorting")
                ->execute($galerie);

        if ($objPictures->numRows > 0) {

            while ($objPictures->next()) {

                // Standard image
                $imgSize = deserialize($objPictures->size);
                $objImg = \FilesModel::findByPk($objPictures->singleSRC);
                $imageSRC = \Image::get($this->urlEncode($objImg->path), $imgSize[0], $imgSize[1], $imgSize[2]);

                // Fullscreen image
                $objFullscreenImgSRC = \FilesModel::findByPk($objPictures->fullscreenSingleSRC);

                // Thumbnails are created separately.
                $thumbSize = deserialize($objPictures->thumbSize);
                $objThumb = \FilesModel::findByPk($objPictures->thumbSRC);

                // Is there an alternative thumbnail ? If not, we create the thumbnail from the main image.
                ($objPictures->thumbSRC ? ($thumbnail = $objThumb->path) : ($thumbnail = $objImg->path));

                if($thumbSize[0] == NULL && $thumbSize[1] == NULL)
                    $thumbnailSRC = \Image::get($this->urlEncode($thumbnail), '100px', NULL, 'center_center');
                else
                    $thumbnailSRC = \Image::get($this->urlEncode($thumbnail), $thumbSize[0], $thumbSize[1], $thumbSize[2]);

                $arrPictures[$objPictures->id] = array(
                    'alt'                   => $objPictures->alt,
                    'title'                 => $objPictures->title,
                    'imageUrl'              => $objPictures->imageUrl,
                    'imageSRC'              => $imageSRC,
                    'thumbnailSRC'          => $thumbnailSRC,
                    'imageFullscreenSRC'    => $this->urlEncode($objFullscreenImgSRC->path),
                    'video'                 => $this->urlVerification($objPictures->video),
                    'videoThumb'            => $objPictures->videoThumb,
                    'iframe'                => $objPictures->iframe,
                    'iframeThumb'           => $objPictures->iframeThumb,
                    'layer'                 => htmlentities($objPictures->layerHTML),
                    'HTMLlayer'             => $objPictures->dataConfigHTML
                );
            }

            $pictures = array_values($arrPictures);

            // Add a group of pictures
            if($total > 0)
                $pictures = array_merge($pictures, $images);

            $template->pictures = $pictures;
        }
        else if($total > 0) {
            $template->pictures = $images;
        }
        else {
            $template->pictures = array();
            $template->noImages = $GLOBALS['TL_LANG']['MSC']['noImages'];
        }
    }

    /**
     * Return the URL and the name of the theme
     *
     * @access public
     * @return array
     */
    public function getGalleriaTheme($database, $galerie) {

        $objThemesSRC = $database->prepare("SELECT themesSRC FROM tl_galerie WHERE id=? AND published=1")
                ->limit(1)
                ->execute($galerie);

        $objThemes = \FilesModel::findByPk($objThemesSRC->themesSRC);

        $theme = explode("/", $objThemes->path);

        /* Example of results with default theme
         *
         * $theme[0] = files
         * $theme[1] = galleria
         * $theme[2] = themes
         * $theme[3] = classic
         */
        return $theme;
    }

    /**
     * Check if there is the prefix "http://" and if not, add it.
     *
     * @access public
     * @param String
     * @return String
     */
    public static function urlVerification($url) {

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