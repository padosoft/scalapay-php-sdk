<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails;

/**
 * Interface FrequencyInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails
 */
interface FrequencyInterface
{
    /**
     * Returns frequency type key.
     *
     * @return string
     */
    public function getFrequencyType();

    /**
     * Sets frequency type key.
     *
     * @param string $frequencyType
     * @return $this
     */
    public function setFrequencyType($frequencyType);

    /**
     * Returns number key.
     *
     * @return int
     */
    public function getNumber();

    /**
     * Sets number key.
     *
     * @param int $number
     * @return $this
     */
    public function setNumber($number);
}
