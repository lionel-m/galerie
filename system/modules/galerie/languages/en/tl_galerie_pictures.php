<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
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
 * @copyright  Synergie Consulting http://www.synergie-consulting.com 
 * @author     Lionel Maccaud (Galleria by Aino: http://galleria.aino.se)
 * @package    galerie 
 * @license    MIT 
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_galerie_pictures']['published']           = array('Publish image', 'Make the image visible in the gallery.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['title']               = array('Title', 'Image title.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['singleSRC']           = array('Source file', 'Please select a file from the files directory.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['fullscreenSingleSRC'] = array('Source file', 'Please select a file from the files directory.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['alt']                 = array('Alternate text', 'An accessible website should always provide an alternate text for images and movies with a short description of their content.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['imageUrl']            = array('Image link target', 'Associate a page, a news or an URL with an image. For external links, don\'t forget "http://".');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['size']                = array('Image - width and height', 'Here you can set the image dimensions and the resize mode.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['thumbSize']           = array('Thumbnail - width and height', 'Here you can set the thumbnail dimensions and the resize mode.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_galerie_pictures']['title_legend']            = 'Title';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['image_fullscreen_legend'] = 'Image - Fullscreen';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['image_legend']            = 'Image - Standard and thumbnail';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['publish_legend']          = 'Publish';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_galerie_pictures']['new']    = array('New image', 'Create a new image');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['edit']   = array('Edit image', 'Edit image ID %s');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['copy']   = array('Duplicate image', 'Duplicate image ID %s');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['cut']    = array('Move image', 'Move image ID %s');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['delete'] = array('Delete image', 'Delete image ID %s');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['toggle'] = array('Publish/unpublish image', 'Publish/unpublish image ID %s');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['show']   = array('Picture details', 'Show the details of image ID %s');


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['tl_galerie_pictures']['untitled'] = 'Untitled';
?>