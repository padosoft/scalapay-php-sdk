<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Refund;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Refund\RefundResponseInterface;
use Scalapay\Sdk\Model\Order\OrderDetails\Money;

/**
 * Class RefundResponse
 *
 * @package Scalapay\Sdk\Model\Merchant
 */
class RefundResponse extends ModelAbstract implements RefundResponseInterface
{
    /** @var string $token */
    protected $token;

    /** @var Money $amount */
    protected $amount;

    /** @var string $merchantReference */
    protected $merchantReference;

    /** @var string $refundToken */
    protected $refundToken;

    /** @var string $refundedAt */
    protected $refundedAt;

    /**
     * Returns token key.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets token key.
     *
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;
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
     * Sets the merchant reference.
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
     * Returns refund token key.
     *
     * @return string
     */
    public function getRefundToken()
    {
        return $this->refundToken;
    }

    /**
     * Sets refund token key.
     *
     * @param  string $refundToken
     * @return $this
     */
    public function setRefundToken($refundToken)
    {
        $this->refundToken = $refundToken;
        return $this;
    }
    
    /**
     * Returns refunded at key.
     *
     * @return string
     */
    public function getRefundedAt()
    {
        return $this->refundedAt;
    }

    /**
     * Sets refunded at key.
     *
     * @param string $refundedAt
     * @return $this
     */
    public function setRefundedAt($refundedAt)
    {
        $this->refundedAt = $refundedAt;
        return $this;
    }

    /**
     * Returns amount object.
     *
     * @return Money
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets amount object.
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
