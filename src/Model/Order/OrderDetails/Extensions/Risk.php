<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails\Extensions;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\RiskInterface;

/**
 * Class Risk
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails\Extensions
 */
class Risk extends ModelAbstract implements RiskInterface
{
    /** @var bool $returning */
    protected $returning;

    /** @var int $orderCountLifetime */
    protected $orderCountLifetime;

    /** @var int $orderCountL30d */
    protected $orderCountL30d;

    /** @var int $orderCountL180d */
    protected $orderCountL180d;

    /** @var int $orderCountLifetimeRefunded */
    protected $orderCountLifetimeRefunded;

    /** @var float $orderCountL30dRefunded */
    protected $orderCountL30dRefunded;

    /** @var float $orderAmountLifetimeEur */
    protected $orderAmountLifetimeEur;

    /** @var float $orderAmountL30dEur */
    protected $orderAmountL30dEur;

    /** @var float $orderAmountLifetimeRefundedEur */
    protected $orderAmountLifetimeRefundedEur;

    /** @var float $orderAmountL30dRefundedEur */
    protected $orderAmountL30dRefundedEur;

    /** @var string $lastOrderTimestamp */
    protected $lastOrderTimestamp;

    /** @var string $lastRefundTimestamp */
    protected $lastRefundTimestamp;

    /** @var string $accountCreationTimestamp */
    protected $accountCreationTimestamp;

    /** @var int $paymentMethodCount */
    protected $paymentMethodCount;

    /** @var int $shippingAddressCount */
    protected $shippingAddressCount;

    /** @var string $shippingAddressTimestamp */
    protected $shippingAddressTimestamp;

    /** @var int $shippingAddressUseCount */
    protected $shippingAddressUseCount;

    /** @var string $phoneVerifiedTimestamp */
    protected $phoneVerifiedTimestamp;

    /**
     * Returns returning key.
     *
     * @return bool
     */
    public function getReturning()
    {
        return $this->returning;
    }

    /**
     * Sets returning key.
     *
     * @param bool $returning
     * @return $this
     */
    public function setReturning($returning)
    {
        $this->returning = $returning;
        return $this;
    }

    /**
     * Returns order count lifetime key.
     *
     * @return int
     */
    public function getOrderCountLifetime()
    {
        return $this->orderCountLifetime;
    }

    /**
     * Sets order count lifetime key.
     *
     * @param int $orderCountLifetime
     * @return $this
     */
    public function setOrderCountLifetime($orderCountLifetime)
    {
        $this->orderCountLifetime = $orderCountLifetime;
        return $this;
    }

    /**
     * Returns order count L30d key.
     *
     * @return int
     */
    public function getOrderCountL30d()
    {
        return $this->orderCountL30d;
    }

    /**
     * Sets order count L30d key.
     *
     * @param int $orderCountL30d
     * @return $this
     */
    public function setOrderCountL30d($orderCountL30d)
    {
        $this->orderCountL30d = $orderCountL30d;
        return $this;
    }

    /**
     * Returns order count L180d key.
     *
     * @return int
     */
    public function getOrderCountL180d()
    {
        return $this->orderCountL180d;
    }

    /**
     * Sets order count L180d key.
     *
     * @param int $orderCountL180d
     * @return $this
     */
    public function setOrderCountL180d($orderCountL180d)
    {
        $this->orderCountL180d = $orderCountL180d;
        return $this;
    }

    /**
     * Returns order count lifetime refunded key.
     *
     * @return float
     */
    public function getOrderCountLifetimeRefunded()
    {
        return $this->orderCountLifetimeRefunded;
    }

    /**
     * Sets order count lifetime refunded key.
     *
     * @param int $orderCountLifetimeRefunded
     * @return $this
     */
    public function setOrderCountLifetimeRefunded($orderCountLifetimeRefunded)
    {
        $this->orderCountLifetimeRefunded = $orderCountLifetimeRefunded;
        return $this;
    }

    /**
     * Returns order count L30d refunded key.
     *
     * @return float
     */
    public function getOrderCountL30dRefunded()
    {
        return $this->orderCountL30dRefunded;
    }

    /**
     * Sets order count L30d refunded key.
     *
     * @param float $orderCountL30dRefunded
     * @return $this
     */
    public function setOrderCountL30dRefunded($orderCountL30dRefunded)
    {
        $this->orderCountL30dRefunded = $orderCountL30dRefunded;
        return $this;
    }

    /**
     * Returns order amount lifetime eur key.
     *
     * @return float
     */
    public function getOrderAmountLifetime_eur()
    {
        return $this->orderAmountLifetimeEur;
    }

    /**
     * Sets order amount lifetime eur key.
     *
     * @param float $orderAmountLifetimeEur
     * @return $this
     */
    public function setOrderAmountLifetimeEur($orderAmountLifetimeEur)
    {
        $this->orderAmountLifetimeEur = $orderAmountLifetimeEur;
        return $this;
    }

    /**
     * Returns order amount L30d eur key.
     *
     * @return float
     */
    public function getOrderAmountL30DEur()
    {
        return $this->orderAmountL30dEur;
    }

    /**
     * Sets order amount L30d eur key.
     *
     * @param float $orderAmountL30dEur
     * @return $this
     */
    public function setOrderAmountL30DEur($orderAmountL30dEur)
    {
        $this->orderAmountL30dEur = $orderAmountL30dEur;
        return $this;
    }

    /**
     * Returns order amount lifetime refunded eur key.
     *
     * @return float
     */
    public function getOrderAmountLifetimeRefundedEur()
    {
        return $this->orderAmountLifetimeRefundedEur;
    }

    /**
     * Sets order amount lifetime refunded eur key.
     *
     * @param float $orderAmountLifetimeRefundedEur
     * @return $this
     */
    public function setOrderAmountLifetimeRefundedEur($orderAmountLifetimeRefundedEur)
    {
        $this->orderAmountLifetimeRefundedEur = $orderAmountLifetimeRefundedEur;
        return $this;
    }

    /**
     * Returns order amount L30d refunded eur key.
     *
     * @return float
     */
    public function getOrderAmountL30DRefundedEur()
    {
        return $this->orderAmountL30dRefundedEur;
    }

    /**
     * Sets order amount L30d refunded eur key.
     *
     * @param float $orderAmountL30dRefundedEur
     * @return $this
     */
    public function setOrderAmountL30DRefundedEur($orderAmountL30dRefundedEur)
    {
        $this->orderAmountL30dRefundedEur = $orderAmountL30dRefundedEur;
        return $this;
    }

    /**
     * Returns last order timestamp key.
     *
     * @return string
     */
    public function getLastOrderTimestamp()
    {
        return $this->lastOrderTimestamp;
    }

    /**
     * Sets last order timestamp key.
     *
     * @param string $lastOrderTimestamp
     * @return $this
     */
    public function setLastOrderTimestamp($lastOrderTimestamp)
    {
        $this->lastOrderTimestamp = $lastOrderTimestamp;
        return $this;
    }

    /**
     * Returns last refund timestamp key.
     *
     * @return string
     */
    public function getLastRefundTimestamp()
    {
        return $this->lastRefundTimestamp;
    }

    /**
     * Sets last refund timestamp key.
     *
     * @param string $lastRefundTimestamp
     * @return $this
     */
    public function setLastRefundTimestamp($lastRefundTimestamp)
    {
        $this->lastRefundTimestamp = $lastRefundTimestamp;
        return $this;
    }

    /**
     * Returns account creation timestamp key.
     *
     * @return string
     */
    public function getAccountCreationTimestamp()
    {
        return $this->accountCreationTimestamp;
    }

    /**
     * Sets account creation timestamp key.
     *
     * @param string $accountCreationTimestamp
     * @return $this
     */
    public function setAccountCreationTimestamp($accountCreationTimestamp)
    {
        $this->accountCreationTimestamp = $accountCreationTimestamp;
        return $this;
    }

    /**
     * Returns payment method count key.
     *
     * @return int
     */
    public function getPaymentMethodCount()
    {
        return $this->paymentMethodCount;
    }

    /**
     * Sets payment method count key.
     *
     * @param int $paymentMethodCount
     * @return $this
     */
    public function setPaymentMethodCount($paymentMethodCount)
    {
        $this->paymentMethodCount = $paymentMethodCount;
        return $this;
    }

    /**
     * Returns shipping address count key.
     *
     * @return int
     */
    public function getShippingAddressCount()
    {
        return $this->shippingAddressCount;
    }

    /**
     * Sets shipping address count key.
     *
     * @param int $shippingAddressCount
     * @return $this
     */
    public function setShippingAddressCount($shippingAddressCount)
    {
        $this->shippingAddressCount = $shippingAddressCount;
        return $this;
    }

    /**
     * Returns shipping address timestamp key.
     *
     * @return string
     */
    public function getShippingAddressTimestamp()
    {
        return $this->shippingAddressTimestamp;
    }

    /**
     * Sets shipping address timestamp key.
     *
     * @param string $shippingAddressTimestamp
     * @return $this
     */
    public function setShippingAddressTimestamp($shippingAddressTimestamp)
    {
        $this->shippingAddressTimestamp = $shippingAddressTimestamp;
        return $this;
    }

    /**
     * Returns shipping address use count key.
     *
     * @return int
     */
    public function getShippingAddressUseCount()
    {
        return $this->shippingAddressUseCount;
    }

    /**
     * Sets shipping address use count key.
     *
     * @param int $shippingAddressUseCount
     * @return $this
     */
    public function setShippingAddressUseCount($shippingAddressUseCount)
    {
        $this->shippingAddressUseCount = $shippingAddressUseCount;
        return $this;
    }

    /**
     * Returns phone verified timestamp key.
     *
     * @return string
     */
    public function getPhoneVerifiedTimestamp()
    {
        return $this->phoneVerifiedTimestamp;
    }

    /**
     * Sets phone verified timestamp key.
     *
     * @param string $phoneVerifiedTimestamp
     * @return $this
     */
    public function setPhoneVerifiedTimestamp($phoneVerifiedTimestamp)
    {
        $this->phoneVerifiedTimestamp = $phoneVerifiedTimestamp;
        return $this;
    }
}
