<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order;

use Exception;
use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetailsInterface;
use Scalapay\Sdk\Model\Customer\Consumer;
use Scalapay\Sdk\Model\Customer\Contact;
use Scalapay\Sdk\Model\Merchant\MerchantOptions;
use Scalapay\Sdk\Model\Order\OrderDetails\Discount;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions;
use Scalapay\Sdk\Model\Order\OrderDetails\Frequency;
use Scalapay\Sdk\Model\Order\OrderDetails\Item;
use Scalapay\Sdk\Model\Order\OrderDetails\Money;

/**
 * Class OrderDetails
 *
 * @package Scalapay\Sdk\Model\Order
 */
class OrderDetails extends ModelAbstract implements OrderDetailsInterface
{
    /** @var string[] ALLOWED_TYPES */
    const ALLOWED_TYPES = ['online', 'offline'];

    /** @var string[] ALLOWED_PRODUCTS */
    const ALLOWED_PRODUCTS = ['pay-in-3', 'pay-in-4', 'later'];

    /** @var Consumer $consumer */
    protected $consumer;

    /** @var Contact $billing */
    protected $billing;

    /** @var Contact $shipping */
    protected $shipping;

    /** @var Item[] $items */
    protected $items;

    /** @var Discount[] $discounts */
    protected $discounts;

    /** @var Money $totalAmount */
    protected $totalAmount;

    /** @var Money $taxAmount */
    protected $taxAmount;

    /** @var Money $shippingAmount */
    protected $shippingAmount;

    /** @var MerchantOptions $merchant */
    protected $merchant;

    /** @var string $merchantReference */
    protected $merchantReference;

    /** @var string $type */
    protected $type;

    /** @var string $product */
    protected $product;

    /** @var Frequency $frequency */
    protected $frequency;

    /** @var Extensions $extensions */
    protected $extensions;

    /**
     * Returns consumer object.
     *
     * @return Consumer
     */
    public function getConsumer()
    {
        return $this->consumer;
    }

    /**
     * Sets consumer object.
     *
     * @param Consumer $consumer
     * @return $this
     */
    public function setConsumer(Consumer $consumer)
    {
        $this->consumer = $consumer;
        return $this;
    }

    /**
     * Returns billing object.
     *
     * @return Contact
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * Sets billing object.
     *
     * @param Contact $billing
     * @return $this
     */
    public function setBilling(Contact $billing)
    {
        $this->billing = $billing;
        return $this;
    }

    /**
     * Returns shipping object.
     *
     * @return Contact
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Sets shipping object.
     *
     * @param Contact $shipping
     * @return $this
     */
    public function setShipping(Contact $shipping)
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * Returns items array object.
     *
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Sets items array object.
     *
     * @param Item[] $items
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * Returns discounts array object.
     *
     * @return Discount[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * Sets discounts array object.
     *
     * @param Discount[] $discounts
     * @return $this
     */
    public function setDiscounts(array $discounts)
    {
        $this->discounts = $discounts;
        return $this;
    }

    /**
     * Returns total amount object.
     *
     * @return Money
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets total amount object.
     *
     * @param Money $totalAmount
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Returns tax amount object.
     *
     * @return Money
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets tax amount object.
     *
     * @param Money $taxAmount
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Returns shipping amount object.
     *
     * @return Money
     */
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * Sets shipping amount object.
     *
     * @param Money $shippingAmount
     * @return $this
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }

    /**
     * Returns merchant object.
     *
     * @return MerchantOptions
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * Sets merchant object.
     *
     * @param MerchantOptions $merchant
     * @return $this
     */
    public function setMerchant(MerchantOptions $merchant)
    {
        $this->merchant = $merchant;
        return $this;
    }

    /**
     * Returns merchant reference key.
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * Sets merchant reference key.
     *
     * @param string $merchantReference
     * @return $this
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
        return $this;
    }

    /**
     * Returns type key.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets type key.
     *
     * @param string $type
     * @return $this
     * @throws Exception
     */
    public function setType($type)
    {
        $type = strtolower($type);
        if (!in_array($type, self::ALLOWED_TYPES)) {
            throw new Exception(
                'Type must be a value between ' .
                implode(', ', self::ALLOWED_TYPES) .
                '.'
            );
        }

        $this->type = $type;
        return $this;
    }

    /**
     * Returns product key.
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets product key.
     *
     * @param string $product
     * @return $this
     * @throws Exception
     */
    public function setProduct($product)
    {
        $product = strtolower($product);
        if (!in_array($product, self::ALLOWED_PRODUCTS)) {
            throw new Exception(
                'Product must be a value between ' .
                implode(', ', self::ALLOWED_PRODUCTS) .
                '.'
            );
        }

        $this->product = $product;
        return $this;
    }

    /**
     * Returns frequency object.
     *
     * @return Frequency
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets frequency object.
     *
     * @param Frequency $frequency
     * @return $this
     */
    public function setFrequency(Frequency $frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Returns extensions object.
     *
     * @return Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets extensions object.
     *
     * @param Extensions $extensions
     * @return $this
     */
    public function setExtensions($extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }
}
