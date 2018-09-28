<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;

/**
 * ListCatalogResponse Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class ListCatalogResponse implements ArrayAccess
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    public static $swaggerTypes = [
        'errors' => '\SquareConnect\Model\Error[]',
        'cursor' => 'string',
        'objects' => '\SquareConnect\Model\CatalogObject[]'
    ];

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    public static $attributeMap = [
        'errors' => 'errors',
        'cursor' => 'cursor',
        'objects' => 'objects'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    public static $setters = [
        'errors' => 'setErrors',
        'cursor' => 'setCursor',
        'objects' => 'setObjects'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    public static $getters = [
        'errors' => 'getErrors',
        'cursor' => 'getCursor',
        'objects' => 'getObjects'
    ];

    /**
     * $errors The set of [Error](#type-error)s encountered.
     * @var \SquareConnect\Model\Error[]
     */
    private $errors;
    /**
     * $cursor The pagination cursor to be used in a subsequent request.
     * If unset, this is the final response. See [Paginating results](#paginatingresults) for more information.
     * @var string
     */
    private $cursor;
    /**
     * $objects The [CatalogObject](#type-catalogobject)s returned.
     * @var \SquareConnect\Model\CatalogObject[]
     */
    private $objects;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["errors"])) {
                $this->errors = $data["errors"];
            } else {
                $this->errors = null;
            }
            if (isset($data["cursor"])) {
                $this->cursor = $data["cursor"];
            } else {
                $this->cursor = null;
            }
            if (isset($data["objects"])) {
                $this->objects = $data["objects"];
            } else {
                $this->objects = null;
            }
        }
    }

    /**
     * Gets errors
     * @return \SquareConnect\Model\Error[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets errors
     * @param \SquareConnect\Model\Error[] $errors The set of [Error](#type-error)s encountered.
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets cursor
     * @return string
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * Sets cursor
     * @param string $cursor The pagination cursor to be used in a subsequent request.
     * If unset, this is the final response. See [Paginating results](#paginatingresults) for more information.
     * @return $this
     */
    public function setCursor($cursor)
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * Gets objects
     * @return \SquareConnect\Model\CatalogObject[]
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * Sets objects
     * @param \SquareConnect\Model\CatalogObject[] $objects The [CatalogObject](#type-catalogobject)s returned.
     * @return $this
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;
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
