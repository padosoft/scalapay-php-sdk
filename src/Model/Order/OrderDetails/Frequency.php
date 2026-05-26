<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\FrequencyInterface;

/**
 * Class Frequency
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails
 */
class Frequency extends ModelAbstract implements FrequencyInterface
{
    /** @var string $frequencyType */
    protected $frequencyType;

    /** @var int $number */
    protected $number;

    /**
     * Returns frequency type key.
     *
     * @return string
     */
    public function getFrequencyType()
    {
        return $this->frequencyType;
    }

    /**
     * Sets frequency type key.
     *
     * @param string $frequencyType
     * @return $this
     */
    public function setFrequencyType($frequencyType)
    {
        $this->frequencyType = $frequencyType;
        return $this;
    }

    /**
     * Returns number key.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets number key.
     *
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}
