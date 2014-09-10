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
    array('User album', 'Get photos from a user album. Notation: username/albumID')
);

/**
 * Crop methods
 */
$GLOBALS['TL_LANG']['XPL']['cropMethods'] = array
(
    array('True', 'Means that all images will be scaled to fill the stage, centered and cropped.'),
    array('False', 'Will scale down so the entire image fits.'),
    array('Height', 'Will scale the image to fill the height of the stage.'),
    array('Width', 'Will scale the image to fill the width of the stage.'),
    array('Landscape', 'Will fill up images that has landscape proportions, but scale portrait images to fit inside the container.'),
    array('Portrait', 'Is like ‘landscape’ but the other way around.')
);
