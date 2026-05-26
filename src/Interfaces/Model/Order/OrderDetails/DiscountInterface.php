<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails;

use Scalapay\Sdk\Model\Order\OrderDetails\Money;

/**
 * Interface DiscountInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails
 */
interface DiscountInterface
{
    /**
     * Returns display name key.
     *
     * @return string
     */
    public function getDisplayName();

    /**
     * Returns display name key.
     *
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName);

    /**
     * Returns amount key.
     *
     * @return Money
     */
    public function getAmount();

    /**
     * Returns amount key.
     *
     * @param Money $amount
     * @return $this
     */
    public function setAmount($amount);
}
