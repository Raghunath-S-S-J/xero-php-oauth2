<?php
/**
 * EmployeeOpeningBalances
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll UK
 *
 * This is the Xero Payroll API for orgs in the UK region.
 *
 * OpenAPI spec version: 2.4.1
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollUk;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollUkObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * EmployeeOpeningBalances Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmployeeOpeningBalances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeOpeningBalances';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'statutory_adoption_pay' => 'double',
        'statutory_maternity_pay' => 'double',
        'statutory_paternity_pay' => 'double',
        'statutory_shared_parental_pay' => 'double',
        'statutory_sick_pay' => 'double',
        'prior_employee_number' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'statutory_adoption_pay' => 'double',
        'statutory_maternity_pay' => 'double',
        'statutory_paternity_pay' => 'double',
        'statutory_shared_parental_pay' => 'double',
        'statutory_sick_pay' => 'double',
        'prior_employee_number' => 'double'
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
        'statutory_adoption_pay' => 'statutoryAdoptionPay',
        'statutory_maternity_pay' => 'statutoryMaternityPay',
        'statutory_paternity_pay' => 'statutoryPaternityPay',
        'statutory_shared_parental_pay' => 'statutorySharedParentalPay',
        'statutory_sick_pay' => 'statutorySickPay',
        'prior_employee_number' => 'priorEmployeeNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'statutory_adoption_pay' => 'setStatutoryAdoptionPay',
        'statutory_maternity_pay' => 'setStatutoryMaternityPay',
        'statutory_paternity_pay' => 'setStatutoryPaternityPay',
        'statutory_shared_parental_pay' => 'setStatutorySharedParentalPay',
        'statutory_sick_pay' => 'setStatutorySickPay',
        'prior_employee_number' => 'setPriorEmployeeNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'statutory_adoption_pay' => 'getStatutoryAdoptionPay',
        'statutory_maternity_pay' => 'getStatutoryMaternityPay',
        'statutory_paternity_pay' => 'getStatutoryPaternityPay',
        'statutory_shared_parental_pay' => 'getStatutorySharedParentalPay',
        'statutory_sick_pay' => 'getStatutorySickPay',
        'prior_employee_number' => 'getPriorEmployeeNumber'
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
        $this->container['statutory_adoption_pay'] = isset($data['statutory_adoption_pay']) ? $data['statutory_adoption_pay'] : null;
        $this->container['statutory_maternity_pay'] = isset($data['statutory_maternity_pay']) ? $data['statutory_maternity_pay'] : null;
        $this->container['statutory_paternity_pay'] = isset($data['statutory_paternity_pay']) ? $data['statutory_paternity_pay'] : null;
        $this->container['statutory_shared_parental_pay'] = isset($data['statutory_shared_parental_pay']) ? $data['statutory_shared_parental_pay'] : null;
        $this->container['statutory_sick_pay'] = isset($data['statutory_sick_pay']) ? $data['statutory_sick_pay'] : null;
        $this->container['prior_employee_number'] = isset($data['prior_employee_number']) ? $data['prior_employee_number'] : null;
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
     * Gets statutory_adoption_pay
     *
     * @return double|null
     */
    public function getStatutoryAdoptionPay()
    {
        return $this->container['statutory_adoption_pay'];
    }

    /**
     * Sets statutory_adoption_pay
     *
     * @param double|null $statutory_adoption_pay The total accumulated statutory adoption pay amount received by the employee for current fiscal year to date
     *
     * @return $this
     */
    public function setStatutoryAdoptionPay($statutory_adoption_pay)
    {

        $this->container['statutory_adoption_pay'] = $statutory_adoption_pay;

        return $this;
    }



    /**
     * Gets statutory_maternity_pay
     *
     * @return double|null
     */
    public function getStatutoryMaternityPay()
    {
        return $this->container['statutory_maternity_pay'];
    }

    /**
     * Sets statutory_maternity_pay
     *
     * @param double|null $statutory_maternity_pay The total accumulated statutory maternity pay amount received by the employee for current fiscal year to date
     *
     * @return $this
     */
    public function setStatutoryMaternityPay($statutory_maternity_pay)
    {

        $this->container['statutory_maternity_pay'] = $statutory_maternity_pay;

        return $this;
    }



    /**
     * Gets statutory_paternity_pay
     *
     * @return double|null
     */
    public function getStatutoryPaternityPay()
    {
        return $this->container['statutory_paternity_pay'];
    }

    /**
     * Sets statutory_paternity_pay
     *
     * @param double|null $statutory_paternity_pay The total accumulated statutory paternity pay amount received by the employee for current fiscal year to date
     *
     * @return $this
     */
    public function setStatutoryPaternityPay($statutory_paternity_pay)
    {

        $this->container['statutory_paternity_pay'] = $statutory_paternity_pay;

        return $this;
    }



    /**
     * Gets statutory_shared_parental_pay
     *
     * @return double|null
     */
    public function getStatutorySharedParentalPay()
    {
        return $this->container['statutory_shared_parental_pay'];
    }

    /**
     * Sets statutory_shared_parental_pay
     *
     * @param double|null $statutory_shared_parental_pay The total accumulated statutory shared parental pay amount received by the employee for current fiscal year to date
     *
     * @return $this
     */
    public function setStatutorySharedParentalPay($statutory_shared_parental_pay)
    {

        $this->container['statutory_shared_parental_pay'] = $statutory_shared_parental_pay;

        return $this;
    }



    /**
     * Gets statutory_sick_pay
     *
     * @return double|null
     */
    public function getStatutorySickPay()
    {
        return $this->container['statutory_sick_pay'];
    }

    /**
     * Sets statutory_sick_pay
     *
     * @param double|null $statutory_sick_pay The total accumulated statutory sick pay amount received by the employee for current fiscal year to date
     *
     * @return $this
     */
    public function setStatutorySickPay($statutory_sick_pay)
    {

        $this->container['statutory_sick_pay'] = $statutory_sick_pay;

        return $this;
    }



    /**
     * Gets prior_employee_number
     *
     * @return double|null
     */
    public function getPriorEmployeeNumber()
    {
        return $this->container['prior_employee_number'];
    }

    /**
     * Sets prior_employee_number
     *
     * @param double|null $prior_employee_number The unique employee number issued by the employee's former employer
     *
     * @return $this
     */
    public function setPriorEmployeeNumber($prior_employee_number)
    {

        $this->container['prior_employee_number'] = $prior_employee_number;

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
        return json_encode(
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


