<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_type' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'address_line4' => 'string',
        'city' => 'string',
        'region' => 'string',
        'postal_code' => 'string',
        'country' => 'string',
        'attention_to' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'address_type' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'address_line4' => null,
        'city' => null,
        'region' => null,
        'postal_code' => null,
        'country' => null,
        'attention_to' => null
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
        'address_type' => 'AddressType',
        'address_line1' => 'AddressLine1',
        'address_line2' => 'AddressLine2',
        'address_line3' => 'AddressLine3',
        'address_line4' => 'AddressLine4',
        'city' => 'City',
        'region' => 'Region',
        'postal_code' => 'PostalCode',
        'country' => 'Country',
        'attention_to' => 'AttentionTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_type' => 'setAddressType',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'address_line4' => 'setAddressLine4',
        'city' => 'setCity',
        'region' => 'setRegion',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry',
        'attention_to' => 'setAttentionTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_type' => 'getAddressType',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'address_line4' => 'getAddressLine4',
        'city' => 'getCity',
        'region' => 'getRegion',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry',
        'attention_to' => 'getAttentionTo'
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

    const ADDRESS_TYPE_POBOX = 'POBOX';
    const ADDRESS_TYPE_STREET = 'STREET';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_POBOX,
            self::ADDRESS_TYPE_STREET,
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
        $this->container['address_type'] = isset($data['address_type']) ? $data['address_type'] : null;
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['address_line3'] = isset($data['address_line3']) ? $data['address_line3'] : null;
        $this->container['address_line4'] = isset($data['address_line4']) ? $data['address_line4'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['attention_to'] = isset($data['attention_to']) ? $data['attention_to'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($this->container['address_type']) && !in_array($this->container['address_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'address_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['address_line1']) && (mb_strlen($this->container['address_line1']) > 500)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) > 500)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['address_line3']) && (mb_strlen($this->container['address_line3']) > 500)) {
            $invalidProperties[] = "invalid value for 'address_line3', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['address_line4']) && (mb_strlen($this->container['address_line4']) > 500)) {
            $invalidProperties[] = "invalid value for 'address_line4', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 255)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 255)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 50)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 50)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['attention_to']) && (mb_strlen($this->container['attention_to']) > 255)) {
            $invalidProperties[] = "invalid value for 'attention_to', the character length must be smaller than or equal to 255.";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets address_type
     *
     * @return string|null
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param string|null $address_type define the type of address
     *
     * @return $this
     */
    public function setAddressType($address_type)
    {
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($address_type) && !in_array($address_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'address_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['address_type'] = $address_type;

        return $this;
    }



    /**
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 max length = 500
     *
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        if (!is_null($address_line1) && (mb_strlen($address_line1) > 500)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling Address., must be smaller than or equal to 500.');
        }


        $this->container['address_line1'] = $address_line1;

        return $this;
    }



    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 max length = 500
     *
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        if (!is_null($address_line2) && (mb_strlen($address_line2) > 500)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling Address., must be smaller than or equal to 500.');
        }


        $this->container['address_line2'] = $address_line2;

        return $this;
    }



    /**
     * Gets address_line3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3
     *
     * @param string|null $address_line3 max length = 500
     *
     * @return $this
     */
    public function setAddressLine3($address_line3)
    {
        if (!is_null($address_line3) && (mb_strlen($address_line3) > 500)) {
            throw new \InvalidArgumentException('invalid length for $address_line3 when calling Address., must be smaller than or equal to 500.');
        }


        $this->container['address_line3'] = $address_line3;

        return $this;
    }



    /**
     * Gets address_line4
     *
     * @return string|null
     */
    public function getAddressLine4()
    {
        return $this->container['address_line4'];
    }

    /**
     * Sets address_line4
     *
     * @param string|null $address_line4 max length = 500
     *
     * @return $this
     */
    public function setAddressLine4($address_line4)
    {
        if (!is_null($address_line4) && (mb_strlen($address_line4) > 500)) {
            throw new \InvalidArgumentException('invalid length for $address_line4 when calling Address., must be smaller than or equal to 500.');
        }


        $this->container['address_line4'] = $address_line4;

        return $this;
    }



    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city max length = 255
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 255)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 255.');
        }


        $this->container['city'] = $city;

        return $this;
    }



    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region max length = 255
     *
     * @return $this
     */
    public function setRegion($region)
    {
        if (!is_null($region) && (mb_strlen($region) > 255)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be smaller than or equal to 255.');
        }


        $this->container['region'] = $region;

        return $this;
    }



    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code max length = 50
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        if (!is_null($postal_code) && (mb_strlen($postal_code) > 50)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be smaller than or equal to 50.');
        }


        $this->container['postal_code'] = $postal_code;

        return $this;
    }



    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country max length = 50, [A-Z], [a-z] only
     *
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (mb_strlen($country) > 50)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Address., must be smaller than or equal to 50.');
        }


        $this->container['country'] = $country;

        return $this;
    }



    /**
     * Gets attention_to
     *
     * @return string|null
     */
    public function getAttentionTo()
    {
        return $this->container['attention_to'];
    }

    /**
     * Sets attention_to
     *
     * @param string|null $attention_to max length = 255
     *
     * @return $this
     */
    public function setAttentionTo($attention_to)
    {
        if (!is_null($attention_to) && (mb_strlen($attention_to) > 255)) {
            throw new \InvalidArgumentException('invalid length for $attention_to when calling Address., must be smaller than or equal to 255.');
        }


        $this->container['attention_to'] = $attention_to;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
     #[ReturnTypeWillChange]
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
     #[ReturnTypeWillChange]
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
     #[ReturnTypeWillChange]
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
     #[ReturnTypeWillChange]
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
        return json_encode(
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


