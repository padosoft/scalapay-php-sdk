<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order;

use DateTime;

/**
 * Interface OrderResponseInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order
 */
interface OrderResponseInterface
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
     * Returns expires key.
     *
     * @return DateTime
     */
    public function getExpires();

    /**
     * Sets expires key.
     *
     * @param DateTime $expires
     * @return $this
     */
    public function setExpires($expires);

    /**
     * Returns checkout url key.
     *
     * @return string
     */
    public function getCheckoutUrl();

    /**
     * Sets checkout url key.
     *
     * @param string $checkoutUrl
     * @return $this
     */
    public function setCheckoutUrl($checkoutUrl);
}
