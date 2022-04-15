<?php
/**
 * LeaveType
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
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
use ReturnTypeWillChange;

/**
 * LeaveType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LeaveType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LeaveType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'leave_id' => 'string',
        'leave_type_id' => 'string',
        'name' => 'string',
        'is_paid_leave' => 'bool',
        'show_on_payslip' => 'bool',
        'updated_date_utc' => '\DateTime',
        'is_active' => 'bool',
        'is_statutory_leave' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'leave_id' => 'uuid',
        'leave_type_id' => 'uuid',
        'name' => null,
        'is_paid_leave' => null,
        'show_on_payslip' => null,
        'updated_date_utc' => 'date-time',
        'is_active' => null,
        'is_statutory_leave' => null
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
        'leave_id' => 'leaveID',
        'leave_type_id' => 'leaveTypeID',
        'name' => 'name',
        'is_paid_leave' => 'isPaidLeave',
        'show_on_payslip' => 'showOnPayslip',
        'updated_date_utc' => 'updatedDateUTC',
        'is_active' => 'isActive',
        'is_statutory_leave' => 'isStatutoryLeave'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_id' => 'setLeaveId',
        'leave_type_id' => 'setLeaveTypeId',
        'name' => 'setName',
        'is_paid_leave' => 'setIsPaidLeave',
        'show_on_payslip' => 'setShowOnPayslip',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'is_active' => 'setIsActive',
        'is_statutory_leave' => 'setIsStatutoryLeave'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_id' => 'getLeaveId',
        'leave_type_id' => 'getLeaveTypeId',
        'name' => 'getName',
        'is_paid_leave' => 'getIsPaidLeave',
        'show_on_payslip' => 'getShowOnPayslip',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'is_active' => 'getIsActive',
        'is_statutory_leave' => 'getIsStatutoryLeave'
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
        $this->container['leave_id'] = isset($data['leave_id']) ? $data['leave_id'] : null;
        $this->container['leave_type_id'] = isset($data['leave_type_id']) ? $data['leave_type_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_paid_leave'] = isset($data['is_paid_leave']) ? $data['is_paid_leave'] : null;
        $this->container['show_on_payslip'] = isset($data['show_on_payslip']) ? $data['show_on_payslip'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['is_statutory_leave'] = isset($data['is_statutory_leave']) ? $data['is_statutory_leave'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['is_paid_leave'] === null) {
            $invalidProperties[] = "'is_paid_leave' can't be null";
        }
        if ($this->container['show_on_payslip'] === null) {
            $invalidProperties[] = "'show_on_payslip' can't be null";
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
     * Gets leave_id
     *
     * @return string|null
     */
    public function getLeaveId()
    {
        return $this->container['leave_id'];
    }

    /**
     * Sets leave_id
     *
     * @param string|null $leave_id Xero unique identifier for the leave
     *
     * @return $this
     */
    public function setLeaveId($leave_id)
    {

        $this->container['leave_id'] = $leave_id;

        return $this;
    }



    /**
     * Gets leave_type_id
     *
     * @return string|null
     */
    public function getLeaveTypeId()
    {
        return $this->container['leave_type_id'];
    }

    /**
     * Sets leave_type_id
     *
     * @param string|null $leave_type_id Xero unique identifier for the leave type
     *
     * @return $this
     */
    public function setLeaveTypeId($leave_type_id)
    {

        $this->container['leave_type_id'] = $leave_type_id;

        return $this;
    }



    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the leave type
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets is_paid_leave
     *
     * @return bool
     */
    public function getIsPaidLeave()
    {
        return $this->container['is_paid_leave'];
    }

    /**
     * Sets is_paid_leave
     *
     * @param bool $is_paid_leave Indicate that an employee will be paid when taking this type of leave
     *
     * @return $this
     */
    public function setIsPaidLeave($is_paid_leave)
    {

        $this->container['is_paid_leave'] = $is_paid_leave;

        return $this;
    }



    /**
     * Gets show_on_payslip
     *
     * @return bool
     */
    public function getShowOnPayslip()
    {
        return $this->container['show_on_payslip'];
    }

    /**
     * Sets show_on_payslip
     *
     * @param bool $show_on_payslip Indicate that a balance for this leave type to be shown on the employee’s payslips
     *
     * @return $this
     */
    public function setShowOnPayslip($show_on_payslip)
    {

        $this->container['show_on_payslip'] = $show_on_payslip;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return \DateTime|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }

    /**
     * Sets updated_date_utc
     *
     * @param \DateTime|null $updated_date_utc UTC timestamp of last update to the leave type note
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }



    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active Shows whether the leave type is active or not
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {

        $this->container['is_active'] = $is_active;

        return $this;
    }



    /**
     * Gets is_statutory_leave
     *
     * @return bool|null
     */
    public function getIsStatutoryLeave()
    {
        return $this->container['is_statutory_leave'];
    }

    /**
     * Sets is_statutory_leave
     *
     * @param bool|null $is_statutory_leave Shows whether the leave type is a statutory leave type or not
     *
     * @return $this
     */
    public function setIsStatutoryLeave($is_statutory_leave)
    {

        $this->container['is_statutory_leave'] = $is_statutory_leave;

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
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


