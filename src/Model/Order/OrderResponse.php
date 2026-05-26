<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order;

use DateTime;
use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderResponseInterface;

/**
 * Class OrderResponse
 *
 * @package Scalapay\Sdk\Model\Order
 */
class OrderResponse extends ModelAbstract implements OrderResponseInterface
{
    /** @var string $token */
    protected $token;

    /** @var DateTime $expires */
    protected $expires;

    /** @var string $checkoutUrl */
    protected $checkoutUrl;

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
     * Returns expires key.
     *
     * @return DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Sets expires key.
     *
     * @param DateTime $expires
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
        return $this;
    }

    /**
     * Returns checkout url key.
     *
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->checkoutUrl;
    }

    /**
     * Sets checkout url key.
     *
     * @param string $checkoutUrl
     * @return $this
     */
    public function setCheckoutUrl($checkoutUrl)
    {
        $this->checkoutUrl = $checkoutUrl;
        return $this;
    }
}
