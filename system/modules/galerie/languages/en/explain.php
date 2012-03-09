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
 * Flickr methods
 */
$GLOBALS['TL_LANG']['XPL']['flickrMethods'] = array
(
    array('Search', 'Search Flickr for public photos using a search string.'),
    array('Tags', 'Search Flickr for public photos using tags.'),
    array('User', 'Fetch a user’s public photos using the username like displayed in the URL (not user ID).'),
    array('Set', 'Get photos from a photoset by ID.'),
    array('Gallery', 'Get photos from a gallery by ID.'),
    array('Group search', 'Search groups and fetch photos from the first group found Useful if you know the exact name of a group and want to show the groups photos.'),
    array('Group', 'Get photos from a group by ID.')
);

/**
 * Flickr option image size
 */
$GLOBALS['TL_LANG']['XPL']['flickrOptImageSize'] = array
(
    array('Small', 'Square 75x75.'),
    array('thumb', '100 on longest side.'),
    array('Medium', '640 on longest side (if available, or it will take the closest match).'),
    array('Big', '1024 on longest side.'),
    array('Original', 'Original image, either a jpg, gif or png, depending on source format.')
);

/**
 * Picasa methods
 */
$GLOBALS['TL_LANG']['XPL']['picasaMethods'] = array
(
    array('Search', 'Search Picasa for public photos using a search string.'),
    array('User', 'Fetch a user’s public photos using the username like displayed in the URL (not user ID).'),
    array('User album', 'Get photos from a user album.')
);
?>