<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Service;

use Exception;

/**
 * Interface CurlInterface
 *
 * @package Scalapay\Sdk\Interfaces\Service
 */
interface CurlInterface
{
    /**
     * Call an endpoint.
     *
     * @param string $url
     * @param string $requestMethod
     * @param array $httpHeaders
     * @param array $payload
     * @param array $auth
     * @param bool $autoReferer
     * @param bool $followLocation
     * @param bool $verifyPeer
     * @param int $verifyHost
     * @param bool $responseHeaders
     * @param int $timeout
     * @param bool $returnTransfer
     * @return array
     * @throws Exception
     */
    public function call($url, $requestMethod, $httpHeaders = [], $payload = [], $auth = [], $autoReferer = true, $followLocation = true, $verifyPeer = true, $verifyHost = 2, $responseHeaders = false, $timeout = 60, $returnTransfer = true);

    /**
     * Send a request with GET method.
     *
     * @param string $url
     * @param array $httpHeaders
     * @param array $auth
     * @return array
     * @throws Exception
     */
    public function get($url, $httpHeaders = [], $auth = []);

    /**
     * Send a request with POST method.
     *
     * @param string $url
     * @param array $payload
     * @param array $httpHeaders
     * @param array $auth
     * @return array
     * @throws Exception
     */
    public function post($url, $payload, $httpHeaders = [], $auth = []);
}
