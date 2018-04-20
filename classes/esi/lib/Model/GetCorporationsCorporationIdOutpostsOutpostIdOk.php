<?php
/**
 * GetCorporationsCorporationIdOutpostsOutpostIdOk
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
 * GetCorporationsCorporationIdOutpostsOutpostIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdOutpostsOutpostIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_outposts_outpost_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'owner_id' => 'int',
        'system_id' => 'int',
        'docking_cost_per_ship_volume' => 'float',
        'office_rental_cost' => 'int',
        'type_id' => 'int',
        'reprocessing_efficiency' => 'float',
        'reprocessing_station_take' => 'float',
        'standing_owner_id' => 'int',
        'coordinates' => '\Swagger\Client\Model\GetCorporationsCorporationIdOutpostsOutpostIdCoordinates',
        'services' => '\Swagger\Client\Model\GetCorporationsCorporationIdOutpostsOutpostIdService[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'owner_id' => 'int32',
        'system_id' => 'int32',
        'docking_cost_per_ship_volume' => 'float',
        'office_rental_cost' => 'int64',
        'type_id' => 'int32',
        'reprocessing_efficiency' => 'float',
        'reprocessing_station_take' => 'float',
        'standing_owner_id' => 'int32',
        'coordinates' => null,
        'services' => null
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
        'owner_id' => 'owner_id',
        'system_id' => 'system_id',
        'docking_cost_per_ship_volume' => 'docking_cost_per_ship_volume',
        'office_rental_cost' => 'office_rental_cost',
        'type_id' => 'type_id',
        'reprocessing_efficiency' => 'reprocessing_efficiency',
        'reprocessing_station_take' => 'reprocessing_station_take',
        'standing_owner_id' => 'standing_owner_id',
        'coordinates' => 'coordinates',
        'services' => 'services'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_id' => 'setOwnerId',
        'system_id' => 'setSystemId',
        'docking_cost_per_ship_volume' => 'setDockingCostPerShipVolume',
        'office_rental_cost' => 'setOfficeRentalCost',
        'type_id' => 'setTypeId',
        'reprocessing_efficiency' => 'setReprocessingEfficiency',
        'reprocessing_station_take' => 'setReprocessingStationTake',
        'standing_owner_id' => 'setStandingOwnerId',
        'coordinates' => 'setCoordinates',
        'services' => 'setServices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_id' => 'getOwnerId',
        'system_id' => 'getSystemId',
        'docking_cost_per_ship_volume' => 'getDockingCostPerShipVolume',
        'office_rental_cost' => 'getOfficeRentalCost',
        'type_id' => 'getTypeId',
        'reprocessing_efficiency' => 'getReprocessingEfficiency',
        'reprocessing_station_take' => 'getReprocessingStationTake',
        'standing_owner_id' => 'getStandingOwnerId',
        'coordinates' => 'getCoordinates',
        'services' => 'getServices'
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
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['docking_cost_per_ship_volume'] = isset($data['docking_cost_per_ship_volume']) ? $data['docking_cost_per_ship_volume'] : null;
        $this->container['office_rental_cost'] = isset($data['office_rental_cost']) ? $data['office_rental_cost'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['reprocessing_efficiency'] = isset($data['reprocessing_efficiency']) ? $data['reprocessing_efficiency'] : null;
        $this->container['reprocessing_station_take'] = isset($data['reprocessing_station_take']) ? $data['reprocessing_station_take'] : null;
        $this->container['standing_owner_id'] = isset($data['standing_owner_id']) ? $data['standing_owner_id'] : null;
        $this->container['coordinates'] = isset($data['coordinates']) ? $data['coordinates'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['owner_id'] === null) {
            $invalidProperties[] = "'owner_id' can't be null";
        }
        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
        }
        if ($this->container['docking_cost_per_ship_volume'] === null) {
            $invalidProperties[] = "'docking_cost_per_ship_volume' can't be null";
        }
        if ($this->container['office_rental_cost'] === null) {
            $invalidProperties[] = "'office_rental_cost' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
        }
        if ($this->container['reprocessing_efficiency'] === null) {
            $invalidProperties[] = "'reprocessing_efficiency' can't be null";
        }
        if ($this->container['reprocessing_station_take'] === null) {
            $invalidProperties[] = "'reprocessing_station_take' can't be null";
        }
        if ($this->container['standing_owner_id'] === null) {
            $invalidProperties[] = "'standing_owner_id' can't be null";
        }
        if ($this->container['services'] === null) {
            $invalidProperties[] = "'services' can't be null";
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

        if ($this->container['owner_id'] === null) {
            return false;
        }
        if ($this->container['system_id'] === null) {
            return false;
        }
        if ($this->container['docking_cost_per_ship_volume'] === null) {
            return false;
        }
        if ($this->container['office_rental_cost'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        if ($this->container['reprocessing_efficiency'] === null) {
            return false;
        }
        if ($this->container['reprocessing_station_take'] === null) {
            return false;
        }
        if ($this->container['standing_owner_id'] === null) {
            return false;
        }
        if ($this->container['services'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets owner_id
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int $owner_id The entity that owns the station (e.g. the entity whose logo is on the station services bar)
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

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
     * @param int $system_id The ID of the solar system the outpost rests in
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets docking_cost_per_ship_volume
     *
     * @return float
     */
    public function getDockingCostPerShipVolume()
    {
        return $this->container['docking_cost_per_ship_volume'];
    }

    /**
     * Sets docking_cost_per_ship_volume
     *
     * @param float $docking_cost_per_ship_volume docking_cost_per_ship_volume number
     *
     * @return $this
     */
    public function setDockingCostPerShipVolume($docking_cost_per_ship_volume)
    {
        $this->container['docking_cost_per_ship_volume'] = $docking_cost_per_ship_volume;

        return $this;
    }

    /**
     * Gets office_rental_cost
     *
     * @return int
     */
    public function getOfficeRentalCost()
    {
        return $this->container['office_rental_cost'];
    }

    /**
     * Sets office_rental_cost
     *
     * @param int $office_rental_cost office_rental_cost integer
     *
     * @return $this
     */
    public function setOfficeRentalCost($office_rental_cost)
    {
        $this->container['office_rental_cost'] = $office_rental_cost;

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
     * @param int $type_id The type ID of the given outpost
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets reprocessing_efficiency
     *
     * @return float
     */
    public function getReprocessingEfficiency()
    {
        return $this->container['reprocessing_efficiency'];
    }

    /**
     * Sets reprocessing_efficiency
     *
     * @param float $reprocessing_efficiency reprocessing_efficiency number
     *
     * @return $this
     */
    public function setReprocessingEfficiency($reprocessing_efficiency)
    {
        $this->container['reprocessing_efficiency'] = $reprocessing_efficiency;

        return $this;
    }

    /**
     * Gets reprocessing_station_take
     *
     * @return float
     */
    public function getReprocessingStationTake()
    {
        return $this->container['reprocessing_station_take'];
    }

    /**
     * Sets reprocessing_station_take
     *
     * @param float $reprocessing_station_take reprocessing_station_take number
     *
     * @return $this
     */
    public function setReprocessingStationTake($reprocessing_station_take)
    {
        $this->container['reprocessing_station_take'] = $reprocessing_station_take;

        return $this;
    }

    /**
     * Gets standing_owner_id
     *
     * @return int
     */
    public function getStandingOwnerId()
    {
        return $this->container['standing_owner_id'];
    }

    /**
     * Sets standing_owner_id
     *
     * @param int $standing_owner_id The owner ID that sets the ability for someone to dock based on standings.
     *
     * @return $this
     */
    public function setStandingOwnerId($standing_owner_id)
    {
        $this->container['standing_owner_id'] = $standing_owner_id;

        return $this;
    }

    /**
     * Gets coordinates
     *
     * @return \Swagger\Client\Model\GetCorporationsCorporationIdOutpostsOutpostIdCoordinates
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \Swagger\Client\Model\GetCorporationsCorporationIdOutpostsOutpostIdCoordinates $coordinates coordinates
     *
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \Swagger\Client\Model\GetCorporationsCorporationIdOutpostsOutpostIdService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Swagger\Client\Model\GetCorporationsCorporationIdOutpostsOutpostIdService[] $services A list of services the given outpost provides
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

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


