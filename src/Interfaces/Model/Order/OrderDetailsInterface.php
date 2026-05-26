<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order;

use Exception;
use Scalapay\Sdk\Model\Customer\Consumer;
use Scalapay\Sdk\Model\Customer\Contact;
use Scalapay\Sdk\Model\Merchant\MerchantOptions;
use Scalapay\Sdk\Model\Order\OrderDetails\Discount;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions;
use Scalapay\Sdk\Model\Order\OrderDetails\Frequency;
use Scalapay\Sdk\Model\Order\OrderDetails\Item;
use Scalapay\Sdk\Model\Order\OrderDetails\Money;

/**
 * Interface OrderDetailsInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order
 */
interface OrderDetailsInterface
{
    /**
     * Returns consumer object.
     *
     * @return Consumer
     */
    public function getConsumer();

    /**
     * Sets consumer object.
     *
     * @param Consumer $consumer
     * @return $this
     */
    public function setConsumer(Consumer $consumer);

    /**
     * Returns billing object.
     *
     * @return Contact
     */
    public function getBilling();

    /**
     * Sets billing object.
     *
     * @param Contact $billing
     * @return $this
     */
    public function setBilling(Contact $billing);

    /**
     * Returns shipping object.
     *
     * @return Contact
     */
    public function getShipping();

    /**
     * Sets shipping object.
     *
     * @param Contact $shipping
     * @return $this
     */
    public function setShipping(Contact $shipping);

    /**
     * Returns items array object.
     *
     * @return Item[]
     */
    public function getItems();

    /**
     * Sets items array object.
     *
     * @param Item[] $items
     * @return $this
     */
    public function setItems(array $items);

    /**
     * Returns discounts array object.
     *
     * @return Discount[]
     */
    public function getDiscounts();

    /**
     * Sets discounts array object.
     *
     * @param Discount[] $discounts
     * @return $this
     */
    public function setDiscounts(array $discounts);

    /**
     * Returns total amount object.
     *
     * @return Money
     */
    public function getTotalAmount();

    /**
     * Sets total amount object.
     *
     * @param Money $totalAmount
     * @return $this
     */
    public function setTotalAmount($totalAmount);

    /**
     * Returns tax amount object.
     *
     * @return Money
     */
    public function getTaxAmount();

    /**
     * Sets tax amount object.
     *
     * @param Money $taxAmount
     * @return $this
     */
    public function setTaxAmount($taxAmount);

    /**
     * Returns shipping amount object.
     *
     * @return Money
     */
    public function getShippingAmount();

    /**
     * Sets shipping amount object.
     *
     * @param Money $shippingAmount
     * @return $this
     */
    public function setShippingAmount($shippingAmount);

    /**
     * Returns merchant object.
     *
     * @return MerchantOptions
     */
    public function getMerchant();

    /**
     * Sets merchant object.
     *
     * @param MerchantOptions $merchant
     * @return $this
     */
    public function setMerchant(MerchantOptions $merchant);

    /**
     * Returns merchant reference key.
     *
     * @return string
     */
    public function getMerchantReference();

    /**
     * Sets merchant reference key.
     *
     * @param string $merchantReference
     * @return $this
     */
    public function setMerchantReference($merchantReference);

    /**
     * Returns type key.
     *
     * @return string
     */
    public function getType();

    /**
     * Sets type key.
     *
     * @param string $type
     * @return $this
     */
    public function setType($type);

    /**
     * Returns product key.
     *
     * @return string
     */
    public function getProduct();

    /**
     * Sets product key.
     *
     * @param string $product
     * @return $this
     * @throws Exception
     */
    public function setProduct($product);

    /**
     * Returns frequency object.
     *
     * @return Frequency
     */
    public function getFrequency();

    /**
     * Sets frequency object.
     *
     * @param Frequency $frequency
     * @return $this
     */
    public function setFrequency(Frequency $frequency);

    /**
     * Returns extensions object.
     *
     * @return Extensions
     */
    public function getExtensions();

    /**
     * Sets extensions object.
     *
     * @param Extensions $extensions
     * @return $this
     */
    public function setExtensions($extensions);
}
