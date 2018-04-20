<?php
/**
 * GetCorporationCorporationIdMiningExtractions200Ok
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
 * OpenAPI spec version: 0.7.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
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
 * GetCorporationCorporationIdMiningExtractions200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationCorporationIdMiningExtractions200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporation_corporation_id_mining_extractions_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'structure_id' => 'int',
        'moon_id' => 'int',
        'extraction_start_time' => '\DateTime',
        'chunk_arrival_time' => '\DateTime',
        'natural_decay_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'structure_id' => 'int64',
        'moon_id' => 'int32',
        'extraction_start_time' => 'date-time',
        'chunk_arrival_time' => 'date-time',
        'natural_decay_time' => 'date-time'
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
        'structure_id' => 'structure_id',
        'moon_id' => 'moon_id',
        'extraction_start_time' => 'extraction_start_time',
        'chunk_arrival_time' => 'chunk_arrival_time',
        'natural_decay_time' => 'natural_decay_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'structure_id' => 'setStructureId',
        'moon_id' => 'setMoonId',
        'extraction_start_time' => 'setExtractionStartTime',
        'chunk_arrival_time' => 'setChunkArrivalTime',
        'natural_decay_time' => 'setNaturalDecayTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'structure_id' => 'getStructureId',
        'moon_id' => 'getMoonId',
        'extraction_start_time' => 'getExtractionStartTime',
        'chunk_arrival_time' => 'getChunkArrivalTime',
        'natural_decay_time' => 'getNaturalDecayTime'
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
        $this->container['structure_id'] = isset($data['structure_id']) ? $data['structure_id'] : null;
        $this->container['moon_id'] = isset($data['moon_id']) ? $data['moon_id'] : null;
        $this->container['extraction_start_time'] = isset($data['extraction_start_time']) ? $data['extraction_start_time'] : null;
        $this->container['chunk_arrival_time'] = isset($data['chunk_arrival_time']) ? $data['chunk_arrival_time'] : null;
        $this->container['natural_decay_time'] = isset($data['natural_decay_time']) ? $data['natural_decay_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['structure_id'] === null) {
            $invalidProperties[] = "'structure_id' can't be null";
        }
        if ($this->container['moon_id'] === null) {
            $invalidProperties[] = "'moon_id' can't be null";
        }
        if ($this->container['extraction_start_time'] === null) {
            $invalidProperties[] = "'extraction_start_time' can't be null";
        }
        if ($this->container['chunk_arrival_time'] === null) {
            $invalidProperties[] = "'chunk_arrival_time' can't be null";
        }
        if ($this->container['natural_decay_time'] === null) {
            $invalidProperties[] = "'natural_decay_time' can't be null";
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

        if ($this->container['structure_id'] === null) {
            return false;
        }
        if ($this->container['moon_id'] === null) {
            return false;
        }
        if ($this->container['extraction_start_time'] === null) {
            return false;
        }
        if ($this->container['chunk_arrival_time'] === null) {
            return false;
        }
        if ($this->container['natural_decay_time'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets structure_id
     *
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     *
     * @param int $structure_id structure_id integer
     *
     * @return $this
     */
    public function setStructureId($structure_id)
    {
        $this->container['structure_id'] = $structure_id;

        return $this;
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
     * @param int $moon_id moon_id integer
     *
     * @return $this
     */
    public function setMoonId($moon_id)
    {
        $this->container['moon_id'] = $moon_id;

        return $this;
    }

    /**
     * Gets extraction_start_time
     *
     * @return \DateTime
     */
    public function getExtractionStartTime()
    {
        return $this->container['extraction_start_time'];
    }

    /**
     * Sets extraction_start_time
     *
     * @param \DateTime $extraction_start_time The time at which the current extraction was initiated.
     *
     * @return $this
     */
    public function setExtractionStartTime($extraction_start_time)
    {
        $this->container['extraction_start_time'] = $extraction_start_time;

        return $this;
    }

    /**
     * Gets chunk_arrival_time
     *
     * @return \DateTime
     */
    public function getChunkArrivalTime()
    {
        return $this->container['chunk_arrival_time'];
    }

    /**
     * Sets chunk_arrival_time
     *
     * @param \DateTime $chunk_arrival_time The time at which the chunk being extracted will arrive and can be fractured by the moon mining drill.
     *
     * @return $this
     */
    public function setChunkArrivalTime($chunk_arrival_time)
    {
        $this->container['chunk_arrival_time'] = $chunk_arrival_time;

        return $this;
    }

    /**
     * Gets natural_decay_time
     *
     * @return \DateTime
     */
    public function getNaturalDecayTime()
    {
        return $this->container['natural_decay_time'];
    }

    /**
     * Sets natural_decay_time
     *
     * @param \DateTime $natural_decay_time The time at which the chunk being extracted will naturally fracture if it is not first fractured by the moon mining drill.
     *
     * @return $this
     */
    public function setNaturalDecayTime($natural_decay_time)
    {
        $this->container['natural_decay_time'] = $natural_decay_time;

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


