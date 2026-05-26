<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\MoneyInterface;

/**
 * Class Money
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails
 */
class Money extends ModelAbstract implements MoneyInterface
{
    /** @var string $amount */
    protected $amount;

    /** @var string $currency */
    protected $currency;

    /**
     * Money constructor.
     *
     * @param float $amount
     * @param string $currency
     */
    public function __construct(
        $amount = null,
        $currency = 'EUR'
    ) {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    /**
     * Returns the amount.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets the amount.
     *
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = (string) $amount;
        return $this;
    }

    /**
     * Returns the currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets the currency.
     *
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }
}
