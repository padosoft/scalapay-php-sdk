<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\ItemInterface;

/**
 * Class Item
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails
 */
class Item extends ModelAbstract implements ItemInterface
{
    /** @var string $name */
    protected $name;

    /** @var string $sku */
    protected $sku;

    /** @var int $quantity */
    protected $quantity;

    /** @var Money $price */
    protected $price;

    /** @var string $category */
    protected $category;

    /** @var string[] $subCategory */
    protected $subCategory;

    /** @var string $brand */
    protected $brand;

    /** @var string $gtin */
    protected $gtin;

    /** @var string $pageUrl */
    protected $pageUrl;

    /** @var string $imageUrl */
    protected $imageUrl;

    /**
     * Returns name key.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name key.
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Returns sku key.
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Sets sku key.
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * Returns quantity key.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets quantity key.
     *
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Returns price object.
     *
     * @return Money
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets price object.
     *
     * @param Money $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Returns category key.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets category key.
     *
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Returns sub category key.
     *
     * @return string[]
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * Sets sub category key.
     *
     * @param string[] $subCategory
     * @return $this
     */
    public function setSubCategory($subCategory)
    {
        $this->subCategory = $subCategory;
        return $this;
    }

    /**
     * Returns brand key.
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets brand key.
     *
     * @param string $brand
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Returns gtin key.
     *
     * @return string
     */
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * Sets gtin key.
     *
     * @param string $gtin
     * @return $this
     */
    public function setGtin($gtin)
    {
        $this->gtin = $gtin;
        return $this;
    }

    /**
     * Returns page url key.
     *
     * @return string
     */
    public function getPageUrl()
    {
        return $this->pageUrl;
    }

    /**
     * Sets page url key.
     *
     * @param string $pageUrl
     * @return $this
     */
    public function setPageUrl($pageUrl)
    {
        $this->pageUrl = $pageUrl;
        return $this;
    }

    /**
     * Returns image url key.
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Sets image url key.
     *
     * @param string $imageUrl
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
}
