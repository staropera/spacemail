<?php
/**
 * PutFleetsFleetIdMembersMemberIdMovement
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
 * PutFleetsFleetIdMembersMemberIdMovement Class Doc Comment
 *
 * @category    Class */
 // @description movement object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PutFleetsFleetIdMembersMemberIdMovement implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'put_fleets_fleet_id_members_member_id_movement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'role' => 'string',
        'squad_id' => 'int',
        'wing_id' => 'int'
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
        'role' => 'role',
        'squad_id' => 'squad_id',
        'wing_id' => 'wing_id'
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
        'role' => 'setRole',
        'squad_id' => 'setSquadId',
        'wing_id' => 'setWingId'
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
        'role' => 'getRole',
        'squad_id' => 'getSquadId',
        'wing_id' => 'getWingId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ROLE_FLEET_COMMANDER = 'fleet_commander';
    const ROLE_WING_COMMANDER = 'wing_commander';
    const ROLE_SQUAD_COMMANDER = 'squad_commander';
    const ROLE_SQUAD_MEMBER = 'squad_member';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_FLEET_COMMANDER,
            self::ROLE_WING_COMMANDER,
            self::ROLE_SQUAD_COMMANDER,
            self::ROLE_SQUAD_MEMBER,
        ];
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['squad_id'] = isset($data['squad_id']) ? $data['squad_id'] : null;
        $this->container['wing_id'] = isset($data['wing_id']) ? $data['wing_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['role'] === null) {
            $invalid_properties[] = "'role' can't be null";
        }
        $allowed_values = array("fleet_commander", "wing_commander", "squad_commander", "squad_member");
        if (!in_array($this->container['role'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'role', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['squad_id']) && ($this->container['squad_id'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'squad_id', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['wing_id']) && ($this->container['wing_id'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'wing_id', must be bigger than or equal to 0.0.";
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
        if ($this->container['role'] === null) {
            return false;
        }
        $allowed_values = array("fleet_commander", "wing_commander", "squad_commander", "squad_member");
        if (!in_array($this->container['role'], $allowed_values)) {
            return false;
        }
        if ($this->container['squad_id'] < 0.0) {
            return false;
        }
        if ($this->container['wing_id'] < 0.0) {
            return false;
        }
        return true;
    }


    /**
     * Gets role
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param string $role - If a character is moved to the `fleet_commander` role, neither `wing_id` or `squad_id` should be specified - If a character is moved to the `wing_commander` role, only `wing_id` should be specified - If a character is moved to the `squad_commander` role, both `wing_id` and `squad_id` should be specified - If a character is moved to the `squad_member` role, both `wing_id` and `squad_id` should be specified
     * @return $this
     */
    public function setRole($role)
    {
        $allowed_values = array('fleet_commander', 'wing_commander', 'squad_commander', 'squad_member');
        if (!in_array($role, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'role', must be one of 'fleet_commander', 'wing_commander', 'squad_commander', 'squad_member'");
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets squad_id
     * @return int
     */
    public function getSquadId()
    {
        return $this->container['squad_id'];
    }

    /**
     * Sets squad_id
     * @param int $squad_id squad_id integer
     * @return $this
     */
    public function setSquadId($squad_id)
    {

        if ($squad_id < 0.0) {
            throw new \InvalidArgumentException('invalid value for $squad_id when calling PutFleetsFleetIdMembersMemberIdMovement., must be bigger than or equal to 0.0.');
        }
        $this->container['squad_id'] = $squad_id;

        return $this;
    }

    /**
     * Gets wing_id
     * @return int
     */
    public function getWingId()
    {
        return $this->container['wing_id'];
    }

    /**
     * Sets wing_id
     * @param int $wing_id wing_id integer
     * @return $this
     */
    public function setWingId($wing_id)
    {

        if ($wing_id < 0.0) {
            throw new \InvalidArgumentException('invalid value for $wing_id when calling PutFleetsFleetIdMembersMemberIdMovement., must be bigger than or equal to 0.0.');
        }
        $this->container['wing_id'] = $wing_id;

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


