<?php
/**
 * AccountUsage
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Finance API
 *
 * The Finance API is a collection of endpoints which customers can use in the course of a loan application, which may assist lenders to gain the confidence they need to provide capital.
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

namespace XeroAPI\XeroPHP\Models\Finance;

use \ArrayAccess;
use \XeroAPI\XeroPHP\FinanceObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * AccountUsage Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountUsage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'month' => 'string',
        'account_id' => 'string',
        'currency_code' => 'string',
        'total_received' => 'double',
        'count_received' => 'int',
        'total_paid' => 'double',
        'count_paid' => 'int',
        'total_manual_journal' => 'double',
        'count_manual_journal' => 'int',
        'account_name' => 'string',
        'reporting_code' => 'string',
        'reporting_code_name' => 'string',
        'report_code_updated_date_utc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'month' => null,
        'account_id' => 'uuid',
        'currency_code' => null,
        'total_received' => 'double',
        'count_received' => 'int32',
        'total_paid' => 'double',
        'count_paid' => 'int32',
        'total_manual_journal' => 'double',
        'count_manual_journal' => 'int32',
        'account_name' => null,
        'reporting_code' => null,
        'reporting_code_name' => null,
        'report_code_updated_date_utc' => 'date-time'
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
        'month' => 'month',
        'account_id' => 'accountId',
        'currency_code' => 'currencyCode',
        'total_received' => 'totalReceived',
        'count_received' => 'countReceived',
        'total_paid' => 'totalPaid',
        'count_paid' => 'countPaid',
        'total_manual_journal' => 'totalManualJournal',
        'count_manual_journal' => 'countManualJournal',
        'account_name' => 'accountName',
        'reporting_code' => 'reportingCode',
        'reporting_code_name' => 'reportingCodeName',
        'report_code_updated_date_utc' => 'reportCodeUpdatedDateUtc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'month' => 'setMonth',
        'account_id' => 'setAccountId',
        'currency_code' => 'setCurrencyCode',
        'total_received' => 'setTotalReceived',
        'count_received' => 'setCountReceived',
        'total_paid' => 'setTotalPaid',
        'count_paid' => 'setCountPaid',
        'total_manual_journal' => 'setTotalManualJournal',
        'count_manual_journal' => 'setCountManualJournal',
        'account_name' => 'setAccountName',
        'reporting_code' => 'setReportingCode',
        'reporting_code_name' => 'setReportingCodeName',
        'report_code_updated_date_utc' => 'setReportCodeUpdatedDateUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'month' => 'getMonth',
        'account_id' => 'getAccountId',
        'currency_code' => 'getCurrencyCode',
        'total_received' => 'getTotalReceived',
        'count_received' => 'getCountReceived',
        'total_paid' => 'getTotalPaid',
        'count_paid' => 'getCountPaid',
        'total_manual_journal' => 'getTotalManualJournal',
        'count_manual_journal' => 'getCountManualJournal',
        'account_name' => 'getAccountName',
        'reporting_code' => 'getReportingCode',
        'reporting_code_name' => 'getReportingCodeName',
        'report_code_updated_date_utc' => 'getReportCodeUpdatedDateUtc'
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
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['total_received'] = isset($data['total_received']) ? $data['total_received'] : null;
        $this->container['count_received'] = isset($data['count_received']) ? $data['count_received'] : null;
        $this->container['total_paid'] = isset($data['total_paid']) ? $data['total_paid'] : null;
        $this->container['count_paid'] = isset($data['count_paid']) ? $data['count_paid'] : null;
        $this->container['total_manual_journal'] = isset($data['total_manual_journal']) ? $data['total_manual_journal'] : null;
        $this->container['count_manual_journal'] = isset($data['count_manual_journal']) ? $data['count_manual_journal'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['reporting_code'] = isset($data['reporting_code']) ? $data['reporting_code'] : null;
        $this->container['reporting_code_name'] = isset($data['reporting_code_name']) ? $data['reporting_code_name'] : null;
        $this->container['report_code_updated_date_utc'] = isset($data['report_code_updated_date_utc']) ? $data['report_code_updated_date_utc'] : null;
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
     * Gets month
     *
     * @return string|null
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param string|null $month The month this usage item contains data for
     *
     * @return $this
     */
    public function setMonth($month)
    {

        $this->container['month'] = $month;

        return $this;
    }



    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id The account this usage item contains data for
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {

        $this->container['account_id'] = $account_id;

        return $this;
    }



    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code The currency code this usage item contains data for
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {

        $this->container['currency_code'] = $currency_code;

        return $this;
    }



    /**
     * Gets total_received
     *
     * @return double|null
     */
    public function getTotalReceived()
    {
        return $this->container['total_received'];
    }

    /**
     * Sets total_received
     *
     * @param double|null $total_received Total received
     *
     * @return $this
     */
    public function setTotalReceived($total_received)
    {

        $this->container['total_received'] = $total_received;

        return $this;
    }



    /**
     * Gets count_received
     *
     * @return int|null
     */
    public function getCountReceived()
    {
        return $this->container['count_received'];
    }

    /**
     * Sets count_received
     *
     * @param int|null $count_received Count of received
     *
     * @return $this
     */
    public function setCountReceived($count_received)
    {

        $this->container['count_received'] = $count_received;

        return $this;
    }



    /**
     * Gets total_paid
     *
     * @return double|null
     */
    public function getTotalPaid()
    {
        return $this->container['total_paid'];
    }

    /**
     * Sets total_paid
     *
     * @param double|null $total_paid Total paid
     *
     * @return $this
     */
    public function setTotalPaid($total_paid)
    {

        $this->container['total_paid'] = $total_paid;

        return $this;
    }



    /**
     * Gets count_paid
     *
     * @return int|null
     */
    public function getCountPaid()
    {
        return $this->container['count_paid'];
    }

    /**
     * Sets count_paid
     *
     * @param int|null $count_paid Count of paid
     *
     * @return $this
     */
    public function setCountPaid($count_paid)
    {

        $this->container['count_paid'] = $count_paid;

        return $this;
    }



    /**
     * Gets total_manual_journal
     *
     * @return double|null
     */
    public function getTotalManualJournal()
    {
        return $this->container['total_manual_journal'];
    }

    /**
     * Sets total_manual_journal
     *
     * @param double|null $total_manual_journal Total value of manual journals
     *
     * @return $this
     */
    public function setTotalManualJournal($total_manual_journal)
    {

        $this->container['total_manual_journal'] = $total_manual_journal;

        return $this;
    }



    /**
     * Gets count_manual_journal
     *
     * @return int|null
     */
    public function getCountManualJournal()
    {
        return $this->container['count_manual_journal'];
    }

    /**
     * Sets count_manual_journal
     *
     * @param int|null $count_manual_journal Count of manual journals
     *
     * @return $this
     */
    public function setCountManualJournal($count_manual_journal)
    {

        $this->container['count_manual_journal'] = $count_manual_journal;

        return $this;
    }



    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name The name of the account
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {

        $this->container['account_name'] = $account_name;

        return $this;
    }



    /**
     * Gets reporting_code
     *
     * @return string|null
     */
    public function getReportingCode()
    {
        return $this->container['reporting_code'];
    }

    /**
     * Sets reporting_code
     *
     * @param string|null $reporting_code Shown if set
     *
     * @return $this
     */
    public function setReportingCode($reporting_code)
    {

        $this->container['reporting_code'] = $reporting_code;

        return $this;
    }



    /**
     * Gets reporting_code_name
     *
     * @return string|null
     */
    public function getReportingCodeName()
    {
        return $this->container['reporting_code_name'];
    }

    /**
     * Sets reporting_code_name
     *
     * @param string|null $reporting_code_name Shown if set
     *
     * @return $this
     */
    public function setReportingCodeName($reporting_code_name)
    {

        $this->container['reporting_code_name'] = $reporting_code_name;

        return $this;
    }



    /**
     * Gets report_code_updated_date_utc
     *
     * @return \DateTime|null
     */
    public function getReportCodeUpdatedDateUtc()
    {
        return $this->container['report_code_updated_date_utc'];
    }

    /**
     * Sets report_code_updated_date_utc
     *
     * @param \DateTime|null $report_code_updated_date_utc Last modified date UTC format
     *
     * @return $this
     */
    public function setReportCodeUpdatedDateUtc($report_code_updated_date_utc)
    {

        $this->container['report_code_updated_date_utc'] = $report_code_updated_date_utc;

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
            FinanceObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


