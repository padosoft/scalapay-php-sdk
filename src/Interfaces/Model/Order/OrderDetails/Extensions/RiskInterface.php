<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions;

/**
 * Interface RiskInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions
 */
interface RiskInterface
{
    /**
     * Returns returning key.
     *
     * @return bool
     */
    public function getReturning();

    /**
     * Sets returning key.
     *
     * @param bool $returning
     * @return $this
     */
    public function setReturning($returning);

    /**
     * Returns order count lifetime key.
     *
     * @return int
     */
    public function getOrderCountLifetime();

    /**
     * Sets order count lifetime key.
     *
     * @param int $orderCountLifetime
     * @return $this
     */
    public function setOrderCountLifetime($orderCountLifetime);

    /**
     * Returns order count L30d key.
     *
     * @return int
     */
    public function getOrderCountL30d();

    /**
     * Sets order count L30d key.
     *
     * @param int $orderCountL30d
     * @return $this
     */
    public function setOrderCountL30d($orderCountL30d);

    /**
     * Returns order count L180d key.
     *
     * @return int
     */
    public function getOrderCountL180d();

    /**
     * Sets order count L180d key.
     *
     * @param int $orderCountL180d
     * @return $this
     */
    public function setOrderCountL180d($orderCountL180d);

    /**
     * Returns order count lifetime refunded key.
     *
     * @return float
     */
    public function getOrderCountLifetimeRefunded();

    /**
     * Sets order count lifetime refunded key.
     *
     * @param int $orderCountLifetimeRefunded
     * @return $this
     */
    public function setOrderCountLifetimeRefunded($orderCountLifetimeRefunded);

    /**
     * Returns order count L30d refunded key.
     *
     * @return float
     */
    public function getOrderCountL30dRefunded();

    /**
     * Sets order count L30d refunded key.
     *
     * @param float $orderCountL30dRefunded
     * @return $this
     */
    public function setOrderCountL30dRefunded($orderCountL30dRefunded);

    /**
     * Returns order amount lifetime eur key.
     *
     * @return float
     */
    public function getOrderAmountLifetime_eur();

    /**
     * Sets order amount lifetime eur key.
     *
     * @param float $orderAmountLifetimeEur
     * @return $this
     */
    public function setOrderAmountLifetimeEur($orderAmountLifetimeEur);

    /**
     * Returns order amount L30d eur key.
     *
     * @return float
     */
    public function getOrderAmountL30DEur();

    /**
     * Sets order amount L30d eur key.
     *
     * @param float $orderAmountL30dEur
     * @return $this
     */
    public function setOrderAmountL30DEur($orderAmountL30dEur);

    /**
     * Returns order amount lifetime refunded eur key.
     *
     * @return float
     */
    public function getOrderAmountLifetimeRefundedEur();

    /**
     * Sets order amount lifetime refunded eur key.
     *
     * @param float $orderAmountLifetimeRefundedEur
     * @return $this
     */
    public function setOrderAmountLifetimeRefundedEur($orderAmountLifetimeRefundedEur);

    /**
     * Returns order amount L30d refunded eur key.
     *
     * @return float
     */
    public function getOrderAmountL30DRefundedEur();

    /**
     * Sets order amount L30d refunded eur key.
     *
     * @param float $orderAmountL30dRefundedEur
     * @return $this
     */
    public function setOrderAmountL30DRefundedEur($orderAmountL30dRefundedEur);

    /**
     * Returns last order timestamp key.
     *
     * @return string
     */
    public function getLastOrderTimestamp();

    /**
     * Sets last order timestamp key.
     *
     * @param string $lastOrderTimestamp
     * @return $this
     */
    public function setLastOrderTimestamp($lastOrderTimestamp);

    /**
     * Returns last refund timestamp key.
     *
     * @return string
     */
    public function getLastRefundTimestamp();

    /**
     * Sets last refund timestamp key.
     *
     * @param string $lastRefundTimestamp
     * @return $this
     */
    public function setLastRefundTimestamp($lastRefundTimestamp);

    /**
     * Returns account creation timestamp key.
     *
     * @return string
     */
    public function getAccountCreationTimestamp();

    /**
     * Sets account creation timestamp key.
     *
     * @param string $accountCreationTimestamp
     * @return $this
     */
    public function setAccountCreationTimestamp($accountCreationTimestamp);

    /**
     * Returns payment method count key.
     *
     * @return int
     */
    public function getPaymentMethodCount();

    /**
     * Sets payment method count key.
     *
     * @param int $paymentMethodCount
     * @return $this
     */
    public function setPaymentMethodCount($paymentMethodCount);

    /**
     * Returns shipping address count key.
     *
     * @return int
     */
    public function getShippingAddressCount();

    /**
     * Sets shipping address count key.
     *
     * @param int $shippingAddressCount
     * @return $this
     */
    public function setShippingAddressCount($shippingAddressCount);

    /**
     * Returns shipping address timestamp key.
     *
     * @return string
     */
    public function getShippingAddressTimestamp();

    /**
     * Sets shipping address timestamp key.
     *
     * @param string $shippingAddressTimestamp
     * @return $this
     */
    public function setShippingAddressTimestamp($shippingAddressTimestamp);

    /**
     * Returns shipping address use count key.
     *
     * @return int
     */
    public function getShippingAddressUseCount();

    /**
     * Sets shipping address use count key.
     *
     * @param int $shippingAddressUseCount
     * @return $this
     */
    public function setShippingAddressUseCount($shippingAddressUseCount);

    /**
     * Returns phone verified timestamp key.
     *
     * @return string
     */
    public function getPhoneVerifiedTimestamp();

    /**
     * Sets phone verified timestamp key.
     *
     * @param string $phoneVerifiedTimestamp
     * @return $this
     */
    public function setPhoneVerifiedTimestamp($phoneVerifiedTimestamp);
}