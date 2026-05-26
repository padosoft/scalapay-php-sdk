<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Refund;

/**
 * Interface OrderRefundInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Refund
 */
interface OrderRefundInterface
{
    /**
     * Returns refund amount key.
     *
     * @return string
     */
    public function getRefundAmount();

    /**
     * Sets refund amount key.
     *
     * @param float $amount
     * @return $this
     */
    public function setRefundAmount($amount);

    /**
     * Returns currency key.
     *
     * @return string
     */
    public function getCurrency();

    /**
     * Sets currency key.
     *
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency);

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
     * Returns merchant refund reference key.
     *
     * @return string
     */
    public function getMerchantRefundReference();

    /**
     * Sets merchant refund reference key.
     *
     * @param string $merchantRefundReference
     * @return $this
     */
    public function setMerchantRefundReference($merchantRefundReference);
}
