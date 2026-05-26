<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails\Extensions;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\IndustryInterface;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel;

/**
 * Class Industry
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails\Extensions
 */
class Industry extends ModelAbstract implements IndustryInterface
{
    /** @var int $checkoutAttemptDeclineCount */
    protected $checkoutAttemptDeclineCount;

    /** @var float $shippingLat */
    protected $shippingLat;

    /** @var float $shippingLng */
    protected $shippingLng;

    /** @var Travel $travel */
    protected $travel;

    /**
     * Returns checkout attempt decline count key.
     *
     * @return int
     */
    public function getCheckoutAttemptDeclineCount()
    {
        return $this->checkoutAttemptDeclineCount;
    }

    /**
     * Sets checkout attempt decline count key.
     *
     * @param int $checkoutAttemptDeclineCount
     * @return $this
     */
    public function setCheckoutAttemptDeclineCount($checkoutAttemptDeclineCount)
    {
        $this->checkoutAttemptDeclineCount = $checkoutAttemptDeclineCount;
        return $this;
    }

    /**
     * Returns shipping lat key.
     *
     * @return float
     */
    public function getShippingLat()
    {
        return $this->shippingLat;
    }

    /**
     * Sets shipping lat key.
     *
     * @param float $shippingLat
     * @return $this
     */
    public function setShippingLat($shippingLat)
    {
        $this->shippingLat = $shippingLat;
        return $this;
    }

    /**
     * Returns shipping lng key.
     *
     * @return float
     */
    public function getShippingLng()
    {
        return $this->shippingLng;
    }

    /**
     * Sets shipping lng key.
     *
     * @param float $shippingLng
     * @return $this
     */
    public function setShippingLng($shippingLng)
    {
        $this->shippingLng = $shippingLng;
        return $this;
    }

    /**
     * Returns travel object.
     *
     * @return Travel
     */
    public function getTravel()
    {
        return $this->travel;
    }

    /**
     * Sets travel object.
     *
     * @param Travel $travel
     * @return $this
     */
    public function setTravel($travel)
    {
        $this->travel = $travel;
        return $this;
    }
}
