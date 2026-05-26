<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\DiscountInterface;

/**
 * Class Discount
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails
 */
class Discount extends ModelAbstract implements DiscountInterface
{
    /** @var string $displayName */
    protected $displayName;

    /** @var Money $amount */
    protected $amount;

    /**
     * Returns display name key.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Returns display name key.
     *
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Returns amount key.
     *
     * @return Money
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Returns amount key.
     *
     * @param Money $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}
