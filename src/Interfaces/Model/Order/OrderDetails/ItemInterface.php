<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails;

use Scalapay\Sdk\Model\Order\OrderDetails\Money;

/**
 * Interface ItemInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails
 */
interface ItemInterface
{
    /**
     * Returns name key.
     *
     * @return string
     */
    public function getName();

    /**
     * Sets name key.
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Returns sku key.
     *
     * @return string
     */
    public function getSku();

    /**
     * Sets sku key.
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku);

    /**
     * Returns quantity key.
     *
     * @return int
     */
    public function getQuantity();

    /**
     * Sets quantity key.
     *
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity);

    /**
     * Returns price object.
     *
     * @return Money
     */
    public function getPrice();

    /**
     * Sets price object.
     *
     * @param Money $price
     * @return $this
     */
    public function setPrice($price);

    /**
     * Returns category key.
     *
     * @return string
     */
    public function getCategory();

    /**
     * Sets category key.
     *
     * @param string $category
     * @return $this
     */
    public function setCategory($category);

    /**
     * Returns sub category key.
     *
     * @return string[]
     */
    public function getSubCategory();

    /**
     * Sets sub category key.
     *
     * @param string[] $subCategory
     * @return $this
     */
    public function setSubCategory($subCategory);

    /**
     * Returns brand key.
     *
     * @return string
     */
    public function getBrand();

    /**
     * Sets brand key.
     *
     * @param string $brand
     * @return $this
     */
    public function setBrand($brand);

    /**
     * Returns gtin key.
     *
     * @return string
     */
    public function getGtin();

    /**
     * Sets gtin key.
     *
     * @param string $gtin
     * @return $this
     */
    public function setGtin($gtin);

    /**
     * Returns page url key.
     *
     * @return string
     */
    public function getPageUrl();

    /**
     * Sets page url key.
     *
     * @param string $pageUrl
     * @return $this
     */
    public function setPageUrl($pageUrl);

    /**
     * Returns image url key.
     *
     * @return string
     */
    public function getImageUrl();

    /**
     * Sets image url key.
     *
     * @param string $imageUrl
     * @return $this
     */
    public function setImageUrl($imageUrl);
}
