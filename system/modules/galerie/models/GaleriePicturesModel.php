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
 * Gallery pictures Model
 *
 * @package   Models
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 */
class GaleriePicturesModel extends \Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_galerie_pictures';
}
