<?php
/**
 * InlineObject1
 *
 * PHP version 5
 *
 * @category Class
 * @package  com.spoonacular.client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * spoonacular API
 *
 * The spoonacular Nutrition, Recipe, and Food API allows you to access over 380,000 recipes, thousands of ingredients, 80,000 food products, and 100,000 menu items. Our food ontology and semantic recipe search engine makes it possible to search for recipes using natural language queries, such as \"gluten free brownies without sugar\" or \"low fat vegan cupcakes.\" You can automatically calculate the nutritional information for any recipe, analyze recipe costs, visualize ingredient lists, find recipes for what's in your fridge, find recipes based on special diets, nutritional requirements, or favorite ingredients, classify recipes into types and cuisines, convert ingredient amounts, or even compute an entire meal plan. With our powerful API, you can create many kinds of food and especially nutrition apps.  Special diets/dietary requirements currently available include: vegan, vegetarian, pescetarian, gluten free, grain free, dairy free, high protein, whole 30, low sodium, low carb, Paleo, ketogenic, FODMAP, and Primal.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: david@spoonacular.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace com.spoonacular.client\com.spoonacular.client.model;

use \ArrayAccess;
use \com.spoonacular.client\ObjectSerializer;

/**
 * InlineObject1 Class Doc Comment
 *
 * @category Class
 * @package  com.spoonacular.client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ingredient_list' => 'string',
        'servings' => 'float',
        'mode' => 'float',
        'default_css' => 'bool',
        'show_backlink' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ingredient_list' => null,
        'servings' => null,
        'mode' => null,
        'default_css' => null,
        'show_backlink' => null
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
        'ingredient_list' => 'ingredientList',
        'servings' => 'servings',
        'mode' => 'mode',
        'default_css' => 'defaultCss',
        'show_backlink' => 'showBacklink'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ingredient_list' => 'setIngredientList',
        'servings' => 'setServings',
        'mode' => 'setMode',
        'default_css' => 'setDefaultCss',
        'show_backlink' => 'setShowBacklink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ingredient_list' => 'getIngredientList',
        'servings' => 'getServings',
        'mode' => 'getMode',
        'default_css' => 'getDefaultCss',
        'show_backlink' => 'getShowBacklink'
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
        $this->container['ingredient_list'] = isset($data['ingredient_list']) ? $data['ingredient_list'] : null;
        $this->container['servings'] = isset($data['servings']) ? $data['servings'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['default_css'] = isset($data['default_css']) ? $data['default_css'] : null;
        $this->container['show_backlink'] = isset($data['show_backlink']) ? $data['show_backlink'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ingredient_list'] === null) {
            $invalidProperties[] = "'ingredient_list' can't be null";
        }
        if ($this->container['servings'] === null) {
            $invalidProperties[] = "'servings' can't be null";
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
     * Gets ingredient_list
     *
     * @return string
     */
    public function getIngredientList()
    {
        return $this->container['ingredient_list'];
    }

    /**
     * Sets ingredient_list
     *
     * @param string $ingredient_list The ingredient list of the recipe, one ingredient per line.
     *
     * @return $this
     */
    public function setIngredientList($ingredient_list)
    {
        $this->container['ingredient_list'] = $ingredient_list;

        return $this;
    }

    /**
     * Gets servings
     *
     * @return float
     */
    public function getServings()
    {
        return $this->container['servings'];
    }

    /**
     * Sets servings
     *
     * @param float $servings The number of servings.
     *
     * @return $this
     */
    public function setServings($servings)
    {
        $this->container['servings'] = $servings;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return float|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param float|null $mode The mode in which the widget should be delivered. 1 = separate views (compact), 2 = all in one view (full).
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets default_css
     *
     * @return bool|null
     */
    public function getDefaultCss()
    {
        return $this->container['default_css'];
    }

    /**
     * Sets default_css
     *
     * @param bool|null $default_css Whether the default CSS should be added to the response.
     *
     * @return $this
     */
    public function setDefaultCss($default_css)
    {
        $this->container['default_css'] = $default_css;

        return $this;
    }

    /**
     * Gets show_backlink
     *
     * @return bool|null
     */
    public function getShowBacklink()
    {
        return $this->container['show_backlink'];
    }

    /**
     * Sets show_backlink
     *
     * @param bool|null $show_backlink Whether to show a backlink to spoonacular. If set false, this call counts against your quota.
     *
     * @return $this
     */
    public function setShowBacklink($show_backlink)
    {
        $this->container['show_backlink'] = $show_backlink;

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
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


