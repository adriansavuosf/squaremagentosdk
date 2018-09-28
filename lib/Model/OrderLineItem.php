<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;

/**
 * OrderLineItem Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class OrderLineItem implements ArrayAccess
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    public static $swaggerTypes = [
        'name' => 'string',
        'quantity' => 'string',
        'note' => 'string',
        'catalog_object_id' => 'string',
        'variation_name' => 'string',
        'modifiers' => '\SquareConnect\Model\OrderLineItemModifier[]',
        'taxes' => '\SquareConnect\Model\OrderLineItemTax[]',
        'discounts' => '\SquareConnect\Model\OrderLineItemDiscount[]',
        'base_price_money' => \SquareConnect\Model\Money::class,
        'gross_sales_money' => \SquareConnect\Model\Money::class,
        'total_tax_money' => \SquareConnect\Model\Money::class,
        'total_discount_money' => \SquareConnect\Model\Money::class,
        'total_money' => \SquareConnect\Model\Money::class
    ];

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    public static $attributeMap = [
        'name' => 'name',
        'quantity' => 'quantity',
        'note' => 'note',
        'catalog_object_id' => 'catalog_object_id',
        'variation_name' => 'variation_name',
        'modifiers' => 'modifiers',
        'taxes' => 'taxes',
        'discounts' => 'discounts',
        'base_price_money' => 'base_price_money',
        'gross_sales_money' => 'gross_sales_money',
        'total_tax_money' => 'total_tax_money',
        'total_discount_money' => 'total_discount_money',
        'total_money' => 'total_money'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    public static $setters = [
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'note' => 'setNote',
        'catalog_object_id' => 'setCatalogObjectId',
        'variation_name' => 'setVariationName',
        'modifiers' => 'setModifiers',
        'taxes' => 'setTaxes',
        'discounts' => 'setDiscounts',
        'base_price_money' => 'setBasePriceMoney',
        'gross_sales_money' => 'setGrossSalesMoney',
        'total_tax_money' => 'setTotalTaxMoney',
        'total_discount_money' => 'setTotalDiscountMoney',
        'total_money' => 'setTotalMoney'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    public static $getters = [
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'note' => 'getNote',
        'catalog_object_id' => 'getCatalogObjectId',
        'variation_name' => 'getVariationName',
        'modifiers' => 'getModifiers',
        'taxes' => 'getTaxes',
        'discounts' => 'getDiscounts',
        'base_price_money' => 'getBasePriceMoney',
        'gross_sales_money' => 'getGrossSalesMoney',
        'total_tax_money' => 'getTotalTaxMoney',
        'total_discount_money' => 'getTotalDiscountMoney',
        'total_money' => 'getTotalMoney'
    ];

    /**
     * $name The name of the line item.
     * @var string
     */
    private $name;
    /**
     * $quantity The quantity purchased, as a string representation of a number.
     * @var string
     */
    private $quantity;
    /**
     * $note The note of the line item.
     * @var string
     */
    private $note;
    /**
     * $catalog_object_id The [CatalogItemVariation](#type-catalogitemvariation) id applied to this line item.
     * @var string
     */
    private $catalog_object_id;
    /**
     * $variation_name The name of the variation applied to this line item.
     * @var string
     */
    private $variation_name;
    /**
     * $modifiers The [CatalogModifier](#type-catalogmodifier)s applied to this line item.
     * @var \SquareConnect\Model\OrderLineItemModifier[]
     */
    private $modifiers;
    /**
     * $taxes The taxes applied to this line item.
     * @var \SquareConnect\Model\OrderLineItemTax[]
     */
    private $taxes;
    /**
     * $discounts The discounts applied to this line item.
     * @var \SquareConnect\Model\OrderLineItemDiscount[]
     */
    private $discounts;
    /**
     * $base_price_money The base price for a single unit of the line item.
     * @var \SquareConnect\Model\Money
     */
    private $base_price_money;
    /**
     * $gross_sales_money The gross sales amount of money calculated as (item base price + modifiers price) * quantity.
     * @var \SquareConnect\Model\Money
     */
    private $gross_sales_money;
    /**
     * $total_tax_money The total tax amount of money to collect for the line item.
     * @var \SquareConnect\Model\Money
     */
    private $total_tax_money;
    /**
     * $total_discount_money The total discount amount of money to collect for the line item.
     * @var \SquareConnect\Model\Money
     */
    private $total_discount_money;
    /**
     * $total_money The total amount of money to collect for this line item.
     * @var \SquareConnect\Model\Money
     */
    private $total_money;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["name"])) {
                $this->name = $data["name"];
            } else {
                $this->name = null;
            }
            if (isset($data["quantity"])) {
                $this->quantity = $data["quantity"];
            } else {
                $this->quantity = null;
            }
            if (isset($data["note"])) {
                $this->note = $data["note"];
            } else {
                $this->note = null;
            }
            if (isset($data["catalog_object_id"])) {
                $this->catalog_object_id = $data["catalog_object_id"];
            } else {
                $this->catalog_object_id = null;
            }
            if (isset($data["variation_name"])) {
                $this->variation_name = $data["variation_name"];
            } else {
                $this->variation_name = null;
            }
            if (isset($data["modifiers"])) {
                $this->modifiers = $data["modifiers"];
            } else {
                $this->modifiers = null;
            }
            if (isset($data["taxes"])) {
                $this->taxes = $data["taxes"];
            } else {
                $this->taxes = null;
            }
            if (isset($data["discounts"])) {
                $this->discounts = $data["discounts"];
            } else {
                $this->discounts = null;
            }
            if (isset($data["base_price_money"])) {
                $this->base_price_money = $data["base_price_money"];
            } else {
                $this->base_price_money = null;
            }
            if (isset($data["gross_sales_money"])) {
                $this->gross_sales_money = $data["gross_sales_money"];
            } else {
                $this->gross_sales_money = null;
            }
            if (isset($data["total_tax_money"])) {
                $this->total_tax_money = $data["total_tax_money"];
            } else {
                $this->total_tax_money = null;
            }
            if (isset($data["total_discount_money"])) {
                $this->total_discount_money = $data["total_discount_money"];
            } else {
                $this->total_discount_money = null;
            }
            if (isset($data["total_money"])) {
                $this->total_money = $data["total_money"];
            } else {
                $this->total_money = null;
            }
        }
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
     * @param string $name The name of the line item.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets quantity
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets quantity
     * @param string $quantity The quantity purchased, as a string representation of a number.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets note
     * @param string $note The note of the line item.
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
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
     * @param string $catalog_object_id The [CatalogItemVariation](#type-catalogitemvariation) id applied to this line
     * item.
     * @return $this
     */
    public function setCatalogObjectId($catalog_object_id)
    {
        $this->catalog_object_id = $catalog_object_id;
        return $this;
    }

    /**
     * Gets variation_name
     * @return string
     */
    public function getVariationName()
    {
        return $this->variation_name;
    }

    /**
     * Sets variation_name
     * @param string $variation_name The name of the variation applied to this line item.
     * @return $this
     */
    public function setVariationName($variation_name)
    {
        $this->variation_name = $variation_name;
        return $this;
    }

    /**
     * Gets modifiers
     * @return \SquareConnect\Model\OrderLineItemModifier[]
     */
    public function getModifiers()
    {
        return $this->modifiers;
    }

    /**
     * Sets modifiers
     * @param \SquareConnect\Model\OrderLineItemModifier[] $modifiers The [CatalogModifier](#type-catalogmodifier)s
     * applied to this line item.
     * @return $this
     */
    public function setModifiers($modifiers)
    {
        $this->modifiers = $modifiers;
        return $this;
    }

    /**
     * Gets taxes
     * @return \SquareConnect\Model\OrderLineItemTax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets taxes
     * @param \SquareConnect\Model\OrderLineItemTax[] $taxes The taxes applied to this line item.
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Gets discounts
     * @return \SquareConnect\Model\OrderLineItemDiscount[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * Sets discounts
     * @param \SquareConnect\Model\OrderLineItemDiscount[] $discounts The discounts applied to this line item.
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->discounts = $discounts;
        return $this;
    }

    /**
     * Gets base_price_money
     * @return \SquareConnect\Model\Money
     */
    public function getBasePriceMoney()
    {
        return $this->base_price_money;
    }

    /**
     * Sets base_price_money
     * @param \SquareConnect\Model\Money $base_price_money The base price for a single unit of the line item.
     * @return $this
     */
    public function setBasePriceMoney($base_price_money)
    {
        $this->base_price_money = $base_price_money;
        return $this;
    }

    /**
     * Gets gross_sales_money
     * @return \SquareConnect\Model\Money
     */
    public function getGrossSalesMoney()
    {
        return $this->gross_sales_money;
    }

    /**
     * Sets gross_sales_money
     * @param \SquareConnect\Model\Money $gross_sales_money The gross sales amount of money calculated as
     * (item base price + modifiers price) * quantity.
     * @return $this
     */
    public function setGrossSalesMoney($gross_sales_money)
    {
        $this->gross_sales_money = $gross_sales_money;
        return $this;
    }

    /**
     * Gets total_tax_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalTaxMoney()
    {
        return $this->total_tax_money;
    }

    /**
     * Sets total_tax_money
     * @param \SquareConnect\Model\Money $total_tax_money The total tax amount of money to collect for the line item.
     * @return $this
     */
    public function setTotalTaxMoney($total_tax_money)
    {
        $this->total_tax_money = $total_tax_money;
        return $this;
    }

    /**
     * Gets total_discount_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalDiscountMoney()
    {
        return $this->total_discount_money;
    }

    /**
     * Sets total_discount_money
     * @param \SquareConnect\Model\Money $total_discount_money The total discount amount of money to collect for the
     * line item.
     * @return $this
     */
    public function setTotalDiscountMoney($total_discount_money)
    {
        $this->total_discount_money = $total_discount_money;
        return $this;
    }

    /**
     * Gets total_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalMoney()
    {
        return $this->total_money;
    }

    /**
     * Sets total_money
     * @param \SquareConnect\Model\Money $total_money The total amount of money to collect for this line item.
     * @return $this
     */
    public function setTotalMoney($total_money)
    {
        $this->total_money = $total_money;
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
