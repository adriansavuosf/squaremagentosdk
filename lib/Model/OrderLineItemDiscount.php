<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;

/**
 * OrderLineItemDiscount Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class OrderLineItemDiscount implements ArrayAccess
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    public static $swaggerTypes = [
        'catalog_object_id' => 'string',
        'name' => 'string',
        'type' => 'string',
        'percentage' => 'string',
        'amount_money' => \SquareConnect\Model\Money::class,
        'applied_money' => \SquareConnect\Model\Money::class,
        'scope' => 'string'
    ];

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    public static $attributeMap = [
        'catalog_object_id' => 'catalog_object_id',
        'name' => 'name',
        'type' => 'type',
        'percentage' => 'percentage',
        'amount_money' => 'amount_money',
        'applied_money' => 'applied_money',
        'scope' => 'scope'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    public static $setters = [
        'catalog_object_id' => 'setCatalogObjectId',
        'name' => 'setName',
        'type' => 'setType',
        'percentage' => 'setPercentage',
        'amount_money' => 'setAmountMoney',
        'applied_money' => 'setAppliedMoney',
        'scope' => 'setScope'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    public static $getters = [
        'catalog_object_id' => 'getCatalogObjectId',
        'name' => 'getName',
        'type' => 'getType',
        'percentage' => 'getPercentage',
        'amount_money' => 'getAmountMoney',
        'applied_money' => 'getAppliedMoney',
        'scope' => 'getScope'
    ];

    /**
     * $catalog_object_id The catalog object id referencing [CatalogDiscount](#type-catalogdiscount).
     * @var string
     */
    private $catalog_object_id;
    /**
     * $name The discount's name.
     * @var string
     */
    private $name;
    /**
     * $type The type of the discount. If it is created by API, it would be either `FIXED_PERCENTAGE` or `FIXED_AMOUNT`.
     * VARIABLE_* is not supported in API because the order is created at the time of sale and either percentage or
     * amount has to be specified.  See [OrderLineItemDiscountType](#type-orderlineitemdiscounttype)
     * for possible values.
     * @var string
     */
    private $type;
    /**
     * $percentage The percentage of the tax, as a string representation of a decimal number. A value of `7.25`
     * corresponds to a percentage of 7.25%.  The percentage won't be set for an amount-based discount.
     * @var string
     */
    private $percentage;
    /**
     * $amount_money The total monetary amount of the applicable discount. If it is at order level, it is the value of
     * the order level discount. If it is at line item level, it is the value of the line item level discount.
     * The amount_money won't be set for a percentage-based discount.
     * @var \SquareConnect\Model\Money
     */
    private $amount_money;
    /**
     * $applied_money The amount of discount actually applied to this line item.  Represents the amount of money
     * applied to a line item as a discount When an amount-based discount is at order-level, this value is different
     * from `amount_money` because the discount is distributed across the line items.
     * @var \SquareConnect\Model\Money
     */
    private $applied_money;
    /**
     * $scope Indicates the level at which the discount applies.
     * See [OrderLineItemDiscountScope](#type-orderlineitemdiscountscope) for possible values.
     * @var string
     */
    private $scope;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["catalog_object_id"])) {
                $this->catalog_object_id = $data["catalog_object_id"];
            } else {
                $this->catalog_object_id = null;
            }
            if (isset($data["name"])) {
                $this->name = $data["name"];
            } else {
                $this->name = null;
            }
            if (isset($data["type"])) {
                $this->type = $data["type"];
            } else {
                $this->type = null;
            }
            if (isset($data["percentage"])) {
                $this->percentage = $data["percentage"];
            } else {
                $this->percentage = null;
            }
            if (isset($data["amount_money"])) {
                $this->amount_money = $data["amount_money"];
            } else {
                $this->amount_money = null;
            }
            if (isset($data["applied_money"])) {
                $this->applied_money = $data["applied_money"];
            } else {
                $this->applied_money = null;
            }
            if (isset($data["scope"])) {
                $this->scope = $data["scope"];
            } else {
                $this->scope = null;
            }
        }
    }

    /**
     * Gets catalog_object_id
     * @return string
     */
    public function getCatalogObjectId()
    {
        return $this->catalog_object_id;
    }

    /**
     * Sets catalog_object_id
     * @param string $catalog_object_id The catalog object id referencing [CatalogDiscount](#type-catalogdiscount).
     * @return $this
     */
    public function setCatalogObjectId($catalog_object_id)
    {
        $this->catalog_object_id = $catalog_object_id;
        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name
     * @param string $name The discount's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets type
     * @param string $type The type of the discount. If it is created by API, it would be either `FIXED_PERCENTAGE` or
     * `FIXED_AMOUNT`.  VARIABLE_* is not supported in API because the order is created at the time of sale and either
     * percentage or amount has to be specified.  See [OrderLineItemDiscountType](#type-orderlineitemdiscounttype)
     * for possible values.
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets percentage
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets percentage
     * @param string $percentage The percentage of the tax, as a string representation of a decimal number.
     * A value of `7.25` corresponds to a percentage of 7.25%.  The percentage won't be set for an amount-based
     * discount.
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }

    /**
     * Gets amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }

    /**
     * Sets amount_money
     * @param \SquareConnect\Model\Money $amount_money The total monetary amount of the applicable discount.
     * If it is at order level, it is the value of the order level discount.
     * If it is at line item level, it is the value of the line item level discount.
     * The amount_money won't be set for a percentage-based discount.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }

    /**
     * Gets applied_money
     * @return \SquareConnect\Model\Money
     */
    public function getAppliedMoney()
    {
        return $this->applied_money;
    }

    /**
     * Sets applied_money
     * @param \SquareConnect\Model\Money $applied_money The amount of discount actually applied to this line item.
     * Represents the amount of money applied to a line item as a discount When an amount-based discount is at
     * order-level, this value is different from `amount_money` because the discount is distributed across the line
     * items.
     * @return $this
     */
    public function setAppliedMoney($applied_money)
    {
        $this->applied_money = $applied_money;
        return $this;
    }

    /**
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets scope
     * @param string $scope Indicates the level at which the discount applies.
     * See [OrderLineItemDiscountScope](#type-orderlineitemdiscountscope) for possible values.
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed $value Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
