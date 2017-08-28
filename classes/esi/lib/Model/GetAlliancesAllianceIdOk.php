<?php
/**
 * GetAlliancesAllianceIdOk
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
 * GetAlliancesAllianceIdOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetAlliancesAllianceIdOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_alliances_alliance_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'alliance_name' => 'string',
        'date_founded' => '\DateTime',
        'executor_corp' => 'int',
        'ticker' => 'string'
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
        'alliance_name' => 'alliance_name',
        'date_founded' => 'date_founded',
        'executor_corp' => 'executor_corp',
        'ticker' => 'ticker'
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
        'alliance_name' => 'setAllianceName',
        'date_founded' => 'setDateFounded',
        'executor_corp' => 'setExecutorCorp',
        'ticker' => 'setTicker'
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
        'alliance_name' => 'getAllianceName',
        'date_founded' => 'getDateFounded',
        'executor_corp' => 'getExecutorCorp',
        'ticker' => 'getTicker'
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
        $this->container['alliance_name'] = isset($data['alliance_name']) ? $data['alliance_name'] : null;
        $this->container['date_founded'] = isset($data['date_founded']) ? $data['date_founded'] : null;
        $this->container['executor_corp'] = isset($data['executor_corp']) ? $data['executor_corp'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['alliance_name'] === null) {
            $invalid_properties[] = "'alliance_name' can't be null";
        }
        if ($this->container['date_founded'] === null) {
            $invalid_properties[] = "'date_founded' can't be null";
        }
        if ($this->container['ticker'] === null) {
            $invalid_properties[] = "'ticker' can't be null";
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
        if ($this->container['alliance_name'] === null) {
            return false;
        }
        if ($this->container['date_founded'] === null) {
            return false;
        }
        if ($this->container['ticker'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets alliance_name
     * @return string
     */
    public function getAllianceName()
    {
        return $this->container['alliance_name'];
    }

    /**
     * Sets alliance_name
     * @param string $alliance_name the full name of the alliance
     * @return $this
     */
    public function setAllianceName($alliance_name)
    {
        $this->container['alliance_name'] = $alliance_name;

        return $this;
    }

    /**
     * Gets date_founded
     * @return \DateTime
     */
    public function getDateFounded()
    {
        return $this->container['date_founded'];
    }

    /**
     * Sets date_founded
     * @param \DateTime $date_founded date_founded string
     * @return $this
     */
    public function setDateFounded($date_founded)
    {
        $this->container['date_founded'] = $date_founded;

        return $this;
    }

    /**
     * Gets executor_corp
     * @return int
     */
    public function getExecutorCorp()
    {
        return $this->container['executor_corp'];
    }

    /**
     * Sets executor_corp
     * @param int $executor_corp the executor corporation ID, if this alliance is not closed
     * @return $this
     */
    public function setExecutorCorp($executor_corp)
    {
        $this->container['executor_corp'] = $executor_corp;

        return $this;
    }

    /**
     * Gets ticker
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     * @param string $ticker the short name of the alliance
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

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


