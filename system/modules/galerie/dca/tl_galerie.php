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
 * Table tl_galerie
 */
$GLOBALS['TL_DCA']['tl_galerie'] = array
    (

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'ctable'                      => array('tl_galerie_pictures'),
        'switchToEdit'                => true,
        'enableVersioning'            => true,
        'onload_callback'             => array
        (
            array('tl_galerie', 'checkPermission'),
        ),
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 1,
            'fields'                  => array('title'),
            'flag'                    => 1,
            'panelLayout'             => 'filter;search,limit'
        ),
        'label' => array
        (
            'fields'                  => array('title'),
            'format'                  => '%s',
            'label_callback'          => array('tl_galerie', 'addPicturesNumber')
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_galerie']['edit'],
                'href'                => 'table=tl_galerie_pictures',
                'icon'                => 'edit.gif'
            ),
            'editheader' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_galerie']['editheader'],
                'href'                => 'act=edit',
                'icon'                => 'header.gif',
                'button_callback'     => array('tl_galerie', 'editHeader'),
                'attributes'          => 'class="edit-header"'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_galerie']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif',
                'button_callback'     => array('tl_galerie', 'copyGalleria')
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_galerie']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"',
                'button_callback'     => array('tl_galerie', 'deleteGalleria')
            ),
            'toggle' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_galerie']['toggle'],
                'icon'                => 'visible.gif',
                'attributes'          => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleVisibility(this, %s);"',
                'button_callback'     => array('tl_galerie', 'toggleIcon')
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_galerie']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        '__selector__'                => array('autoplay', 'lightbox', 'flickr', 'picasa'),
        'default'                     => '{title_legend},title,alias;{themes_legend},themesSRC;{dimensions_legend},width,height,responsive;{effects_legend},initialTransition,transition,fullscreenTransition,touchTransition,transitionSpeed,easing,queue;{navigation_legend},clicknext,popupLinks,swipe;{fullscreen_legend},fullscreenCrop,fullscreenDoubleTap,trueFullscreen;{show_legend},gShow,showInfo,showImagenav,showCounter,variation;{autoplay_legend},autoplay,pauseOnInteraction;{lightbox_legend},lightbox;{images_legend},imageCrop,imageMargin,imagePosition,imagePan,imagePanSmoothness,preload,maxScaleRatio,layerFollow;{carousel_legend},carousel,carouselFollow,carouselSpeed,carouselSteps;{thumbnails_legend},thumbnails,thumbCrop,thumbMargin,thumbQuality,thumbDisplayOrder,thumbPosition;{idle_legend},idleMode,idleTime,idleSpeed;{video_legend},dailymotion,vimeo,youtube,maxVideoSize,videoPoster;{flickr_legend},flickr;{picasa_legend},picasa;{history_legend},history;{error_legend},dummy,imageTimeout,wait;{extend_legend},extend,dataConfig,dataSort,json,dataSource,dataSelector,keepSource,debug;{publish_legend},published'
    ),

    // Subpalettes
    'subpalettes' => array
    (
        'lightbox'                            => 'lightboxFadeSpeed,lightboxTransitionSpeed,overlayBackground,overlayOpacity',
        'autoplay'                            => 'autoplayInterval',
        'flickr'                              => 'flickrMethods,flickrMethodsValue,flickrOptMax,flickrOptImageSize,flickrOptThumbSize,flickrOptSort,flickrOptDescription',
        'picasa'                              => 'picasaMethods,picasaMethodsValue,picasaOptMax,picasaOptImageSize,picasaOptThumbSize'
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'published' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['published'],
            'exclude'                 => true,
            'filter'                  => true,
            'flag'                    => 2,
            'inputType'               => 'checkbox',
            'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'title' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['title'],
            'exclude'                 => true,
            'search'                  => true,
            'sorting'                 => true,
            'flag'                    => 1,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'alias' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['alias'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'alnum', 'doNotCopy'=>true, 'spaceToUnderscore'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
            'save_callback' => array (
                array('tl_galerie', 'generateAlias')
            ),
            'sql'                     => "varchar(128) NOT NULL default ''"
        ),
        'themesSRC' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['themesSRC'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('fieldType'=>'radio', 'path'=>$GLOBALS['TL_CONFIG']['uploadPath'], 'mandatory'=>true, 'files'=>false),
            'sql'                     => "binary(16) NULL"
        ),
        'width' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['width'],
            'exclude'                 => true,
            'default'                 => '650',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default 'auto'"
        ),
        'height' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['height'],
            'exclude'                 => true,
            'default'                 => '300',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "double unsigned NOT NULL default '0'"
        ),
        'transition' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['transition'],
            'exclude'                 => true,
            'default'                 => 'fade',
            'inputType'               => 'select',
            'options'                 => array('fade', 'flash', 'pulse', 'slide', 'fadeslide', 'doorslide'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'fullscreenTransition' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['fullscreenTransition'],
            'exclude'                 => true,
            'default'                 => 'undefined',
            'inputType'               => 'select',
            'options'                 => array('undefined', 'fade', 'flash', 'pulse', 'slide', 'fadeslide', 'doorslide'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'touchTransition' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['touchTransition'],
            'exclude'                 => true,
            'default'                 => 'undefined',
            'inputType'               => 'select',
            'options'                 => array('undefined', 'fade', 'flash', 'pulse', 'slide', 'fadeslide', 'doorslide'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'initialTransition' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['initialTransition'],
            'exclude'                 => true,
            'default'                 => 'undefined',
            'inputType'               => 'select',
            'options'                 => array('undefined', 'fade', 'flash', 'pulse', 'slide', 'fadeslide', 'doorslide'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'transitionSpeed' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['transitionSpeed'],
            'exclude'                 => true,
            'default'                 => '400',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'clicknext' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['clicknext'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        // The real name of the function is "show" but this name is already used in the language files so it's replaced by "gShow"
        'gShow' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['gShow'],
            'exclude'                 => true,
            'default'                 => '0',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'showInfo' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['showInfo'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'showImagenav' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['showImagenav'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'showCounter' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['showCounter'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'lightbox' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['lightbox'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'lightboxFadeSpeed' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['lightboxFadeSpeed'],
            'exclude'                 => true,
            'default'                 => '200',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'lightboxTransitionSpeed' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['lightboxTransitionSpeed'],
            'exclude'                 => true,
            'default'                 => '300',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'overlayBackground' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['overlayBackground'],
            'default'                 => '0b0b0b',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(6) NOT NULL default ''"
        ),
        'overlayOpacity' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['overlayOpacity'],
            'exclude'                 => true,
            'default'                 => '0.85',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "float unsigned NOT NULL default '0'"
        ),
        'imageCrop' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imageCrop'],
            'exclude'                 => true,
            'default'                 => 'false',
            'inputType'               => 'select',
            'options'                 => array('false', 'true', 'height', 'width', 'landscape', 'portrait'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50', 'helpwizard'=>true),
            'explanation'             => 'cropMethods',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'imageMargin' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imageMargin'],
            'exclude'                 => true,
            'default'                 => '0',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'imagePan' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imagePan'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'imagePanSmoothness' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imagePanSmoothness'],
            'exclude'                 => true,
            'default'                 => '12',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'imagePosition' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imagePosition'],
            'exclude'                 => true,
            'default'                 => 'center',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'thumbPosition' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['thumbPosition'],
            'exclude'                 => true,
            'default'                 => 'center',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default 'center'"
        ),
        'maxScaleRatio' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['maxScaleRatio'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "float unsigned NOT NULL default '0'"
        ),
        'autoplay' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['autoplay'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'autoplayInterval' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['autoplayInterval'],
            'exclude'                 => true,
            'default'                 => '5000',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'pauseOnInteraction' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['pauseOnInteraction'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'carousel' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['carousel'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'carouselSpeed' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['carouselSpeed'],
            'exclude'                 => true,
            'default'                 => '200',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'carouselSteps' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['carouselSteps'],
            'exclude'                 => true,
            'default'                 => 'auto',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'thumbnails' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['thumbnails'],
            'exclude'                 => true,
            'default'                 => 'true',
            'inputType'               => 'select',
            'options'                 => array('true', 'false', 'empty', 'numbers', 'lazy'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'thumbCrop' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['thumbCrop'],
            'exclude'                 => true,
            'default'                 => 'true',
            'inputType'               => 'select',
            'options'                 => array('false', 'true', 'height', 'width', 'landscape', 'portrait'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50', 'helpwizard'=>true),
            'explanation'             => 'cropMethods',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'thumbMargin' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['thumbMargin'],
            'exclude'                 => true,
            'default'                 => '0',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'thumbQuality' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['thumbQuality'],
            'exclude'                 => true,
            'default'                 => 'true',
            'inputType'               => 'select',
            'options'                 => array('true', 'false', 'auto'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'easing' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['easing'],
            'exclude'                 => true,
            'default'                 => 'galleria',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'popupLinks' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['popupLinks'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'extend' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['extend'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace|javascript', 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        ),
        'dataConfig' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['dataConfig'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace|javascript', 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        ),
        'preload' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['preload'],
            'exclude'                 => true,
            'default'                 => '2',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'debug' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['debug'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'queue' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['queue'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'swipe' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['swipe'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'fullscreenDoubleTap' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['fullscreenDoubleTap'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'flickr' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickr'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'flickrMethods' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrMethods'],
            'exclude'                 => true,
            'default'                 => 'search',
            'inputType'               => 'select',
            'options'                 => array('search', 'tags', 'user', 'set', 'gallery', 'groupsearch', 'group'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50', 'helpwizard'=>true),
            'explanation'             => 'flickrMethods',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'flickrMethodsValue' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrMethodsValue'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'flickrOptMax' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrOptMax'],
            'exclude'                 => true,
            'default'                 => '30',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'flickrOptImageSize' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrOptImageSize'],
            'exclude'                 => true,
            'default'                 => 'medium',
            'inputType'               => 'select',
            'options'                 => array('small', 'thumb', 'medium', 'big', 'original'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50','helpwizard'=>true),
            'explanation'             => 'flickrOptImageSize',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'flickrOptThumbSize' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrOptThumbSize'],
            'exclude'                 => true,
            'default'                 => 'thumb',
            'inputType'               => 'select',
            'options'                 => array('small', 'thumb', 'medium', 'big', 'original'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50','helpwizard'=>true),
            'explanation'             => 'flickrOptImageSize',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'flickrOptSort' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrOptSort'],
            'exclude'                 => true,
            'default'                 => 'interestingness-desc',
            'inputType'               => 'select',
            'options'                 => array('date-posted-asc', 'date-posted-desc', 'date-taken-asc', 'date-taken-desc', 'interestingness-desc', 'interestingness-asc', 'relevance'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'flickrOptDescription' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrOptDescription'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'history' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['history'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'dummy' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['dummy'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('fieldType'=>'radio', 'files' => true, 'filesOnly' => true),
            'sql'                     => "binary(16) NULL"
        ),
        'layerFollow' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['layerFollow'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'imageTimeout' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imageTimeout'],
            'exclude'                 => true,
            'default'                 => '30000',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'fullscreenCrop' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['fullscreenCrop'],
            'exclude'                 => true,
            'default'                 => 'landscape',
            'inputType'               => 'select',
            'options'                 => array('undefined', 'false', 'true', 'height', 'width', 'landscape', 'portrait'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50', 'helpwizard'=>true),
            'explanation'             => 'cropMethods',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'picasa' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['picasa'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'picasaMethods' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['picasaMethods'],
            'exclude'                 => true,
            'default'                 => 'search',
            'inputType'               => 'select',
            'options'                 => array('search', 'user', 'useralbum'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50','helpwizard'=>true),
            'explanation'             => 'picasaMethods',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'picasaMethodsValue' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['picasaMethodsValue'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'picasaOptMax' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['picasaOptMax'],
            'exclude'                 => true,
            'default'                 => '30',
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'picasaOptImageSize' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['picasaOptImageSize'],
            'exclude'                 => true,
            'default'                 => 'medium',
            'inputType'               => 'select',
            'options'                 => array('small', 'thumb', 'medium', 'big', 'original'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50','helpwizard'=>true),
            'explanation'             => 'flickrOptImageSize',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'picasaOptThumbSize' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['picasaOptThumbSize'],
            'exclude'                 => true,
            'default'                 => 'thumb',
            'inputType'               => 'select',
            'options'                 => array('small', 'thumb', 'medium', 'big', 'original'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50','helpwizard'=>true),
            'explanation'             => 'flickrOptImageSize',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'dailymotion' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['dailymotion'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('allowHtml'=>true, 'preserveTags'=>true,  'tl_class'=>'clr'),
            'load_callback' => array (
                array('tl_galerie', 'getDefaultOptionsForDailymotion')
            ),
            'sql'                     => "text NULL"
        ),
        'vimeo' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['vimeo'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('allowHtml'=>true, 'preserveTags'=>true,  'tl_class'=>'clr'),
            'load_callback' => array (
                array('tl_galerie', 'getDefaultOptionsForVimeo')
            ),
            'sql'                     => "text NULL"
        ),
        'youtube' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['youtube'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('allowHtml'=>true, 'preserveTags'=>true,  'tl_class'=>'clr'),
            'load_callback' => array (
                array('tl_galerie', 'getDefaultOptionsForYouTube')
            ),
            'sql'                     => "text NULL"
        ),
        'trueFullscreen' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['trueFullscreen'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'responsive' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['responsive'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'wait' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['wait'],
            'exclude'                 => true,
            'default'                 => '5000',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'dataSource' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['dataSource'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'dataSelector' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['dataSelector'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'keepSource' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['keepSource'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'json' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['json'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace', 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        ),
        'idleMode' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['idleMode'],
            'exclude'                 => true,
            'default'                 => 'true',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>32, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default 'true'"
        ),
        'idleTime' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['idleTime'],
            'exclude'                 => true,
            'default'                 => '3000',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'idleSpeed' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['idleSpeed'],
            'exclude'                 => true,
            'default'                 => '200',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'thumbDisplayOrder' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['thumbDisplayOrder'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default '1'"
        ),
        'dataSort' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['dataSort'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace|javascript', 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        ),
        'maxVideoSize' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['maxVideoSize'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'variation' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['variation'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'videoPoster' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['videoPoster'],
            'exclude'                 => true,
            'default'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default '1'"
        )
    )
);

/**
 * Class tl_galerie
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @package Controller
 */
class tl_galerie extends Backend
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
     * Count the number of pictures, videos and iframes in the database
     * @param array
     * @param string
     * @return string
     */
    public function addPicturesNumber($row, $label)
    {
        // Calculates the total number of elements
        $objTotal = $this->Database->prepare("SELECT COUNT(*) AS count FROM tl_galerie_pictures WHERE pid=?")
            ->execute($row['id']);


        // Retrieve the current gallery videos
        $objVideo = $this->Database->prepare("SELECT video FROM tl_galerie_pictures WHERE pid=?")
            ->execute($row['id']);

        while ($objVideo->next()) {
            $arrVideo[] = $objVideo->row();
        }
        // Calculates the total number of videos
        $video = $this->countsNumberOfKeysWithoutEmptyValues($arrVideo);

        // Retrieve the current gallery iframes
        $objIframe = $this->Database->prepare("SELECT iframe FROM tl_galerie_pictures WHERE pid=?")
            ->execute($row['id']);

        while ($objIframe->next()) {
            $arrIframe[] = $objIframe->row();
        }
        // Calculates the total number of iframes
        $iframe = $this->countsNumberOfKeysWithoutEmptyValues($arrIframe);

        // Calculates the total number of images
        $image = $objTotal->count - $video - $iframe;


        // Adds the designation with the number
        if ($objTotal->count > 1) {
            $label_total = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_datas'], $objTotal->count);
        } else {
            $label_total = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_data'], $objTotal->count);
        }

        if ($video > 1) {
            $label_video = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_videos'], $video);
        } else {
            $label_video = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_video'], $video);
        }

        if ($image > 1) {
            $label_image = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_images'], $image);
        } else {
            $label_image = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_image'], $image);
        }

        if ($iframe > 1) {
            $label_iframe = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_iframes'], $iframe);
        } else {
            $label_iframe = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_iframe'], $iframe);
        }

        $label .= ' <span style="color:#b3b3b3; padding-left:3px;">[' . $label_total  . " : " . $label_video . " - " . $label_image . " - " . $label_iframe . ']</span>';

        return $label;
    }

    /**
     * Counts the number of keys of an array without empty values
     * @param array
     * @return int
     */
    protected function countsNumberOfKeysWithoutEmptyValues($array)
    {
        if ($array == null) {
            $countSum = 0;
        } else {
            $result = array_map('array_filter', $array);
            $count = array_map('count', $result);
            $countSum = array_sum($count);
        }
        return $countSum;
    }

    /**
     * Autogenerate a galerie alias if it has not been set yet
     * @param mixed
     * @param object
     * @return string
     */
    public function generateAlias($varValue, DataContainer $dc)
    {
        $autoAlias = false;

        // Generate alias if there is none
        if ($varValue == '') {
            $autoAlias = true;
            $strClass = version_compare(VERSION . '.' . BUILD, '3.5.1', '<') ? '\String' : '\StringUtil';
            $varValue = standardize($strClass::restoreBasicEntities($dc->activeRecord->title));
        }

        $objAlias = $this->Database->prepare("SELECT id FROM tl_galerie WHERE alias=?")->execute($varValue);

        // Check whether the galerie alias exists
        if ($objAlias->numRows > 1 && !$autoAlias) {
            throw new Exception(sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
        }

        // Add ID to alias
        if ($objAlias->numRows && $autoAlias) {
            $varValue .= '-' . $dc->id;
        }

        return $varValue;
    }

    /**
     * Return the "toggle visibility" button
     * @param array
     * @param string
     * @param string
     * @param string
     * @param string
     * @param string
     * @return string
     */
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
    {
        if (strlen(Input::get('tid'))) {
            $this->toggleVisibility(Input::get('tid'), (Input::get('state') == 1));
            $this->redirect($this->getReferer());
        }

        // Check permissions AFTER checking the tid, so hacking attempts are logged
        if (!$this->User->isAdmin && !$this->User->hasAccess('tl_galerie::published', 'alexf')) {
            return '';
        }

        $href .= '&amp;tid=' . $row['id'] . '&amp;state=' . ($row['published'] ? '' : 1);

        if (!$row['published']) {
            $icon = 'invisible.gif';
        }

        return '<a href="' . $this->addToUrl($href) . '" title="' . specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ';
    }


    /**
     * Disable/enable a user group
     * @param integer
     * @param boolean
     */
    public function toggleVisibility($intId, $blnVisible)
    {
        // Check permissions to edit
        Input::setGet('id', $intId);
        Input::setGet('act', 'toggle');
        $this->checkPermission();

        // Check permissions to publish
        if (!$this->User->isAdmin && !$this->User->hasAccess('tl_galerie::published', 'alexf')) {
            $this->log('Not enough permissions to publish/unpublish gallery ID "'.$intId.'"', __METHOD__, TL_ERROR);
            $this->redirect('contao/main.php?act=error');
        }

        $objVersions = new Versions('tl_galerie', $intId);
        $objVersions->initialize();

        // Trigger the save_callback
        if (is_array($GLOBALS['TL_DCA']['tl_galerie']['fields']['published']['save_callback'])) {
            foreach ($GLOBALS['TL_DCA']['tl_galerie']['fields']['published']['save_callback'] as $callback) {
                $this->import($callback[0]);
                $blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
            }
        }

        // Update the database
        $this->Database->prepare("UPDATE tl_galerie SET tstamp=". time() .", published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
            ->execute($intId);

        $objVersions->create();
        $this->log('A new version of record "tl_galerie.id='.$intId.'" has been created'.$this->getParentEntries('tl_galerie', $intId), __METHOD__, TL_GENERAL);
    }

    /**
     * Return the edit header button
     * @param array
     * @param string
     * @param string
     * @param string
     * @param string
     * @param string
     * @return string
     */
    public function editHeader($row, $href, $label, $title, $icon, $attributes)
    {
        return ($this->User->isAdmin || count(preg_grep('/^tl_galerie::/', $this->User->alexf)) > 0) ? '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ' : Image::getHtml(preg_replace('/\.gif$/i', '_.gif', $icon)).' ';
    }

    /**
     * Load the default options for Vimeo
     * @param string
     * @return string
     */
    public function getDefaultOptionsForVimeo($varValue, DataContainer $dc)
    {
        if (!trim($varValue)) {
            $varValue = $GLOBALS['TL_LANG']['tl_galerie']['vimeo_options'];
        }

        return $varValue;
    }

    /**
     * Load the default options for YouTube
     * @param string
     * @return string
     */
    public function getDefaultOptionsForYouTube($varValue, DataContainer $dc)
    {
        if (!trim($varValue)) {
            $varValue = $GLOBALS['TL_LANG']['tl_galerie']['youtube_options'];
        }

        return $varValue;
    }

    /**
     * Load the default options for Dailymotion
     * @param string
     * @return string
     */
    public function getDefaultOptionsForDailymotion($varValue, DataContainer $dc)
    {
        if (!trim($varValue)) {
            $varValue = $GLOBALS['TL_LANG']['tl_galerie']['dailymotion_options'];
        }

        return $varValue;
    }

    /**
     * Check permissions to edit table tl_galerie
     */
    public function checkPermission()
    {
        if ($this->User->isAdmin) {
            return;
        }

        // Set root IDs
        if (!is_array($this->User->galleria) || empty($this->User->galleria)) {
            $root = array(0);
        } else {
            $root = $this->User->galleria;
        }

        $GLOBALS['TL_DCA']['tl_galerie']['list']['sorting']['root'] = $root;

        // Check permissions to add galleries
        if (!$this->User->hasAccess('create', 'galleria_permission')) {
            $GLOBALS['TL_DCA']['tl_galerie']['config']['closed'] = true;
        }

        // Check current action
        switch (Input::get('act')) {
            case 'create':
            case 'select':
                // Allow
                break;

            case 'edit':
                // Dynamically add the record to the user profile
                if (!in_array(Input::get('id'), $root)) {
                    $arrGalleria = $this->Session->get('new_records');

                    if (is_array($arrGalleria['tl_galerie']) && in_array(Input::get('id'), $arrGalleria['tl_galerie'])) {
                        // Add permissions on user level
                        if ($this->User->inherit == 'custom' || !$this->User->groups[0]) {
                            $objUser = $this->Database->prepare("SELECT galleria, galleria_permission FROM tl_user WHERE id=?")
                                ->limit(1)
                                ->execute($this->User->id);

                            $arrGalleriaPermission = deserialize($objUser->galleria_permission);

                            if (is_array($arrGalleriaPermission) && in_array('create', $arrGalleriaPermission)) {
                                $arrGallerias = deserialize($objUser->galleria);
                                $arrGallerias[] = Input::get('id');

                                $this->Database->prepare("UPDATE tl_user SET galleria=? WHERE id=?")
                                    ->execute(serialize($arrGallerias), $this->User->id);
                            }
                        }
                        // Add permissions on group level
                        elseif ($this->User->groups[0] > 0) {
                            $objGroup = $this->Database->prepare("SELECT galleria, galleria_permission FROM tl_user_group WHERE id=?")
                                ->limit(1)
                                ->execute($this->User->groups[0]);

                            $arrGalleriaPermission = deserialize($objGroup->galleria_permission);

                            if (is_array($arrGalleriaPermission) && in_array('create', $arrGalleriaPermission)) {
                                $arrGallerias = deserialize($objGroup->galleria);
                                $arrGallerias[] = Input::get('id');

                                $this->Database->prepare("UPDATE tl_user_group SET galleria=? WHERE id=?")
                                    ->execute(serialize($arrGallerias), $this->User->groups[0]);
                            }
                        }

                        // Add new element to the user object
                        $root[] = Input::get('id');
                        $this->User->galleria = $root;
                    }
                }
                // No break;

            case 'copy':
            case 'delete':
            case 'toggle':
            case 'show':
                if (!in_array(Input::get('id'), $root) || (Input::get('act') == 'delete' && !$this->User->hasAccess('delete', 'galleria_permission'))) {
                    $this->log('Not enough permissions to '.Input::get('act').' gallery ID "'.Input::get('id').'"', __METHOD__, TL_ERROR);
                    $this->redirect('contao/main.php?act=error');
                }
                break;

            case 'editAll':
            case 'deleteAll':
            case 'overrideAll':
                $session = $this->Session->getData();
                if (Input::get('act') == 'deleteAll' && !$this->User->hasAccess('delete', 'galleria_permission')) {
                    $session['CURRENT']['IDS'] = array();
                } else {
                    $session['CURRENT']['IDS'] = array_intersect($session['CURRENT']['IDS'], $root);
                }
                $this->Session->setData($session);
                break;

            default:
                if (strlen(Input::get('act'))) {
                    $this->log('Not enough permissions to '.Input::get('act').' galleries', __METHOD__, TL_ERROR);
                    $this->redirect('contao/main.php?act=error');
                }
                break;
        }
    }

    /**
    * Return the copy Galleria button
    * @param array
    * @param string
    * @param string
    * @param string
    * @param string
    * @param string
    * @return string
    */
    public function copyGalleria($row, $href, $label, $title, $icon, $attributes)
    {
        return ($this->User->isAdmin || $this->User->hasAccess('create', 'galleria_permission')) ? '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ' : Image::getHtml(preg_replace('/\.gif$/i', '_.gif', $icon)).' ';
    }

    /**
     * Return the delete Galleria button
     * @param array
     * @param string
     * @param string
     * @param string
     * @param string
     * @param string
     * @return string
     */
    public function deleteGalleria($row, $href, $label, $title, $icon, $attributes)
    {
        return ($this->User->isAdmin || $this->User->hasAccess('delete', 'galleria_permission')) ? '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ' : Image::getHtml(preg_replace('/\.gif$/i', '_.gif', $icon)).' ';
    }
}
