<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails;

/**
 * Interface MoneyInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails
 */
interface MoneyInterface
{
    /**
     * Returns the amount.
     *
     * @return string
     */
    public function getAmount();

    /**
     * Sets the amount.
     *
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount);

    /**
     * Returns the currency.
     *
     * @return string
     */
    public function getCurrency();

    /**
     * Sets the currency.
     *
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency);
}
