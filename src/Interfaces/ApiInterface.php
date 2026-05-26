<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces;

use Exception;
use Scalapay\Sdk\Model\Api\Client;
use Scalapay\Sdk\Model\Order\OrderDetails;
use Scalapay\Sdk\Model\Order\OrderResponse;
use Scalapay\Sdk\Model\Refund\OrderRefund;
use Scalapay\Sdk\Model\Refund\RefundResponse;

/**
 * Interface ApiInterface
 *
 * @package Scalapay\Sdk\Interfaces
 */
interface ApiInterface
{
    /**
     * Configure the Api client.
     *
     * @param $apiKey
     * @param $endpoint
     * @return $this
     */
    public static function configure($apiKey, $endpoint = Client::PRODUCTION_URI);

    /**
     * Capture a payment authorization.
     *
     * @param $token
     * @param $merchantReference
     * @return array
     * @throws Exception
     */
    public function capture($token, $merchantReference = null);

    /**
     * Extends payment authorization time to capture the payment in another moment.
     *
     * @param $token
     * @return array
     * @throws Exception
     */
    public function delayCapture($token);

    /**
     * Void a payment authorization.
     *
     * @param $token
     * @param $merchantReference
     * @return array
     * @throws Exception
     */
    public function void($token, $merchantReference);

    /**
     * Update a merchant reference.
     *
     * @param $token
     * @param $merchantReference
     * @return array
     * @throws Exception
     */
    public function updateMerchantReference($token, $merchantReference);

    /**
     * Returns order details.
     *
     * @param $token
     * @return array
     * @throws Exception
     */
    public function getOrderDetails($token);

    /**
     * Refund a payment.
     *
     * @param $token
     * @param OrderRefund $orderRefund
     * @return RefundResponse
     * @throws Exception
     */
    public function refund($token, OrderRefund $orderRefund);

    /**
     * Creates a Scalapay order.
     *
     * @param OrderDetails $order
     * @return OrderResponse
     * @throws Exception
     */
    public function createOrder(OrderDetails $order);

    /**
     * Returns the information about a payment.
     *
     * @param string $token
     * @return array
     * @throws Exception
     */
    public function getPaymentInfo($token);

    /**
     * Returns the Scalapay merchant configurations for the selected client.
     *
     * @return array
     * @throws Exception
     */
    public function getMerchantConfiguration();
}
