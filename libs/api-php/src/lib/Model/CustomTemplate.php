<?php
/**
 * CustomTemplate
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowAccount Open API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CustomTemplate Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'sheet_index' => 'int',
        'columns' => 'mixed',
        'date_format' => 'OneOfDateInfo',
        'ignore_last_row' => 'bool',
        'image_url' => 'string',
        'custom_template_info' => 'OneOfCustomTemplateInfo',
        'formulas' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'sheet_index' => 'int32',
        'columns' => null,
        'date_format' => null,
        'ignore_last_row' => null,
        'image_url' => null,
        'custom_template_info' => null,
        'formulas' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'sheet_index' => 'sheetIndex',
        'columns' => 'columns',
        'date_format' => 'dateFormat',
        'ignore_last_row' => 'ignoreLastRow',
        'image_url' => 'imageUrl',
        'custom_template_info' => 'customTemplateInfo',
        'formulas' => 'formulas'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'sheet_index' => 'setSheetIndex',
        'columns' => 'setColumns',
        'date_format' => 'setDateFormat',
        'ignore_last_row' => 'setIgnoreLastRow',
        'image_url' => 'setImageUrl',
        'custom_template_info' => 'setCustomTemplateInfo',
        'formulas' => 'setFormulas'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'sheet_index' => 'getSheetIndex',
        'columns' => 'getColumns',
        'date_format' => 'getDateFormat',
        'ignore_last_row' => 'getIgnoreLastRow',
        'image_url' => 'getImageUrl',
        'custom_template_info' => 'getCustomTemplateInfo',
        'formulas' => 'getFormulas'
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
        return self::$openAPIModelName;
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['sheet_index'] = $data['sheet_index'] ?? null;
        $this->container['columns'] = $data['columns'] ?? null;
        $this->container['date_format'] = $data['date_format'] ?? null;
        $this->container['ignore_last_row'] = $data['ignore_last_row'] ?? null;
        $this->container['image_url'] = $data['image_url'] ?? null;
        $this->container['custom_template_info'] = $data['custom_template_info'] ?? null;
        $this->container['formulas'] = $data['formulas'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sheet_index
     *
     * @return int|null
     */
    public function getSheetIndex()
    {
        return $this->container['sheet_index'];
    }

    /**
     * Sets sheet_index
     *
     * @param int|null $sheet_index sheet_index
     *
     * @return self
     */
    public function setSheetIndex($sheet_index)
    {
        $this->container['sheet_index'] = $sheet_index;

        return $this;
    }

    /**
     * Gets columns
     *
     * @return mixed|null
     */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
     * Sets columns
     *
     * @param mixed|null $columns columns
     *
     * @return self
     */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;

        return $this;
    }

    /**
     * Gets date_format
     *
     * @return OneOfDateInfo|null
     */
    public function getDateFormat()
    {
        return $this->container['date_format'];
    }

    /**
     * Sets date_format
     *
     * @param OneOfDateInfo|null $date_format date_format
     *
     * @return self
     */
    public function setDateFormat($date_format)
    {
        $this->container['date_format'] = $date_format;

        return $this;
    }

    /**
     * Gets ignore_last_row
     *
     * @return bool|null
     */
    public function getIgnoreLastRow()
    {
        return $this->container['ignore_last_row'];
    }

    /**
     * Sets ignore_last_row
     *
     * @param bool|null $ignore_last_row ignore_last_row
     *
     * @return self
     */
    public function setIgnoreLastRow($ignore_last_row)
    {
        $this->container['ignore_last_row'] = $ignore_last_row;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url image_url
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets custom_template_info
     *
     * @return OneOfCustomTemplateInfo|null
     */
    public function getCustomTemplateInfo()
    {
        return $this->container['custom_template_info'];
    }

    /**
     * Sets custom_template_info
     *
     * @param OneOfCustomTemplateInfo|null $custom_template_info custom_template_info
     *
     * @return self
     */
    public function setCustomTemplateInfo($custom_template_info)
    {
        $this->container['custom_template_info'] = $custom_template_info;

        return $this;
    }

    /**
     * Gets formulas
     *
     * @return mixed|null
     */
    public function getFormulas()
    {
        return $this->container['formulas'];
    }

    /**
     * Sets formulas
     *
     * @param mixed|null $formulas formulas
     *
     * @return self
     */
    public function setFormulas($formulas)
    {
        $this->container['formulas'] = $formulas;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


