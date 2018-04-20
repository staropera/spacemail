<?php
/**
 * GetCharactersCharacterIdFwStatsOk
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
 * GetCharactersCharacterIdFwStatsOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdFwStatsOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_fw_stats_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'faction_id' => 'int',
        'enlisted_on' => '\DateTime',
        'current_rank' => 'int',
        'highest_rank' => 'int',
        'kills' => '\Swagger\Client\Model\GetCharactersCharacterIdFwStatsKills',
        'victory_points' => '\Swagger\Client\Model\GetCharactersCharacterIdFwStatsVictoryPoints'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'faction_id' => 'int32',
        'enlisted_on' => 'date-time',
        'current_rank' => 'int32',
        'highest_rank' => 'int32',
        'kills' => null,
        'victory_points' => null
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
        'faction_id' => 'faction_id',
        'enlisted_on' => 'enlisted_on',
        'current_rank' => 'current_rank',
        'highest_rank' => 'highest_rank',
        'kills' => 'kills',
        'victory_points' => 'victory_points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'faction_id' => 'setFactionId',
        'enlisted_on' => 'setEnlistedOn',
        'current_rank' => 'setCurrentRank',
        'highest_rank' => 'setHighestRank',
        'kills' => 'setKills',
        'victory_points' => 'setVictoryPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'faction_id' => 'getFactionId',
        'enlisted_on' => 'getEnlistedOn',
        'current_rank' => 'getCurrentRank',
        'highest_rank' => 'getHighestRank',
        'kills' => 'getKills',
        'victory_points' => 'getVictoryPoints'
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
        $this->container['faction_id'] = isset($data['faction_id']) ? $data['faction_id'] : null;
        $this->container['enlisted_on'] = isset($data['enlisted_on']) ? $data['enlisted_on'] : null;
        $this->container['current_rank'] = isset($data['current_rank']) ? $data['current_rank'] : null;
        $this->container['highest_rank'] = isset($data['highest_rank']) ? $data['highest_rank'] : null;
        $this->container['kills'] = isset($data['kills']) ? $data['kills'] : null;
        $this->container['victory_points'] = isset($data['victory_points']) ? $data['victory_points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['current_rank']) && ($this->container['current_rank'] > 9)) {
            $invalidProperties[] = "invalid value for 'current_rank', must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['current_rank']) && ($this->container['current_rank'] < 0)) {
            $invalidProperties[] = "invalid value for 'current_rank', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['highest_rank']) && ($this->container['highest_rank'] > 9)) {
            $invalidProperties[] = "invalid value for 'highest_rank', must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['highest_rank']) && ($this->container['highest_rank'] < 0)) {
            $invalidProperties[] = "invalid value for 'highest_rank', must be bigger than or equal to 0.";
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

        if ($this->container['current_rank'] > 9) {
            return false;
        }
        if ($this->container['current_rank'] < 0) {
            return false;
        }
        if ($this->container['highest_rank'] > 9) {
            return false;
        }
        if ($this->container['highest_rank'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets faction_id
     *
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     *
     * @param int $faction_id The faction the given character is enlisted to fight for. Will not be included if character is not enlisted in faction warfare
     *
     * @return $this
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets enlisted_on
     *
     * @return \DateTime
     */
    public function getEnlistedOn()
    {
        return $this->container['enlisted_on'];
    }

    /**
     * Sets enlisted_on
     *
     * @param \DateTime $enlisted_on The enlistment date of the given character into faction warfare. Will not be included if character is not enlisted in faction warfare
     *
     * @return $this
     */
    public function setEnlistedOn($enlisted_on)
    {
        $this->container['enlisted_on'] = $enlisted_on;

        return $this;
    }

    /**
     * Gets current_rank
     *
     * @return int
     */
    public function getCurrentRank()
    {
        return $this->container['current_rank'];
    }

    /**
     * Sets current_rank
     *
     * @param int $current_rank The given character's current faction rank
     *
     * @return $this
     */
    public function setCurrentRank($current_rank)
    {

        if (!is_null($current_rank) && ($current_rank > 9)) {
            throw new \InvalidArgumentException('invalid value for $current_rank when calling GetCharactersCharacterIdFwStatsOk., must be smaller than or equal to 9.');
        }
        if (!is_null($current_rank) && ($current_rank < 0)) {
            throw new \InvalidArgumentException('invalid value for $current_rank when calling GetCharactersCharacterIdFwStatsOk., must be bigger than or equal to 0.');
        }

        $this->container['current_rank'] = $current_rank;

        return $this;
    }

    /**
     * Gets highest_rank
     *
     * @return int
     */
    public function getHighestRank()
    {
        return $this->container['highest_rank'];
    }

    /**
     * Sets highest_rank
     *
     * @param int $highest_rank The given character's highest faction rank achieved
     *
     * @return $this
     */
    public function setHighestRank($highest_rank)
    {

        if (!is_null($highest_rank) && ($highest_rank > 9)) {
            throw new \InvalidArgumentException('invalid value for $highest_rank when calling GetCharactersCharacterIdFwStatsOk., must be smaller than or equal to 9.');
        }
        if (!is_null($highest_rank) && ($highest_rank < 0)) {
            throw new \InvalidArgumentException('invalid value for $highest_rank when calling GetCharactersCharacterIdFwStatsOk., must be bigger than or equal to 0.');
        }

        $this->container['highest_rank'] = $highest_rank;

        return $this;
    }

    /**
     * Gets kills
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdFwStatsKills
     */
    public function getKills()
    {
        return $this->container['kills'];
    }

    /**
     * Sets kills
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdFwStatsKills $kills kills
     *
     * @return $this
     */
    public function setKills($kills)
    {
        $this->container['kills'] = $kills;

        return $this;
    }

    /**
     * Gets victory_points
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdFwStatsVictoryPoints
     */
    public function getVictoryPoints()
    {
        return $this->container['victory_points'];
    }

    /**
     * Sets victory_points
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdFwStatsVictoryPoints $victory_points victory_points
     *
     * @return $this
     */
    public function setVictoryPoints($victory_points)
    {
        $this->container['victory_points'] = $victory_points;

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


