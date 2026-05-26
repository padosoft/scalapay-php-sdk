<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Api;

use Exception;
use Scalapay\Sdk\Model\Api\Client;

/**
 * Interface ClientInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Api
 */
interface ClientInterface
{
    /**
     * Returns endpoint key.
     *
     * @return string
     */
    public function getEndpoint();

    /**
     * Sets endpoint key.
     *
     * @param string $endpoint
     * @return Client
     */
    public function setEndpoint($endpoint);

    /**
     * Returns api key value.
     *
     * @return string
     */
    public function getApiKey();

    /**
     * Sets api key value.
     *
     * @param string $apiKey
     * @return Client
     */
    public function setApiKey($apiKey);

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
    public function proxy($apiName, $urlPath, $payload, $httpMethod);
}
