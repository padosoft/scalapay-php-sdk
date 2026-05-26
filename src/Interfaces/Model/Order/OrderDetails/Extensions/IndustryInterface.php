<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions;

use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel;

/**
 * Interface IndustryInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions
 */
interface IndustryInterface
{
    /**
     * Returns checkout attempt decline count key.
     *
     * @return int
     */
    public function getCheckoutAttemptDeclineCount();

    /**
     * Sets checkout attempt decline count key.
     *
     * @param int $checkoutAttemptDeclineCount
     * @return $this
     */
    public function setCheckoutAttemptDeclineCount($checkoutAttemptDeclineCount);

    /**
     * Returns shipping lat key.
     *
     * @return float
     */
    public function getShippingLat();

    /**
     * Sets shipping lat key.
     *
     * @param float $shippingLat
     * @return $this
     */
    public function setShippingLat($shippingLat);

    /**
     * Returns shipping lng key.
     *
     * @return float
     */
    public function getShippingLng();

    /**
     * Sets shipping lng key.
     *
     * @param float $shippingLng
     * @return $this
     */
    public function setShippingLng($shippingLng);

    /**
     * Returns travel object.
     *
     * @return Travel
     */
    public function getTravel();

    /**
     * Sets travel object.
     *
     * @param Travel $travel
     * @return $this
     */
    public function setTravel($travel);
}