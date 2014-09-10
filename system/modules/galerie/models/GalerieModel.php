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
 * Reads a gallery
 *
 * @package   Models
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 */
class GalerieModel extends \Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_galerie';

    /**
     * Find a published gallery by its ID
     *
     * @param integer $intId      The gallery ID
     * @param array   $arrOptions An optional options array
     *
     * @return \Model|null The model or null if there is no published gallery
     */
    public static function findPublishedById($intId, array $arrOptions = array())
    {
        $t = static::$strTable;
        $arrColumns = array("$t.id=? AND $t.published=1");

        return static::findOneBy($arrColumns, $intId, $arrOptions);
    }
}
