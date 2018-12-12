<?php
/**
 * GetCorporationsCorporationIdStarbases200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GetCorporationsCorporationIdStarbases200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdStarbases200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_starbases_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'moon_id' => 'int',
        'onlined_since' => '\DateTime',
        'reinforced_until' => '\DateTime',
        'starbase_id' => 'int',
        'state' => 'string',
        'system_id' => 'int',
        'type_id' => 'int',
        'unanchor_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'moon_id' => 'int32',
        'onlined_since' => 'date-time',
        'reinforced_until' => 'date-time',
        'starbase_id' => 'int64',
        'state' => null,
        'system_id' => 'int32',
        'type_id' => 'int32',
        'unanchor_at' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'moon_id' => 'moon_id',
        'onlined_since' => 'onlined_since',
        'reinforced_until' => 'reinforced_until',
        'starbase_id' => 'starbase_id',
        'state' => 'state',
        'system_id' => 'system_id',
        'type_id' => 'type_id',
        'unanchor_at' => 'unanchor_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'moon_id' => 'setMoonId',
        'onlined_since' => 'setOnlinedSince',
        'reinforced_until' => 'setReinforcedUntil',
        'starbase_id' => 'setStarbaseId',
        'state' => 'setState',
        'system_id' => 'setSystemId',
        'type_id' => 'setTypeId',
        'unanchor_at' => 'setUnanchorAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'moon_id' => 'getMoonId',
        'onlined_since' => 'getOnlinedSince',
        'reinforced_until' => 'getReinforcedUntil',
        'starbase_id' => 'getStarbaseId',
        'state' => 'getState',
        'system_id' => 'getSystemId',
        'type_id' => 'getTypeId',
        'unanchor_at' => 'getUnanchorAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATE_OFFLINE = 'offline';
    const STATE_ONLINE = 'online';
    const STATE_ONLINING = 'onlining';
    const STATE_REINFORCED = 'reinforced';
    const STATE_UNANCHORING = 'unanchoring';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_OFFLINE,
            self::STATE_ONLINE,
            self::STATE_ONLINING,
            self::STATE_REINFORCED,
            self::STATE_UNANCHORING,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['moon_id'] = isset($data['moon_id']) ? $data['moon_id'] : null;
        $this->container['onlined_since'] = isset($data['onlined_since']) ? $data['onlined_since'] : null;
        $this->container['reinforced_until'] = isset($data['reinforced_until']) ? $data['reinforced_until'] : null;
        $this->container['starbase_id'] = isset($data['starbase_id']) ? $data['starbase_id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['unanchor_at'] = isset($data['unanchor_at']) ? $data['unanchor_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['starbase_id'] === null) {
            $invalidProperties[] = "'starbase_id' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['starbase_id'] === null) {
            return false;
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowedValues)) {
            return false;
        }
        if ($this->container['system_id'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets moon_id
     *
     * @return int
     */
    public function getMoonId()
    {
        return $this->container['moon_id'];
    }

    /**
     * Sets moon_id
     *
     * @param int $moon_id The moon this starbase (POS) is anchored on, unanchored POSes do not have this information
     *
     * @return $this
     */
    public function setMoonId($moon_id)
    {
        $this->container['moon_id'] = $moon_id;

        return $this;
    }

    /**
     * Gets onlined_since
     *
     * @return \DateTime
     */
    public function getOnlinedSince()
    {
        return $this->container['onlined_since'];
    }

    /**
     * Sets onlined_since
     *
     * @param \DateTime $onlined_since When the POS onlined, for starbases (POSes) in online state
     *
     * @return $this
     */
    public function setOnlinedSince($onlined_since)
    {
        $this->container['onlined_since'] = $onlined_since;

        return $this;
    }

    /**
     * Gets reinforced_until
     *
     * @return \DateTime
     */
    public function getReinforcedUntil()
    {
        return $this->container['reinforced_until'];
    }

    /**
     * Sets reinforced_until
     *
     * @param \DateTime $reinforced_until When the POS will be out of reinforcement, for starbases (POSes) in reinforced state
     *
     * @return $this
     */
    public function setReinforcedUntil($reinforced_until)
    {
        $this->container['reinforced_until'] = $reinforced_until;

        return $this;
    }

    /**
     * Gets starbase_id
     *
     * @return int
     */
    public function getStarbaseId()
    {
        return $this->container['starbase_id'];
    }

    /**
     * Sets starbase_id
     *
     * @param int $starbase_id Unique ID for this starbase (POS)
     *
     * @return $this
     */
    public function setStarbaseId($starbase_id)
    {
        $this->container['starbase_id'] = $starbase_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state string
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id The solar system this starbase (POS) is in, unanchored POSes have this information
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id Starbase (POS) type
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets unanchor_at
     *
     * @return \DateTime
     */
    public function getUnanchorAt()
    {
        return $this->container['unanchor_at'];
    }

    /**
     * Sets unanchor_at
     *
     * @param \DateTime $unanchor_at When the POS started unanchoring, for starbases (POSes) in unanchoring state
     *
     * @return $this
     */
    public function setUnanchorAt($unanchor_at)
    {
        $this->container['unanchor_at'] = $unanchor_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


