<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * @deprecated
 * Transaction Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class Transaction implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'location_id' => 'string',
        'created_at' => 'string',
        'tenders' => '\SquareConnect\Model\Tender[]',
        'refunds' => '\SquareConnect\Model\Refund[]',
        'reference_id' => 'string',
        'product' => 'string',
        'client_id' => 'string',
        'shipping_address' => '\SquareConnect\Model\Address',
        'order_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'location_id' => 'location_id',
        'created_at' => 'created_at',
        'tenders' => 'tenders',
        'refunds' => 'refunds',
        'reference_id' => 'reference_id',
        'product' => 'product',
        'client_id' => 'client_id',
        'shipping_address' => 'shipping_address',
        'order_id' => 'order_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'location_id' => 'setLocationId',
        'created_at' => 'setCreatedAt',
        'tenders' => 'setTenders',
        'refunds' => 'setRefunds',
        'reference_id' => 'setReferenceId',
        'product' => 'setProduct',
        'client_id' => 'setClientId',
        'shipping_address' => 'setShippingAddress',
        'order_id' => 'setOrderId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'location_id' => 'getLocationId',
        'created_at' => 'getCreatedAt',
        'tenders' => 'getTenders',
        'refunds' => 'getRefunds',
        'reference_id' => 'getReferenceId',
        'product' => 'getProduct',
        'client_id' => 'getClientId',
        'shipping_address' => 'getShippingAddress',
        'order_id' => 'getOrderId'
    );
  
    /**
      * $id The transaction's unique ID, issued by Square payments servers.
      * @var string
      */
    protected $id;
    /**
      * $location_id The ID of the transaction's associated location.
      * @var string
      */
    protected $location_id;
    /**
      * $created_at The time when the transaction was created, in RFC 3339 format.
      * @var string
      */
    protected $created_at;
    /**
      * $tenders The tenders used to pay in the transaction.
      * @var \SquareConnect\Model\Tender[]
      */
    protected $tenders;
    /**
      * $refunds Refunds that have been applied to any tender in the transaction.
      * @var \SquareConnect\Model\Refund[]
      */
    protected $refunds;
    /**
      * $reference_id If the transaction was created with the `Charge` endpoint, this value is the same as the value provided for the `reference_id` parameter in the request to that endpoint. Otherwise, it is not set.
      * @var string
      */
    protected $reference_id;
    /**
      * $product The Square product that processed the transaction. See [TransactionProduct](#type-transactionproduct) for possible values
      * @var string
      */
    protected $product;
    /**
      * $client_id If the transaction was created in the Square Point of Sale app, this value is the ID generated for the transaction by Square Point of Sale.  This ID has no relationship to the transaction's canonical `id`, which is generated by Square's backend servers. This value is generated for bookkeeping purposes, in case the transaction cannot immediately be completed (for example, if the transaction is processed in offline mode).  It is not currently possible with the Connect API to perform a transaction lookup by this value.
      * @var string
      */
    protected $client_id;
    /**
      * $shipping_address The shipping address provided in the request, if any.
      * @var \SquareConnect\Model\Address
      */
    protected $shipping_address;
    /**
      * $order_id The order_id is an identifier for the order associated with this transaction, if any.
      * @var string
      */
    protected $order_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["id"])) {
              $this->id = $data["id"];
            } else {
              $this->id = null;
            }
            if (isset($data["location_id"])) {
              $this->location_id = $data["location_id"];
            } else {
              $this->location_id = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["tenders"])) {
              $this->tenders = $data["tenders"];
            } else {
              $this->tenders = null;
            }
            if (isset($data["refunds"])) {
              $this->refunds = $data["refunds"];
            } else {
              $this->refunds = null;
            }
            if (isset($data["reference_id"])) {
              $this->reference_id = $data["reference_id"];
            } else {
              $this->reference_id = null;
            }
            if (isset($data["product"])) {
              $this->product = $data["product"];
            } else {
              $this->product = null;
            }
            if (isset($data["client_id"])) {
              $this->client_id = $data["client_id"];
            } else {
              $this->client_id = null;
            }
            if (isset($data["shipping_address"])) {
              $this->shipping_address = $data["shipping_address"];
            } else {
              $this->shipping_address = null;
            }
            if (isset($data["order_id"])) {
              $this->order_id = $data["order_id"];
            } else {
              $this->order_id = null;
            }
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The transaction's unique ID, issued by Square payments servers.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets location_id
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }
  
    /**
     * Sets location_id
     * @param string $location_id The ID of the transaction's associated location.
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
        return $this;
    }
    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param string $created_at The time when the transaction was created, in RFC 3339 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets tenders
     * @return \SquareConnect\Model\Tender[]
     */
    public function getTenders()
    {
        return $this->tenders;
    }
  
    /**
     * Sets tenders
     * @param \SquareConnect\Model\Tender[] $tenders The tenders used to pay in the transaction.
     * @return $this
     */
    public function setTenders($tenders)
    {
        $this->tenders = $tenders;
        return $this;
    }
    /**
     * Gets refunds
     * @return \SquareConnect\Model\Refund[]
     */
    public function getRefunds()
    {
        return $this->refunds;
    }
  
    /**
     * Sets refunds
     * @param \SquareConnect\Model\Refund[] $refunds Refunds that have been applied to any tender in the transaction.
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->refunds = $refunds;
        return $this;
    }
    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }
  
    /**
     * Sets reference_id
     * @param string $reference_id If the transaction was created with the `Charge` endpoint, this value is the same as the value provided for the `reference_id` parameter in the request to that endpoint. Otherwise, it is not set.
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->reference_id = $reference_id;
        return $this;
    }
    /**
     * Gets product
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }
  
    /**
     * Sets product
     * @param string $product The Square product that processed the transaction. See [TransactionProduct](#type-transactionproduct) for possible values
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }
    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }
  
    /**
     * Sets client_id
     * @param string $client_id If the transaction was created in the Square Point of Sale app, this value is the ID generated for the transaction by Square Point of Sale.  This ID has no relationship to the transaction's canonical `id`, which is generated by Square's backend servers. This value is generated for bookkeeping purposes, in case the transaction cannot immediately be completed (for example, if the transaction is processed in offline mode).  It is not currently possible with the Connect API to perform a transaction lookup by this value.
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }
    /**
     * Gets shipping_address
     * @return \SquareConnect\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }
  
    /**
     * Sets shipping_address
     * @param \SquareConnect\Model\Address $shipping_address The shipping address provided in the request, if any.
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;
        return $this;
    }
    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }
  
    /**
     * Sets order_id
     * @param string $order_id The order_id is an identifier for the order associated with this transaction, if any.
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
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
     * @param  mixed   $value  Value to be set
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
