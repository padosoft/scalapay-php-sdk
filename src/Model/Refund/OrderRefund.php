<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Refund;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Refund\OrderRefundInterface;

/**
 * Class OrderRefund
 *
 * @package Scalapay\Sdk\Model
 */
class OrderRefund extends ModelAbstract implements OrderRefundInterface
{
    /** @var string $refundAmount */
    protected $refundAmount;

    /** @var string $currency */
    protected $currency;

    /** @var string $merchantReference */
    protected $merchantReference;

    /** @var string $merchantRefundReference */
    protected $merchantRefundReference;

    /**
     * OrderRefund constructor.
     *
     * @param float $refundAmount
     * @param string $currency
     * @param string $merchantReference
     * @param string $merchantRefundReference
     */
    public function __construct(
        $refundAmount = null,
        $currency = 'EUR',
        $merchantReference = '',
        $merchantRefundReference = ''
    ) {
        $this->setRefundAmount($refundAmount);
        $this->setCurrency($currency);
        $this->setMerchantReference($merchantReference);
        $this->setMerchantRefundReference($merchantRefundReference);
    }

    /**
     * Returns refund amount key.
     *
     * @return string
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets refund amount key.
     *
     * @param float $amount
     * @return $this
     */
    public function setRefundAmount($amount)
    {
        $this->refundAmount = (string) $amount;
        return $this;
    }

    /**
     * Returns currency key.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets currency key.
     *
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = (string) $currency;
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
        $this->merchantReference = (string) $merchantReference;
        return $this;
    }

    /**
     * Returns merchant refund reference key.
     *
     * @return string
     */
    public function getMerchantRefundReference()
    {
        return $this->merchantRefundReference;
    }

    /**
     * Sets merchant refund reference key.
     *
     * @param string $merchantRefundReference
     * @return $this
     */
    public function setMerchantRefundReference($merchantRefundReference)
    {
        $this->merchantRefundReference = (string) $merchantRefundReference;
        return $this;
    }
}
