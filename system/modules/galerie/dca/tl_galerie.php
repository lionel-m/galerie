<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

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
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title'),
			'flag'                    => 1,
                        'panelLayout'             => 'filter;search'
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
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_galerie']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
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
		'default'                     => '{title_legend},title,alias;{themes_legend},themesSRC,minifiedJS;{dimensions_legend},width,height,responsive;{effects_legend},initialTransition,transition,fullscreenTransition,touchTransition,transitionSpeed,easing,queue;{navigation_legend},clicknext,popupLinks,swipe;{fullscreen_legend},fullscreenCrop,fullscreenDoubleTap,trueFullscreen;{show_legend},gShow,showInfo,showImagenav,showCounter;{autoplay_legend},autoplay,pauseOnInteraction;{lightbox_legend},lightbox;{images_legend},imageCrop,imageMargin,imagePosition,imagePan,imagePanSmoothness,preload,minScaleRatio,maxScaleRatio,layerFollow;{carousel_legend},carousel,carouselFollow,carouselSpeed,carouselSteps;{thumbnails_legend},thumbnails,thumbCrop,thumbMargin,thumbFit,thumbQuality;{video_legend},dailymotion,vimeo,youtube;{flickr_legend},flickr;{picasa_legend},picasa;{history_legend},history;{error_legend},dummy,imageTimeout,wait;{extend_legend},extend,dataConfig,debug;{publish_legend},published'
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
                'published' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['published'],
                        'exclude'                 => true,
                        'filter'                  => true,
                        'flag'                    => 2,
                        'inputType'               => 'checkbox',
                        'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'w50 m12')
                ),    
                'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'alias' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['alias'],
                        'exclude'                 => true,
                        'inputType'               => 'text',
                        'eval'                    => array('rgxp'=>'alnum', 'doNotCopy'=>true, 'spaceToUnderscore'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
                        'save_callback' => array
                        (
                                array('tl_galerie', 'generateAlias')
                        )
                ),
                'themesSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['themesSRC'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'path'=>'tl_files/galleria/themes', 'mandatory'=>true)
		),
                'minifiedJS' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['minifiedJS'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
		'width' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['width'],
			'exclude'                 => true,
                        'default'                 => '650',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'height' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['height'],
			'exclude'                 => true,
                        'default'                 => '300',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'transition' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['transition'],
			'exclude'                 => true,
                        'default'                 => 'fade',
			'inputType'               => 'select',
                        'options'                 => array('fade', 'flash', 'pulse', 'slide', 'fadeslide', 'doorslide'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
			'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50')
		),
                'fullscreenTransition' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['fullscreenTransition'],
			'exclude'                 => true,
                        'default'                 => 'undefined',
			'inputType'               => 'select',
                        'options'                 => array('undefined', 'fade', 'flash', 'pulse', 'slide', 'fadeslide', 'doorslide'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
			'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50')
		),
                'touchTransition' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['touchTransition'],
			'exclude'                 => true,
                        'default'                 => 'undefined',
			'inputType'               => 'select',
                        'options'                 => array('undefined', 'fade', 'flash', 'pulse', 'slide', 'fadeslide', 'doorslide'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
			'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50')
		),
                'initialTransition' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['initialTransition'],
			'exclude'                 => true,
                        'default'                 => 'undefined',
			'inputType'               => 'select',
                        'options'                 => array('undefined', 'fade', 'flash', 'pulse', 'slide', 'fadeslide', 'doorslide'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
			'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50')
		),
                'transitionSpeed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['transitionSpeed'],
			'exclude'                 => true,
                        'default'                 => '400',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'clicknext' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['clicknext'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                // The real name of the function is "show" but this name is already used in the language files so it's replaced by "gShow"
                'gShow' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['gShow'],
			'exclude'                 => true,
                        'default'                 => '0',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'showInfo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['showInfo'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'showImagenav' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['showImagenav'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'showCounter' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['showCounter'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'lightbox' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['lightbox'],
			'exclude'                 => true,
                        'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true)
		),
                'lightboxFadeSpeed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['lightboxFadeSpeed'],
			'exclude'                 => true,
                        'default'                 => '200',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'lightboxTransitionSpeed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['lightboxTransitionSpeed'],
			'exclude'                 => true,
                        'default'                 => '300',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'overlayBackground' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['overlayBackground'],
                        'default'                 => '0b0b0b',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'wizard' => array
			(
				array('tl_galerie', 'colorPicker')
			)
		),
                'overlayOpacity' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['overlayOpacity'],
			'exclude'                 => true,
                        'default'                 => '0.85',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
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
                        'explanation'             => 'cropMethods'
		),
                'imageMargin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imageMargin'],
			'exclude'                 => true,
                        'default'                 => '0',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'imagePan' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imagePan'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'imagePanSmoothness' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imagePanSmoothness'],
			'exclude'                 => true,
                        'default'                 => '12',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'imagePosition' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imagePosition'],
			'exclude'                 => true,
                        'default'                 => 'center',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),
                'minScaleRatio' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['minScaleRatio'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'maxScaleRatio' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['maxScaleRatio'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'autoplay' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['autoplay'],
			'exclude'                 => true,
                        'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50 m12')
		),
                'autoplayInterval' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['autoplayInterval'],
			'exclude'                 => true,
                        'default'                 => '5000',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'pauseOnInteraction' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['pauseOnInteraction'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'carousel' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['carousel'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'carouselFollow' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['carouselFollow'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'carouselSpeed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['carouselSpeed'],
			'exclude'                 => true,
                        'default'                 => '200',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'carouselSteps' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['carouselSteps'],
			'exclude'                 => true,
			'default'                 => 'auto',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),
                'thumbnails' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['thumbnails'],
			'exclude'                 => true,
                        'default'                 => 'true',
			'inputType'               => 'select',
                        'options'                 => array('true', 'false', 'empty', 'numbers'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
			'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50')
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
                        'explanation'             => 'cropMethods'
		),
                'thumbMargin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['thumbMargin'],
			'exclude'                 => true,
                        'default'                 => '0',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'thumbFit' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['thumbFit'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'thumbQuality' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['thumbQuality'],
			'exclude'                 => true,
                        'default'                 => 'true',
			'inputType'               => 'select',
                        'options'                 => array('true', 'false', 'auto'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
			'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50')
		),
                'easing' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['easing'],
			'exclude'                 => true,
                        'default'                 => 'galleria',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),
                'popupLinks' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['popupLinks'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'extend' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['extend'],
                        'exclude'                 => true,
                        'inputType'               => 'textarea',
                        'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'codeMirror|js', 'tl_class'=>'clr')
                ),
                'dataConfig' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['dataConfig'],
                        'exclude'                 => true,
                        'inputType'               => 'textarea',
                        'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'codeMirror|js', 'tl_class'=>'clr')
                ),
                'preload' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['preload'],
			'exclude'                 => true,
                        'default'                 => '2',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),
                'debug' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['debug'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'queue' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['queue'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'swipe' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['swipe'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'fullscreenDoubleTap' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['fullscreenDoubleTap'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'flickr' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickr'],
			'exclude'                 => true,
                        'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true)
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
                        'explanation'             => 'flickrMethods'
		),
                'flickrMethodsValue' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrMethodsValue'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),
                'flickrOptMax' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrOptMax'],
			'exclude'                 => true,
                        'default'                 => '30',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
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
                        'explanation'             => 'flickrOptImageSize'
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
                        'explanation'             => 'flickrOptImageSize'
		),
                'flickrOptSort' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrOptSort'],
			'exclude'                 => true,
                        'default'                 => 'interestingness-desc',
			'inputType'               => 'select',
                        'options'                 => array('date-posted-asc', 'date-posted-desc', 'date-taken-asc', 'date-taken-desc', 'interestingness-desc', 'interestingness-asc', 'relevance'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
			'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50')
		),
                'flickrOptDescription' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['flickrOptDescription'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'history' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['history'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'dummy' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['dummy'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'files' => true, 'filesOnly' => true, 'path'=>'tl_files')
		),
                'layerFollow' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['layerFollow'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'imageTimeout' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['imageTimeout'],
			'exclude'                 => true,
                        'default'                 => '30000',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'fullscreenCrop' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['fullscreenCrop'],
			'exclude'                 => true,
                        'default'                 => 'undefined',
			'inputType'               => 'select',
                        'options'                 => array('undefined', 'false', 'true', 'height', 'width', 'landscape', 'portrait'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_galerie'],
			'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50', 'helpwizard'=>true),
                        'explanation'             => 'cropMethods'
		),
                'picasa' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['picasa'],
			'exclude'                 => true,
                        'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true)
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
                        'explanation'             => 'picasaMethods'
		),
                'picasaMethodsValue' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['picasaMethodsValue'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),
                'picasaOptMax' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['picasaOptMax'],
			'exclude'                 => true,
                        'default'                 => '30',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
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
                        'explanation'             => 'flickrOptImageSize'
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
                        'explanation'             => 'flickrOptImageSize'
		),
                'dailymotion' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['dailymotion'],
                        'exclude'                 => true,
                        'inputType'               => 'textarea',
                        'eval'                    => array('allowHtml'=>true, 'preserveTags'=>true,  'tl_class'=>'clr'),
                        'load_callback' => array (
                                                     array('tl_galerie', 'getDefaultOptionsForDailymotion')
                                                 )
                ),
                'vimeo' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['vimeo'],
                        'exclude'                 => true,
                        'inputType'               => 'textarea',
                        'eval'                    => array('allowHtml'=>true, 'preserveTags'=>true,  'tl_class'=>'clr'),
                        'load_callback' => array (
                                                     array('tl_galerie', 'getDefaultOptionsForVimeo')
                                                 )
                ),
                'youtube' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['youtube'],
                        'exclude'                 => true,
                        'inputType'               => 'textarea',
                        'eval'                    => array('allowHtml'=>true, 'preserveTags'=>true,  'tl_class'=>'clr'),
                        'load_callback' => array (
                                                     array('tl_galerie', 'getDefaultOptionsForYouTube')
                                                 )
                ),
                'trueFullscreen' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['trueFullscreen'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'responsive' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['responsive'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'wait' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie']['wait'],
			'exclude'                 => true,
                        'default'                 => '5000',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		)
	)
);

/**
 * Class tl_galerie
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @package Controller
 */
class tl_galerie extends Backend {

    /**
     * Add the mooRainbow scripts to the page
     */
    public function __construct()
    {
        parent::__construct();
        $this->import('BackendUser', 'User');

        $GLOBALS['TL_CSS'][] = 'plugins/mootools/rainbow.css?'. MOO_RAINBOW . '|screen';
        $GLOBALS['TL_JAVASCRIPT'][] = 'plugins/mootools/rainbow.js?' . MOO_RAINBOW;
    }
        
    /**
     * Count the number of pictures, videos and iframes in the database
     * @param array
     * @param string
     * @return string
     */
    public function addPicturesNumber($row, $label) {

        // Calculates the total number of elements
        $objTotal = $this->Database->prepare("SELECT COUNT(*) AS count FROM tl_galerie_pictures WHERE pid=?")
                ->execute($row['id']);
        
        
        // Retrieve the current gallery videos
        $objVideo = $this->Database->prepare("SELECT video FROM tl_galerie_pictures WHERE pid=?")
        ->execute($row['id']);
        
        while($objVideo->next()) {
            $arrVideo[] = $objVideo->row();
        }
        // Calculates the total number of videos 
        $video = count(array_filter(array_map('array_filter', $arrVideo)));

        
        // Retrieve the current gallery iframes
        $objIframe = $this->Database->prepare("SELECT iframe FROM tl_galerie_pictures WHERE pid=?")
        ->execute($row['id']);
        
        while($objIframe->next()) {
            $arrIframe[] = $objIframe->row();
        }
        // Calculates the total number of iframes 
        $iframe = count(array_filter(array_map('array_filter', $arrIframe)));
        
        
        // Calculates the total number of images 
        $image = $objTotal->count - $video - $iframe;
        
        
        // Adds the designation with the number
        if ($objTotal->count > 1)
            $label_total = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_datas'], $objTotal->count);
        else
            $label_total = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_data'], $objTotal->count);
        
        if ($video > 1)
            $label_video = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_videos'], $video);
        else
            $label_video = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_video'], $video);
            
        if ($image > 1)
            $label_image = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_images'], $image);
        else
            $label_image = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_image'], $image);
            
        if ($iframe > 1)
            $label_iframe = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_iframes'], $iframe);
        else
            $label_iframe = sprintf('%s ' . $GLOBALS['TL_LANG']['tl_galerie']['label_iframe'], $iframe);

        $label .= ' <span style="color:#b3b3b3; padding-left:3px;">[' . $label_total  . " : " . $label_video . " - " . $label_image . " - " . $label_iframe . ']</span>';
       
        return $label;
    }
    
   /**
     * Autogenerate a news alias if it has not been set yet
     * @param mixed
     * @param object
     * @return string
     */
    public function generateAlias($varValue, DataContainer $dc) {
        $autoAlias = false;

        // Generate alias if there is none
        if (!strlen($varValue)) {
            $autoAlias = true;
            $key = $dc->activeRecord->title;
            if(strlen($dc->activeRecord->title) > 0) {
                $keyAlias = $key;
            }
            $varValue = standardize($keyAlias);
        }

        $objAlias = $this->Database->prepare("SELECT id FROM tl_galerie WHERE id=? OR alias=?")
                ->execute($dc->id, $varValue);

        // Check whether the page alias exists
        if ($objAlias->numRows > 1) {
            if (!$autoAlias) {
                throw new Exception(sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
            }

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
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes) {

        if (strlen($this->Input->get('tid'))) {

            $this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 1));
            $this->redirect($this->getReferer());
        }

        $href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

        if (!$row['published']) {

            $icon = 'invisible.gif';
        }

        return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
    }


    /**
     * Disable/enable a user group
     * @param integer
     * @param boolean
     */
    public function toggleVisibility($intId, $blnVisible) {

        $this->createInitialVersion('tl_galerie', $intId);

        // Trigger the save_callback
        if (is_array($GLOBALS['TL_DCA']['tl_galerie']['fields']['published']['save_callback'])) {

            foreach ($GLOBALS['TL_DCA']['tl_galerie']['fields']['published']['save_callback'] as $callback) {

                $this->import($callback[0]);
                $blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
            }
        }

        // Update the database
        $this->Database->prepare("UPDATE tl_galerie SET published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
                ->execute($intId);

        $this->createNewVersion('tl_galerie', $intId);

    }

    /**
     * Return the color picker wizard
     * @param object
     * @return string
     */
    public function colorPicker(DataContainer $dc)
    {
            return ' ' . $this->generateImage('pickcolor.gif', $GLOBALS['TL_LANG']['MSC']['colorpicker'], 'style="vertical-align:top; cursor:pointer;" id="moo_'.$dc->field.'" class="mooRainbow"');
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
            return ($this->User->isAdmin || count(preg_grep('/^tl_galerie::/', $this->User->alexf)) > 0) ? '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ' : '';
    }
    
    /**
     * Load the default options for Vimeo
     * @param string
     * @return string
     */
    public function getDefaultOptionsForVimeo($varValue, DataContainer $dc) {
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
    public function getDefaultOptionsForYouTube($varValue, DataContainer $dc) {
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
    public function getDefaultOptionsForDailymotion($varValue, DataContainer $dc) {
        if (!trim($varValue)) {
            $varValue = $GLOBALS['TL_LANG']['tl_galerie']['dailymotion_options'];
        }

        return $varValue;
    }
}

?>