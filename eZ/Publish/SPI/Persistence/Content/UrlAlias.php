<?php
/**
 * File containing the UrlAlias class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\SPI\Persistence;

/**
 * UrlAlias models one url alias path element separated by '/' in urls.
 *
 * This class models the legacy structure used for url aliases.
 */
class UrlAlias extends ValueObject
{
    const LOCATION = 0;
    const RESOURCE = 1;
    const VIRTUAL = 2;

    /**
     * A unique identifier for the alias
     * (in legacy implementation this would be <parentid>-<md5text>)
     * @var string
     */
    public $id;

    /**
     * The type of the URL Alias i.e. one of URLAlias::LOCATION, URLAlias::RESOURCE, URLAlias::VIRTUAL
     *
     * @var int
     */
    public $type;

    /**
     * If type = URLAlias::LOCATION the loactionId
     * otherwise a string (e.g. /content/search)
     *
     * @var mixed
     */
    public $destination;


    /**
     * Lanuage code of url alias entry.
     *
     * @var string[]
     */
    public $languageCodes;

    /**
     * Pointer to other url alias element.
     *
     * Used to dereference history chain of url alias elements.
     *
     * @var int
     */
    public $alwaysAvailable;

    /**
     * Specifies the path of this url alias element.
     *
     * @var string
     */
    public $path;

     /**
     * Indicates that this alias was autogenerated for an in the meanwhile archived version of the content
     *
     * @var boolean
     */
    public $isHistory;

    /**
     * If false this alias was autogenerated otherwise manuel created
     *
     * @var boolean
     */
    public $isCustom;

    /**
     * Indicates if the url should be redirected
     *
     * @var boolean
     */
    public $forward;
}
