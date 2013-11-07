<?php
/**
 * File containing the Content Type CreateStruct class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\SPI\Persistence\Content\Type;

use eZ\Publish\SPI\Persistence\MultiLanguageValueBase;
use eZ\Publish\SPI\Persistence\ValueObject;
use eZ\Publish\SPI\Persistence\Content\Location;

/**
 */
class CreateStruct extends MultiLanguageValueBase
{
    /**
     * Version (state) to create.
     *
     * @var int
     */
    public $status;

    /**
     * Creation date (timestamp)
     *
     * @var int
     */
    public $created;

    /**
     * Modification date (timestamp)
     *
     * @var int
     */
    public $modified;

    /**
     * Creator user id
     *
     * @var mixed
     */
    public $creatorId;

    /**
     * Modifier user id
     *
     * @var mixed
     *
     */
    public $modifierId;

    /**
     * Unique remote ID
     *
     * @var string
     */
    public $remoteId;

    /**
     * URL alias schema
     *
     * @var string
     */
    public $urlAliasSchema;

    /**
     * Name schema
     *
     * @var string
     */
    public $nameSchema;

    /**
     * Determines if the type is a container
     *
     * @var boolean
     */
    public $isContainer;

    /**
     * Specifies which property the child locations should be sorted on by default when created
     *
     * Valid values are found at {@link Location::SORT_FIELD_*}
     *
     * @var mixed
     */
    public $sortField = Location::SORT_FIELD_PUBLISHED;

    /**
     * Specifies whether the sort order should be ascending or descending by default when created
     *
     * Valid values are {@link Location::SORT_ORDER_*}
     *
     * @var mixed
     */
    public $sortOrder = Location::SORT_ORDER_DESC;

    /**
     * Contains an array of type group IDs
     *
     * @var mixed[]
     */
    public $groupIds = array();

    /**
     * Content fields in this type
     *
     * @var \eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition[]
     */
    public $fieldDefinitions = array();

    /**
     * @todo: Document.
     *
     * @var boolean
     */
    public $defaultAlwaysAvailable = false;

    /**
     * Performs a deep cloning.
     *
     * @return void
     */
    public function __clone()
    {
        foreach ( $this->fieldDefinitions as $id => $fieldDef )
        {
            $this->fieldDefinitions[$id] = clone $fieldDef;
        }
    }
}
