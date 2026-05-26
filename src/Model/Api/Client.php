<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Api;

use Exception;
use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Api\ClientInterface;
use Scalapay\Sdk\Service\Curl;

/**
 * Class Client
 *
 * @package Scalapay\Sdk\Model\Api
 */
class Client extends ModelAbstract implements ClientInterface
{
    /** @var string PRODUCTION_URI */
    const PRODUCTION_URI = 'https://api.scalapay.com';

    /** @var string SANDBOX_URI */
    const SANDBOX_URI = 'https://integration.api.scalapay.com';

    /** @var string $endpoint */
    protected $endpoint;

    /** @var string $apiKey */
    protected $apiKey;

    /**
     * Client constructor.
     *
     * @param string $endpoint
     * @param string $apiKey
     */
    public function __construct(
        $apiKey,
        $endpoint
    ) {
        $this->setEndpoint($endpoint);
        $this->setApiKey($apiKey);
    }

    /**
     * Returns endpoint key.
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets endpoint key.
     *
     * @param string $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Returns api key value.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Sets api key value.
     *
     * @param string $apiKey
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * Proxy method.
     *
     * @param $apiName
     * @param $urlPath
     * @param $payload
     * @param $httpMethod
     * @return array
     * @throws Exception
     */
    public function proxy(
        $apiName,
        $urlPath,
        $payload,
        $httpMethod
    ) {
        // get and check url and secret key
        $url = $this->getEndpoint();
        $secretKey = $this->getApiKey();
        if (!$url || !$secretKey) {
            throw new Exception($apiName . ' - Critical error: Invalid url or secret key.');
        }

        // set endpoint and http header
        $endpoint = $url . $urlPath;
        $httpHeaders = $this->getHttpHeaders($secretKey);

        // post call to Scalapay service
        $curl = new Curl();
        $response = $httpMethod === 'post' ?
            $curl->post($endpoint, $payload, $httpHeaders) :
            $curl->get($endpoint, $httpHeaders);

        // exit if the response is empty or if it is not an array
        if (!isset($response['body']) || !is_array($response['body'])) {
            throw new Exception(
                $apiName . ' - Critical error: Bad response body' .
                ' - Endpoint: ' . $endpoint .
                ' - Secret Key: ' . str_repeat('*', strlen($secretKey) - 4) . substr($secretKey, - 4)
            );
        }

        // exit if the http response status is not 200
        if ($response['http_code'] !== 200) {
            throw new Exception(
                $apiName . ' - Critical error: Bad response code' .
                ' - HTTP Code: ' . $response['http_code'] .
                ' - Body: ' . json_encode($response['body']) .
                ' - Endpoint: ' . $endpoint .
                ' - Secret Key: ' . str_repeat('*', strlen($secretKey) - 4) . substr($secretKey, - 4),
                isset($response['http_code']) ? $response['http_code'] : 500
            );
        }

        // return response
        return $response;
    }

    /**
     * Returns HTTP Headers.
     *
     * @param $secretKey
     * @return string[]
     */
    private function getHttpHeaders($secretKey)
    {
        return [
            'Accept: application/json',
            'Authorization: Bearer ' . $secretKey,
            'Content-Type: application/json'
        ];
    }
}
