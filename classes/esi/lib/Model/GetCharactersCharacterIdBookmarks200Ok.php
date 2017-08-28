<?php
/**
 * GetCharactersCharacterIdBookmarks200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.5.5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetCharactersCharacterIdBookmarks200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdBookmarks200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_bookmarks_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'bookmark_id' => 'int',
        'create_date' => '\DateTime',
        'creator_id' => 'int',
        'folder_id' => 'int',
        'memo' => 'string',
        'note' => 'string',
        'owner_id' => 'int',
        'target' => '\Swagger\Client\Model\CharacterscharacterIdbookmarksTarget'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'bookmark_id' => 'bookmark_id',
        'create_date' => 'create_date',
        'creator_id' => 'creator_id',
        'folder_id' => 'folder_id',
        'memo' => 'memo',
        'note' => 'note',
        'owner_id' => 'owner_id',
        'target' => 'target'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'bookmark_id' => 'setBookmarkId',
        'create_date' => 'setCreateDate',
        'creator_id' => 'setCreatorId',
        'folder_id' => 'setFolderId',
        'memo' => 'setMemo',
        'note' => 'setNote',
        'owner_id' => 'setOwnerId',
        'target' => 'setTarget'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'bookmark_id' => 'getBookmarkId',
        'create_date' => 'getCreateDate',
        'creator_id' => 'getCreatorId',
        'folder_id' => 'getFolderId',
        'memo' => 'getMemo',
        'note' => 'getNote',
        'owner_id' => 'getOwnerId',
        'target' => 'getTarget'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bookmark_id'] = isset($data['bookmark_id']) ? $data['bookmark_id'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['bookmark_id'] === null) {
            $invalid_properties[] = "'bookmark_id' can't be null";
        }
        if ($this->container['create_date'] === null) {
            $invalid_properties[] = "'create_date' can't be null";
        }
        if ($this->container['creator_id'] === null) {
            $invalid_properties[] = "'creator_id' can't be null";
        }
        if ($this->container['memo'] === null) {
            $invalid_properties[] = "'memo' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalid_properties[] = "'note' can't be null";
        }
        if ($this->container['owner_id'] === null) {
            $invalid_properties[] = "'owner_id' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['bookmark_id'] === null) {
            return false;
        }
        if ($this->container['create_date'] === null) {
            return false;
        }
        if ($this->container['creator_id'] === null) {
            return false;
        }
        if ($this->container['memo'] === null) {
            return false;
        }
        if ($this->container['note'] === null) {
            return false;
        }
        if ($this->container['owner_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets bookmark_id
     * @return int
     */
    public function getBookmarkId()
    {
        return $this->container['bookmark_id'];
    }

    /**
     * Sets bookmark_id
     * @param int $bookmark_id bookmark_id integer
     * @return $this
     */
    public function setBookmarkId($bookmark_id)
    {
        $this->container['bookmark_id'] = $bookmark_id;

        return $this;
    }

    /**
     * Gets create_date
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     * @param \DateTime $create_date create_date string
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets creator_id
     * @return int
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     * @param int $creator_id creator_id integer
     * @return $this
     */
    public function setCreatorId($creator_id)
    {
        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets folder_id
     * @return int
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     * @param int $folder_id folder_id integer
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets memo
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     * @param string $memo memo string
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     * @param string $note note string
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets owner_id
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     * @param int $owner_id owner_id integer
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets target
     * @return \Swagger\Client\Model\CharacterscharacterIdbookmarksTarget
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     * @param \Swagger\Client\Model\CharacterscharacterIdbookmarksTarget $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


