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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_galerie_pictures']['published']           = array('Publish', 'Make this image or video or iframe visible in the gallery.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['title']               = array('Title', 'Image title.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['singleSRC']           = array('Source file', 'Please select a file from the files directory.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['fullscreenSingleSRC'] = array('Source file', 'Please select a file from the files directory.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['thumbSRC']            = array('Source file', 'Only if you want a different image for the thumbnail that the standard image.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['alt']                 = array('Description (alternate text)', 'An accessible website should always provide an alternate text for images and movies with a short description of their content.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['imageUrl']            = array('Image link target', 'Associate a page, a news or an URL with an image. For external links, don\'t forget "http://".');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['size']                = array('Image - width and height', 'Here you can set the image dimensions and the resize mode.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['thumbSize']           = array('Thumbnail - width and height', 'Here you can set the thumbnail dimensions and the resize mode.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['video']               = array('Video', 'Galleria supports Youtube, Vimeo and Dailymotion embeds. The way it works is that you pass a full URL to the movie and then Galleria will parse and create the video frame for you.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['iframe']              = array('Iframe', 'Galleria also supports iframes to be displayed instead of an image.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['iframeThumb']         = array('Skip the thumbnail', 'You can also skip the thumbnail by adding an element with the class "iframe".');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['dataConfigHTML']      = array('HTML with dataConfig', 'You can use the dataConfig option combined with HTML to obtain richer data from other sources to provide HTML captions or other custom data types. Don\'t forget to add the variable $pictures[\'dataConfig\'] in the template.');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['layerHTML']           = array('HTML Layer', 'Galleria also supports a layer of HTML content that can will be placed above the image or video. The layer will follow the transitions (unless you disable it using the layerFollow option) and expand on fullscreen.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_galerie_pictures']['title_legend']            = 'Title';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['image_fullscreen_legend'] = 'Image - Fullscreen and lightbox';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['image_legend']            = 'Image - Standard';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['thumbnail_legend']        = 'Size of thumbnails for images or videos or iframes';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['altThumbnail_legend']     = 'Alternative image for the thumbnail';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['publish_legend']          = 'Publish';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['video_legend']            = 'Video';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['iframe_legend']           = 'Iframe';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['dataConfigHTML_legend']   = 'Using HTML with dataConfig';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['layerHTML_legend']        = 'Adding a layer above the content';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_galerie_pictures']['new']    = array('New image', 'Create a new image');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['edit']   = array('Edit image', 'Edit image ID %s');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['copy']   = array('Duplicate image', 'Duplicate image ID %s');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['cut']    = array('Move image', 'Move image ID %s');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['delete'] = array('Delete image', 'Delete image ID %s');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['toggle'] = array('Publish/unpublish image', 'Publish/unpublish image ID %s');
$GLOBALS['TL_LANG']['tl_galerie_pictures']['show']   = array('Image details', 'Show the details of image ID %s');

/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['tl_galerie_pictures']['untitled']     = 'Untitled';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['label_video']  = 'Video';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['label_iframe'] = 'Iframe';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['label_image']  = 'Image';
$GLOBALS['TL_LANG']['tl_galerie_pictures']['from']         = 'from';
