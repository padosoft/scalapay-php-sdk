<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Refund;

use Scalapay\Sdk\Model\Order\OrderDetails\Money;

/**
 * Interface RefundResponseInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Refund
 */
interface RefundResponseInterface
{
    /**
     * Returns token key.
     *
     * @return string
     */
    public function getToken();

    /**
     * Sets token key.
     *
     * @param string $token
     * @return $this
     */
    public function setToken($token);

    /**
     * Returns merchant reference key.
     *
     * @return string
     */
    public function getMerchantReference();

    /**
     * Sets the merchant reference.
     *
     * @param string $merchantReference
     * @return $this
     */
    public function setMerchantReference($merchantReference);

    /**
     * Returns refund token key.
     *
     * @return string
     */
    public function getRefundToken();

    /**
     * Sets refund token key.
     *
     * @param string $refundToken
     * @return $this
     */
    public function setRefundToken($refundToken);

    /**
     * Returns refunded at key.
     *
     * @return string
     */
    public function getRefundedAt();

    /**
     * Sets refunded at key.
     *
     * @param string $refundedAt
     * @return $this
     */
    public function setRefundedAt($refundedAt);

    /**
     * Returns amount object.
     *
     * @return Money
     */
    public function getAmount();

    /**
     * Sets amount object.
     *
     * @param Money $amount
     * @return $this
     */
    public function setAmount($amount);
}
