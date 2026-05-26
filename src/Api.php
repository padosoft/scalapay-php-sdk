<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk;

use Exception;
use Scalapay\Sdk\Interfaces\ApiInterface;
use Scalapay\Sdk\Interfaces\Model\Api\ClientInterface;
use Scalapay\Sdk\Model\Api\Client;
use Scalapay\Sdk\Model\Order\OrderDetails\Money;
use Scalapay\Sdk\Model\Order\OrderDetails;
use Scalapay\Sdk\Model\Refund\OrderRefund;
use Scalapay\Sdk\Model\Order\OrderResponse;
use Scalapay\Sdk\Model\Refund\RefundResponse;

/**
 * Class Api
 *
 * @package Scalapay\Sdk\Api
 */
class Api implements ApiInterface
{
    /** @var string API_NAME_CAPTURE */
    const API_NAME_CAPTURE = 'Capture API';

    /** @var string API_NAME_DELAY_CAPTURE */
    const API_NAME_DELAY_CAPTURE = 'Delay capture API';

    /** @var string API_NAME_VOID */
    const API_NAME_VOID = 'Void API';

    /** @var string API_NAME_UPDATE_MERCHANT_REFERENCE */
    const API_NAME_UPDATE_MERCHANT_REFERENCE = 'Update merchant reference API';

    /** @var string API_NAME_REFUND */
    const API_NAME_REFUND = 'Refund API';

    /** @var string API_NAME_CREATE_ORDER */
    const API_NAME_CREATE_ORDER = 'Create order API';

    /** @var string API_NAME_ORDER_DETAILS */
    const API_NAME_ORDER_DETAILS = 'Order details API';

    /** @var string API_NAME_PAYMENT_INFO */
    const API_NAME_PAYMENT_INFO = 'Payment info API';

    /** @var string API_NAME_MERCHANT_CONFIGURATION */
    const API_NAME_MERCHANT_CONFIGURATION = 'Merchant configuration API';

    /** @var ClientInterface $client */
    protected $client;

    /**
     * Api constructor.
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Configure the Api client.
     *
     * @param $apiKey
     * @param $endpoint
     * @return Api
     */
    public static function configure(
        $apiKey,
        $endpoint = Client::PRODUCTION_URI
    ) {
        $client = new Client($apiKey, $endpoint);
        return new self($client);
    }

    /**
     * Capture a payment authorization.
     *
     * @param $token
     * @param $merchantReference
     * @param Money|null $amount
     * @return array
     * @throws Exception
     */
    public function capture(
        $token,
        $merchantReference = null,
        $amount = null
    ) {
        // call Scalapay API
        return $this->client->proxy(
            self::API_NAME_CAPTURE,
            '/v2/payments/capture',
            array_filter(
                [
                    'token' => $token,
                    'merchantReference' => $merchantReference,
                    'amount' => $amount ? $amount->toArray() : null
                ]
            ),
            'post'
        );
    }

    /**
     * Extends payment authorization time to capture the payment in another moment.
     *
     * @param $token
     * @return array
     * @throws Exception
     */
    public function delayCapture($token)
    {
        // call Scalapay API
        return $this->client->proxy(
            self::API_NAME_DELAY_CAPTURE,
            '/v2/payments/' . $token . '/delay',
            [],
            'post'
        );
    }

    /**
     * Void a payment authorization.
     *
     * @param $token
     * @param $merchantReference
     * @return array
     * @throws Exception
     */
    public function void(
        $token,
        $merchantReference
    ) {
        // call Scalapay API
        return $this->client->proxy(
            self::API_NAME_VOID,
            '/v2/payments/' . $token . '/void',
            ['merchantReference' => $merchantReference],
            'post'
        );
    }

    /**
     * Update a merchant reference.
     *
     * @param $token
     * @param $merchantReference
     * @return array
     * @throws Exception
     */
    public function updateMerchantReference(
        $token,
        $merchantReference
    ) {
        // call Scalapay API
        return $this->client->proxy(
            self::API_NAME_UPDATE_MERCHANT_REFERENCE,
            '/v2/orders/' . $token,
            ['merchantReference' => $merchantReference],
            'post'
        );
    }

    /**
     * Returns order details.
     *
     * @param $token
     * @return array
     * @throws Exception
     */
    public function getOrderDetails($token)
    {
        // call Scalapay API
        return $this->client->proxy(
            self::API_NAME_ORDER_DETAILS,
            '/v2/payments/' . $token,
            [],
            'get'
        );
    }

    /**
     * Refund a payment.
     *
     * @param $token
     * @param OrderRefund $orderRefund
     * @return RefundResponse
     * @throws Exception
     */
    public function refund(
        $token,
        OrderRefund $orderRefund
    ) {
        // get order refund params
        $amount = $orderRefund->getRefundAmount();
        $currency = $orderRefund->getCurrency();
        $merchantReference = $orderRefund->getMerchantReference();
        $merchantRefundReference = $orderRefund->getMerchantRefundReference();
        $payload = [
            'refundAmount' => [
                'amount' => (string) $amount,
                'currency' => $currency
            ],
            'merchantReference' => $merchantReference,
            'merchantRefundReference' => $merchantRefundReference
        ];

        // call Scalapay API
        $response = $this->client->proxy(
            self::API_NAME_REFUND,
            '/v2/payments/' . $token . '/refund',
            $payload,
            'post'
        );

        // instance and build order refund object
        $refundResponse = new RefundResponse();
        if (isset($response['body']['token'])) {
            $refundResponse->setToken($response['body']['token']);
        }

        if (isset($response['body']['amount']['amount'])) {
            $refundResponse->setAmount((new Money())->setAmount($response['body']['amount']['amount']));
        }

        if (isset($response['body']['merchantReference'])) {
            $refundResponse->setMerchantReference($response['body']['merchantReference']);
        }

        if (isset($response['body']['refundToken'])) {
            $refundResponse->setRefundToken($response['body']['refundToken']);
        }

        if (isset($response['body']['refundedAt'])) {
            $refundResponse->setRefundedAt($response['body']['refundedAt']);
        }

        // return order refund object
        return $refundResponse;
    }

    /**
     * Creates a Scalapay order.
     *
     * @param OrderDetails $order
     * @return OrderResponse
     * @throws Exception
     */
    public function createOrder(OrderDetails $order)
    {
        // parse order object
        $orderArray = $order->toArray();

        // call Scalapay API
        $response = $this->client->proxy(
            self::API_NAME_CREATE_ORDER,
            '/v2/orders',
            $orderArray,
            'post'
        );

        // instance and build order response object
        $orderResponse = new OrderResponse();
        if (isset($response['body']['token'])) {
            $orderResponse->setToken($response['body']['token']);
        }

        if (isset($response['body']['expires'])) {
            $orderResponse->setExpires($response['body']['expires']);
        }

        if (isset($response['body']['checkoutUrl'])) {
            $orderResponse->setCheckoutUrl($response['body']['checkoutUrl']);
        }

        // return order response object
        return $orderResponse;
    }

    /**
     * Returns the information about a payment.
     *
     * @param string $token
     * @return array
     * @throws Exception
     */
    public function getPaymentInfo($token)
    {
        // call Scalapay API
        return $this->client->proxy(
            self::API_NAME_PAYMENT_INFO,
            '/v2/payments/' . $token,
            [],
            'get'
        );
    }

    /**
     * Returns the Scalapay merchant configurations for the selected client.
     *
     * @return array
     * @throws Exception
     */
    public function getMerchantConfiguration()
    {
        // call Scalapay API
        return $this->client->proxy(
            self::API_NAME_MERCHANT_CONFIGURATION,
            '/v3/configurations',
            [],
            'get'
        );
    }
}
